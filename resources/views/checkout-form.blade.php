@extends('layouts.common')

@section('title', 'Checkout')

@section('modals')
<div id="AddAddressModalDiv">
    <div class="modal fade" id="AddAddressModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Address (India Only)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

           <div class="modal-body">
               <form id="AddAddressForm" style="width: 100%"> @csrf
                    <div class="row w-100">
                        <div class="col-12">
                            <div class="form-group">
                            <label for="NewAddressName">Receiver's Name <font color="red">*</font></label>
                            <input autocomplete="name" required name="name"  type="text" id="NewAddressName" class="form-control" placeholder="i.e Jarvis" >
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group">
                            <label for="NewAddressHouse">House No. / Apt. <font color="red">*</font></label>
                            <input required name="house" type="text" id="NewAddressHouse" class="form-control" placeholder="Stark Tower" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label for="NewAddressLocality">Locality <font color="red">*</font></label>
                            <input autocomplete="street-address" required name="locality" type="text" id="NewAddressLocality" class="form-control" placeholder="i.e 200 Park Ave">
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressCity">City/Town <font color="red">*</font></label>
                                <input autocomplete="locality" required name="city" type="text" id="NewAddressCity" class="form-control" placeholder="i.e Midtown Manhattan" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressDistrict">District <font color="red">*</font></label>
                                <input required name="district" type="text" id="NewAddressDistrict" class="form-control" placeholder="i.e New York" >
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressState">State <font color="red">*</font></label>
                                <input required name="state" type="text" id="NewAddressState" class="form-control" placeholder="i.e New York" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressPin">Postal PIN Code <font color="red">*</font></label>
                                <input autocomplete="postal-code" required name="pin_code" type="text" id="NewAddressPin" class="form-control" placeholder="Postal PIN Code" >
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressMobile">Mobile Number <font color="red">*</font></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+91</span>
                                    </div>
                                    <input autocomplete="tel-local" required name="mobile" type="text" id="NewAddressMobile" class="form-control" placeholder="10-Digit Mobile Number" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressAltMobile">Alternate Mobile</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+91</span>
                                    </div>
                                    <input autocomplete="tel-local" name="altMobile" type="text" id="NewAddressAltMobile" class="form-control" placeholder="Optional" >
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
           </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                <button type="submit" form="AddAddressForm" class="btn btn-primary">ADD ADDRESS</button>
              </div>
        </div>
        </div>
    </div>  
</div>


<div id="EdiAddressModalDiv">
    <div class="modal fade" id="EditAddressModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Addres (India Only)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <div class="modal-body">
               <form id="EditAddressForm" style="width: 100%"> @csrf <input type="hidden" name="address_id" value="">
                    <div class="row w-100">
                        <div class="col-12">
                            <div class="form-group">
                            <label for="NewAddressName2">Receiver's Name <font color="red">*</font></label>
                            <input autocomplete="name" required name="name"  type="text" id="NewAddressName2" class="form-control" placeholder="i.e Jarvis" >
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group">
                            <label for="NewAddressHouse2">House No. / Apt. <font color="red">*</font></label>
                            <input required name="house" type="text" id="NewAddressHouse2" class="form-control" placeholder="Stark Tower" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label for="NewAddressLocality2">Locality <font color="red">*</font></label>
                            <input autocomplete="street-address" required name="locality" type="text" id="NewAddressLocality2" class="form-control" placeholder="i.e 200 Park Ave" >
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressCity2">City/Town <font color="red">*</font></label>
                                <input autocomplete="locality" required name="city" type="text" id="NewAddressCity2" class="form-control" placeholder="i.e Midtown Manhattan" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressDistrict2">District <font color="red">*</font></label>
                                <input required name="district" type="text" id="NewAddressDistrict2" class="form-control" placeholder="i.e New York" >
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressState2">State <font color="red">*</font></label>
                                <input required name="state" type="text" id="NewAddressState2" class="form-control" placeholder="i.e New York" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressPin2">Postal PIN Code <font color="red">*</font></label>
                                <input autocomplete="postal-code" required name="pin_code" type="text" id="NewAddressPin2" class="form-control" placeholder="Postal PIN Code" >
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressMobile2">Mobile Number <font color="red">*</font></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+91</span>
                                    </div>
                                    <input autocomplete="mobile" required name="mobile" type="text" id="NewAddressMobile2" class="form-control" placeholder="10-Digit Mobile Number" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NewAddressAltMobile2">Alternate Mobile</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+91</span>
                                    </div>
                                    <input autocomplete="mobile" name="altMobile" type="text" id="NewAddressAltMobile2" class="form-control" placeholder="Optional" >
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
           </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                <button type="submit" form="EditAddressForm" class="btn btn-primary">SAVE CHANGES</button>
              </div>
        </div>
        </div>
    </div>  
