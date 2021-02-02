@extends('layouts.common')

@php
    $ProductMRPTotal = 0;
    $ProductPriceTotal = 0;
@endphp

@section('title', 'My Cart')
    
@section('css-js')
    
@endsection

@section('content')


<div class="body-container" id="CartContainer">
    
    <div class="container">
    <div class="row">
    <div class="col-md-9">
    <div class="account-details-container">
    
     
        <div class="right-wishlist-container"  style="min-height: 80vh;">
    
            <div class="wishlist-basic-padding">
                <div class="account-details-title" style="padding-bottom: 0px;">
                    <span>Master's Shopping Cart ({{$cartCount}} @if ($cartCount > 1)Items @else Item @endif)</span>
                </div>
            </div>
    
            <div class="account-menu-break"></div>   
                    @if (!isset($cart[0]))
                    <div class="wishlist-container">
                        <div class="wishlist-basic-padding">
                            <div class="w-100"  >
                                <div class="blank-wishlist-container text-center">
                                    <div class="blank-wishlist-img-container" style="margin-top: 50px;">
                                        <img class="img-nodrag" style="max-width: 35%" src="{{ asset('img/svg/blank-cart.png') }}">
                                    </div>
                                    <div class="blank-wishlist-txt-container text-center" style="margin-top: 30px;">
                                        <span style="font-weight: 500; font-size: 20px;">Empty Cart!</span>
                                        <br>
                                        <span>You have no items in your cart. Start adding!</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                    @else
                            
                <div class="wishlist-container">   
                    @foreach ($cart as $cart)
                    @foreach ($cart->Products as $Product) 
    
                    @php $StockCounter = 1; @endphp

                            <div class="row wishlist-basic-padding" id="CartItem{{ $Product->id }}" style="padding-bottom: 0;">
                                <div class="col-md-3">
                                    <a href="http://localhost:8000/product/{{ $Product->id }}" target="_blank">
                                        <div class="wish-product-image-container">
                                            <img src="{{ asset('storage/images/products/'.$cart->Images->image) }}" alt="">
                                        </div>

                                    </a>
                                </div>
    
                                <div class="col-md-8">
                                    <a href="http://localhost:8000/product/{{ $Product->id }}" target="_blank">
                                        <span class="wish-product-title font-weight-500 color-0066c0">{{ $Product->product_name }}</span>
                                    </a>
                                    
                                    <div class="details-price" style="margin-bottom: 0;">
                                        <span class="text-muted" style="font-size: 15px;"><font class="rupees"><s>₹</s></font><s> {{ number_format($Product->product_mrp * $cart->qty, 2, ".", ",") }}</s></span>
                                        <br>
                                        <span><font class="rupees" style="font-size: 18px">₹</font> <span style="font-size: 18px;">{{ number_format($Product->product_price * $cart->qty, 2, ".", ",") }}</span> 
                                            <b style="font-size: 15px; color: #388e3c; font-weight: 500;"> 
                                                {{ ((($Product->product_mrp - $Product->product_price) / $Product->product_mrp)*100)%100 }}% off
                                            </b>  
                                        </span>

                                        @php
                                            $ProductMRPTotal = $ProductMRPTotal+$Product->product_mrp * $cart->qty;
                                            $ProductPriceTotal = $ProductPriceTotal+$Product->product_price * $cart->qty;
                                        @endphp
                                        
                                        <div class="input-group input-group-sm" style="max-width: 160px;">
                                            <div class="input-group-prepend">
                                              <label class="input-group-text" for="product-quantity">Qty</label>
                                            </div>
                                            <select class="custom-select" id="product-quantity-{{ $Product->id }}" onchange="ChangeQty('{{ $Product->id }}')">
                                            @while ($StockCounter <= $Product->product_stock)
                                                <option @if ($cart->qty == $StockCounter) selected @endif value="{{$StockCounter}}">{{$StockCounter}}</option>
                                                {{ $StockCounter++ }}
                                            @endwhile
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                        
                                <div class="col-md-1">
                                    <div class="wishlist-remove-btn-container">
                                        <div>
                                            <a id="CartRemoveBtn" onClick="ToggleCart('{{$Product->id}}')" target="_blank">
                                                <span>
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </div>                            
                                    </div>
                                </div>
                            </div>

                            <div class="row wishlist-basic-padding" style="padding-top: 0;"></div>

                        <div class="account-menu-break" id="CartBreak{{ $Product->id }}"></div>      
                        @endforeach 
                        @endforeach 
                    </div> 
                    @endif

                </div>
        
            </div>
        </div>

    
            <div class="col-md-3" >
                <div class="account-details-container row" style="padding: 13px 24px;">
                    <span style="font-size: 16px; font-weight: 500;">PRICE DETAILS</span>
                </div>
                <div class="account-details-container row">
                    <div class="account-menu-items-container">
                            <span>MRP</span>
                            <span class="float-right"><strong><font class="rupees">&#8377;</font>{{ number_format($ProductMRPTotal, 2, ".", ",") }}</strong></span>
                    </div>
                    <div class="account-menu-items-container">
                        <span>Discount</span>
                        <span class="float-right"><strong style="font-weight: 500; color: #388e3c;">- <font class="rupees">&#8377;</font>{{ number_format($ProductMRPTotal - $ProductPriceTotal, 2, ".", ",") }}</strong></span>
                    </div>
                    <div class="account-menu-items-container">
                        <span>Delivery Charges</span>
                        <span class="float-right"><strong style="font-weight: 500; color: #388e3c;">FREE</strong></span>
                    </div>
                    <div class="account-menu-items-container"  style="font-weight: 600; color: black; font-size: 18px; border-top: 1px dashed #e0e0e0; border-bottom: 1px dashed #e0e0e0; margin-top: 18px; margin-bottom: 18px;">
                        <span>Total Amount</span>
                        <span class="float-right"><font class="rupees">&#8377;</font>{{ number_format($ProductPriceTotal, 2, ".", ",") }}</span>
                    </div>
                    <div class="w-100 cart-checkout-btn-container">
                        <button class="">CHECKOUT &nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i></button>
                    </div>

                    <div class="account-menu-break"></div> 

                </div>
            </div>
      
        </div>
    </div>
</div>

@endsection

@section('bottom-js')

<script>
    function ChangeQty(product_id) {
        var cart_qty = $('#product-quantity-'+product_id).val()
        
        $('#CartItem'+product_id).fadeOut()
        $('#CartBreak'+product_id).fadeOut()

        $.ajax({
            url: "{{route('change-qty')}}",
            method: 'POST',
            data: {
                'product_id'    : product_id,
                'cart_qty'      : cart_qty,
            },
            success: function (data) {

                if (data == 200) {
                    $('#CartContainer').load("{{ route('cart') }} #CartContainer")
                    $('#CartItem'+product_id).fadeIn()
                    $('#CartBreak'+product_id).fadeIn()

                } else {
                   console.log('Error');
                }
            }
        })
    }
</script>
    
<script>

    function ToggleCart(product_id) {

        $('#CartItem'+product_id).fadeOut()
        $('#CartBreak'+product_id).fadeOut()

        $.ajax({
            url: "{{route('toggle-cart-btn')}}",
            method: 'POST',
            data: {
                'product_id' : product_id,
            },
            success: function (data) {

                if (data == 500) {
                    $('#CartContainer').load("{{ route('cart') }} #CartContainer")
                    $('#CartCount').load("{{ route('cart') }} #CartCount")
                } else if(data == 200) {
                    console.log('Error removing product from cart.')
                }
            }
        })

    }

</script>
@endsection