<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Seshac\Shiprocket\Shiprocket;
use App\Models\OrderItem;
use App\Models\Order;
use App\Mail\ItemDeliveredMail;
use Mail;

class DeliveredStatusUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:DeliveredStatusUpdate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $OrderItems = OrderItem::with('shipment')->with('order.User')->with('product.images')->where('status', 'item_shipped')->whereHas('shipment', function($q) {
            $q->where('courier_name', 'Shiprocket')
            ->whereNotNull('shipment_id');
        })->get();

        foreach ($OrderItems as $OrderItem) {
            $token =  Shiprocket::getToken();
            $track = Shiprocket::track($token)->throwShipmentId($OrderItem->shipment->shipment_id);
            
            if (isset($track['tracking_data']['shipment_status']) && $track['tracking_data']['shipment_status'] == 7) {
                OrderItem::where('id', $OrderItem->id)->update([
                    'status' => 'item_delivered',
                ]);

                // Send Notification To User That Ordered Item Delivered
                $data = [
                    'OrderItem' => $OrderItem,
                ];
                
                Mail::to($OrderItem->order->User->email)->send(new ItemDeliveredMail($data));
            }

            $a = OrderItem::where('order_id', $OrderItem->order_id)->get();
            $b = OrderItem::where('order_id', $OrderItem->order_id)->where('status', 'item_delivered')->get();
                
            if ($a->count() == $b->count()) {
                Order::where('id', $OrderItem->order_id)->update([
                    'status' => 'order_delivered',
                ]);
            }

            
        }

        return 0;
    }
}