</div>
@endsection



    








@section('content')

    <div class="body-container" id="CartContainer">
        <div class="container">
        <div class="row">
            
            {{-- Order Summary Section --}}
            <div class="col-md-9 d-none display-pages-section" id="OrderSummarySection">
                <div class="account-details-container">
                    <div class="right-wishlist-container"  style="min-height: 80vh;">
                        <div class="wishlist-basic-padding">
                            <div class="account-details-title" style="padding-bottom: 0px;">
                                <span>Order Summary</span>
                            </div>
                        </div>
                        <div class="account-menu-break"></div>   
                        
                                @if (!isset($data))
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
                                                    <span>No Items To Checkout!</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                @else
                            
            <div class="wishlist-container">   
                <form id="CheckoutForm" method="POST" action="{{ route('checkout-submit') }}"> @csrf
                <input type="hidden" name="payment_method" required>
                <input type="hidden" name="address_id" required>
                @foreach ($data as $key => $item )
                @if(!$item->product_stock <= 0) 
                
                @php $StockCounter = 1; @endphp

                                        <div class="row wishlist-basic-padding" id="CartItem{{ $item->id }}" style="padding-bottom: 0;">
                                            <div class="col-md-3">
                                                <a href="http://localhost:8000/product/{{ $item->id }}" target="_blank">
                                                    <div class="wish-product-image-container">
                                                        <img src="{{ asset('storage/images/products/'. $item->images[0]->image ) }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="col-md-8">
                                                <a href="http://localhost:8000/product/{{ $item->id }}" target="_blank">
                                                    <span class="wish-product-title font-weight-500 color-0066c0">{{ $item->product_name }}</span>
                                                </a>
                                                
                                                <div class="details-price" style="margin-bottom: 0;">
                                                    <span class="text-muted" style="font-size: 15px;"><font class="rupees"><s>₹</s></font><s> <span id="MRPField{{$item->id}}">{{ moneyFormatIndia($item->product_mrp * $qty[$key]) }}</s></span></span>
                                                    <br>
                                                    <span><font class="rupees" style="font-size: 18px">₹</font> <span style="font-size: 18px;"><span id="PriceField{{$item->id}}">{{ moneyFormatIndia($item->product_price * $qty[$key]) }}</span></span> 
                                                        <b style="font-size: 15px; color: #388e3c; font-weight: 500;"> 
                                                            {{ ((($item->product_mrp - $item->product_price) / $item->product_mrp)*100)%100 }}% off
                                                        </b>  
                                                    </span>
        
                                                    @if($item->product_stock <= 0)
                                                        <p class="text-danger" style="font-weight: 500;"></i>Out of stock!</p>
                                                    @else
                                                    <div class="input-group input-group-sm" style="max-width: 160px;">
                                                        <div class="input-group-prepend">
                                                        <label class="input-group-text" for="product-quantity">Qty</label>
                                                        </div>
                                                        <input type="hidden" name="product_id[]" id="" value="{{ $item->id }}">
                                                        <select name="product_qty[]" class="custom-select" id="product-quantity-{{ $item->id }}" onchange="ChangeQty('{{ $item->id }}')">
                                                        @while ($StockCounter <= $item->product_stock)
                                                            <option @if ($qty[$key] == $StockCounter) selected @endif value="{{$StockCounter}}">{{$StockCounter}}</option>
                                                            {{ $StockCounter++ }}
                                                        @endwhile
                                                        </select>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        
                                    </div>
                                    
        
                                        <div class="row wishlist-basic-padding" style="padding-top: 0;"></div>
        
                                    <div class="account-menu-break" id="CartBreak{{ $item->id }}"></div>      
                                    @endif
                                    @endforeach 
                                </form>
                                
                                </div> 
                                @endif
                            </div>
                        </div>
                    </div>
                    


{{-- Address Section Start --}} 
    <div class="col-md-9 display-pages-section" id="AddressSection">
        <div id="OrderSummaryDIV">
        <div id="addresses-container-div">
            <div class="account-details-container">
                <div class="right-account-container ">
                    <div class="account-details-title">
                        <span>Delivery Address</span>
                    </div>

                    <div class="wishlist-container">
                        <div class="add-address-box-wrapper">
                            <a href="#AddAddress" data-toggle="modal" data-target="#AddAddressModal">
                                <div class="add-address-box">
                                    <img src="{{ asset('img/svg/times.svg') }}" alt="" srcset="">
                                    <span>ADD A NEW ADDRESS</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            {{-- {{Dd($addresses->count())}} --}}
                            @if ( !isset($addresses[0]))
                                <div class="wishlist-container">
                                    <div class="wishlist-basic-padding">
                                        <div class="w-100"  >
                                            <div class="blank-wishlist-container text-center">
                                                <div class="blank-wishlist-img-container" style="margin-top: 50px;">
                                                    <img class="img-nodrag" style="max-width: 35%" src="{{ asset('img/svg/no-address.svg') }}">
                                                </div>
                                                <div class="blank-wishlist-txt-container text-center" style="margin-top: 30px;">
                                                    <span style="font-weight: 500; font-size: 20px;">No Address Added!</span>
                                                    <br>
                                                    <span>Please add one!</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            @else
                                @foreach ($addresses as $address)
                                <div class="_1CeZIA " id="AddressContainer{{$address->id}}">
                                    <div class="_26SF1Q">
                                        <div class="umgxnI">
                                            <div class="dpjmKp">
                                                <img src="{{ asset('img/svg/dots.svg') }}">
                                                <div class="_3E8aIl _1UHYca">
                                                    <div class="_16FXBY" onclick="EditAddress({{$address->id}})">
                                                        <span>Edit</span>
                                                    </div>
                                                    <div class="_16FXBY" onclick="RemoveAddress({{$address->id}})">
                                                        <span>Delete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="_2FCIZU">
                                                <span class="_1GczDM">{{ $address->updated_at }}</span>
                                            </div>
                                            <p class="_2adSi5">
                                                <span class="_3CfVDh">{{ $address->name }}</span>
                                                <span class="_1Z7fmh _3CfVDh">{{$address->mobile}}</span>
                                            </p>
                                            <span class="_2adSi5 WlNme0">{{$address->house_no}}, {{$address->locality}}, {{$address->city}}, {{$address->district}}, {{$address->state}} - 
                                                <span class="_2dQV-8">{{$address->pin_code}}</span>
                                            </span>
                                            <div><button type="submit" class="btn btn-sm btn-dark float-right mt-3" onclick="SelectAddress({{$address->id}})">Deliver To This Address</button></div>
                                    </div>
                                </div>              
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
{{-- Address Section End --}}

{{-- Payment Section Start --}} 
    <div class="col-md-9 d-none display-pages-section" id="PaymentSection">
        <div id="addresses-container-div">
            <div class="account-details-container">
                <div class="right-account-container ">
                    <div class="account-details-title">
                        <span>Choose Payment Method</span>
                    </div>

                    <div class="wishlist-container">
                        <div class="PaymentBoxes" >                            
                                <div class="PaymentMethodContainer">
                                    <div class="payment-option-container paytm_btn" style="cursor: pointer;">
                                        <span>UPI / Credit Card / Debit Card / Netbanking (PayTM)</span>
                                    </div>
                                    
                                    <div class="payment-option-container payu_btn" style="cursor: pointer;">
                                        <span>UPI / Credit Card / Debit Card / Netbanking (PayU)</span>
                                    </div>

                                    <div class="payment-option-container cod_btn" style="cursor: pointer;">
                                        <span>Cash On Delivery (COD)</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Payment Section End --}}



{{-- Right Side Details Panel Start --}}
<div class="col-md-3" >
    <div class="account-details-container row" style="padding: 13px 24px;">
        <span style="font-size: 16px; font-weight: 500;">PRICE DETAILS</span>
    </div>
    <div class="account-details-container row">
        <div class="account-menu-items-container">
                <span>MRP</span>
                <span class="float-right"><strong><font class="rupees">&#8377;</font>{{ moneyFormatIndia(10000) }}</strong></span>
        </div>
        <div class="account-menu-items-container">
            <span>Discount</span>
            <span class="float-right"><strong style="font-weight: 500; color: #388e3c;">- <font class="rupees">&#8377;</font>{{ moneyFormatIndia(100) }}</strong></span>
        </div>
        <div class="account-menu-items-container">
            <span>Delivery Charges</span>
            <span class="float-right"><strong style="font-weight: 500; color: #388e3c;">FREE</strong></span>
        </div>
        <div class="account-menu-items-container"  style="font-weight: 600; color: black; font-size: 18px; border-top: 1px dashed #e0e0e0; border-bottom: 1px dashed #e0e0e0; margin-top: 18px; margin-bottom: 18px;">
            <span>Total Amount</span>
            <span class="float-right"><font class="rupees">&#8377;</font>{{ moneyFormatIndia(200) }}</span>
        </div>
       
            <div class="w-100 cart-checkout-btn-container">
                <button type="submit" class="OrderSummaryBtn">Next &nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i></button>
                <button type="submit" class="PaymentBtn d-none">Proceed To Pay &nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i></button>
                <button type="submit" class="PayNowBtn d-none" form="CheckoutForm">Pay Now &nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i></button>
            </div>
        
        <div class="account-menu-break"></div> 
    </div>
</div>
{{-- Right Side Details Panel End --}}

    </div>
</div>
@endsection






@section('bottom-js')
<script>
    $('.paytm_btn').click(function () {
        $('.payment-option-container').removeClass('payment-option-active')
        $(this).addClass('payment-option-active')
        $('#CheckoutForm').find("input[name='payment_method']").val('paytm')
    })
    $('.payu_btn').click(function () {
        $('.payment-option-container').removeClass('payment-option-active')
        $(this).addClass('payment-option-active')
        $('#CheckoutForm').find("input[name='payment_method']").val('payu')
    })
    $('.cod_btn').click(function () {
        $('.payment-option-container').removeClass('payment-option-active')
        $(this).addClass('payment-option-active')
        $('#CheckoutForm').find("input[name='payment_method']").val('cod')
    })
</script>

<script>
    $('.PaymentBtn').click(function (e) {
        e.preventDefault()
        console.log('Working');
        $('.display-pages-section').addClass('d-none')
        $('#PaymentSection').removeClass('d-none')
        $('.PaymentBtn').addClass('d-none')
        $('.PayNowBtn').removeClass('d-none')
    })
</script>

<script>
    // Change QTY (Fetching price and MRP using AJAX)
        function ChangeQty(ProdID) {

            var qty = $('#product-quantity-'+ProdID).val()

            $.ajax({
                url: "{{ route('calc-mrp-price') }}",
                method: 'POST',
                data: {
                    'ProdID'   : ProdID,
                    'qty'      : qty,
                },
                success: function (data) {
                    $('#MRPField'+ProdID).html(data.mrp)
                    $('#PriceField'+ProdID).html(data.price)
                }
            })
    }
</script>

<script>

    // Select and Highlight Address
    function SelectAddress(AddressID) {
            $('.AddressSelected').removeClass('AddressSelected')
            $('#CheckoutForm').find("input[name='address_id']").val(AddressID)
            $('#AddressContainer'+AddressID).addClass('AddressSelected')
        }

    // If order is selected change page from Address to Summary
    $('.OrderSummaryBtn').click(function (e) {
        e.preventDefault()
      
        if ($('#CheckoutForm').find("input[name='address_id']").val() != '' ) {
            $('.display-pages-section').addClass('d-none')
            $('#OrderSummarySection').removeClass('d-none')
            $('.OrderSummaryBtn').addClass('d-none')
            $('.PaymentBtn').removeClass('d-none')
        } else {
            $(".bootstrap-growl").remove();
            $.bootstrapGrowl("Please Select Address First.", {
                        type: "danger",
                        offset: {from:"bottom", amount: 50},
                        align: 'center',
                        allow_dismis: true,
                        stack_spacing: 10,
                    })
        }
        
    })
</script>
@endsection
































