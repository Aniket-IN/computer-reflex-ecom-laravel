@extends('layouts.common')

@section('title', $product->product_name)

@section('css-js')
    
@endsection

@php
    $counter = 1;
    $counter2 = 1;
    
    $est_dt = new DateTime();
    $est_dt->modify( '+10 days' );
@endphp

@section('modals')

<div id="ReviewModalsDiv">




</div>

@endsection


@section('content')



<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">


            {{-- Images section Start --}}
            <div class="col-md-12 col-lg-7 col-12">

                <div class="product_img_slider">
                    <!-- All Images list -->
                    <ul>
                        @foreach ($images as $image)
                        <li><img src="{{ asset('storage/images/products/'.$image->image) }}" class="small_img" alt=""></li>
                        @endforeach
                    </ul>
                
                    <!-- Big image area/canvas -->
                    <span class="vertically-aligned-span"></span><img src="{{ asset('storage/images/products/'.$images[0]->image) }}" class="big_img" alt="">
                </div>

                <div class="buy-now-btn-container">
                    @if ($product->product_stock > 0) 
                        <form action="{{ route('checkout-post') }}" method="post"> @csrf 
                            <input type="hidden" name="product_id[]" value="{{ $product->id }}">
                            <input type="hidden" name="product_qty[]" value="1">
                            <button href="#">Buy Now</button>
                        </form>
                    @endif
                    
                </div>

            </div> {{-- Images section End --}}


            {{-- Product details start --}}
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">


                    <h3>{{$product->product_name}}</h3>
                    <div class="rating-number">
                        <div class="quick-view-rating">
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                        </div>
                        <div class="quick-view-number">
                            <span>2 Ratting (S)</span>
                        </div>
                    </div>


                    {{-- Mrp - Price - Dsicount --}}
                    <div class="details-price">
                        <span class="text-muted" style="font-size: 15px;"><font class="rupees"><s>&#8377;</font> {{ moneyFormatIndia($product->product_mrp) }}</s></span>
                        <br>
                        <span><font class="rupees">&#8377;</font> {{ moneyFormatIndia($product->product_price) }} 
                            <b style="font-size: 17px; color: #388e3c; font-weight: 500;">{{ $discount }}% off</b>
                        </span>
                        @if ($product->product_stock <= 0)
                        <br>
                        <span class="text-danger">Out Of Stock</span>
                        @endif
                    </div>

                    <div class="est-delivery-date">
                        <span>Est. Delivery Date: <b>{{ $est_dt->format( 'dS M, Y (D)' ) }}</b></span>
                    </div>
                    

                    {{-- Top product description --}}
                    <section class="top-description">
                        <p class="top-description">{!! $product->product_description !!}</p>
                    </section>

                    {{-- Quick actions --}}
                                                
                    <div class="quickview-plus-minus">

                        <div class="quickview-btn-cart" style="margin-left: 0;">
                            <a class="btn-hover-black" id="ToggleCartBtn" href="#">@if($carted == 1) Remove from cart @else Add to cart @endif</a>
                        </div>
                        @if (Auth::check())
                        <div class="quickview-btn-wishlist">
                            <a id="ToggleWishlistBtn" class="btn-hover @if($wishlisted == 1) btn-wishlisted @else btn-not-wishlisted @endif " href="#">&nbsp;<i class="fa fa-heart" aria-hidden="true"></i>&nbsp;</a>
                        </div>
                        @endif
                    </div>

                    {{--  Category --}}
                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li class="categories-title">Category :</li>
                            <li><a href="#">{{$category->category}}</a></li>
                        </ul>
                    </div>
                    
                    <div class="product-details-cati-tag mtb-10">
                        <ul>
                            <li class="categories-title">Tags :</li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">electronics</a></li>
                            <li><a href="#">toys</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">jewellery</a></li>
                        </ul>
                    </div>


                </div>
            </div> {{-- Product details end --}}  
        </div>
    </div>
</div> {{-- area container end --}}









{{-- Description & Specification Area  --}}
<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review text-center">

             {{-- Description & Specifications Toggle Buttons --}}
            <div class="description-review-title nav" role=tablist>
                @if (isset($product->product_long_description))
                <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">Description</a>
                @endif
                <a href="#pro-specifications" data-toggle="tab" role="tab" aria-selected="false">Specifications</a>
            </div>


            <div class="description-review-text tab-content">
                {{-- Description --}}
                <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                    <p>{!! $product->product_long_description !!}</p>
                </div>

                {{-- Specifications --}}
                <div class="tab-pane fade" id="pro-specifications" role="tabpanel">
                    
                    <div class="row">
                        <div class="col-6">
                            <table class="specification-table">
                                @foreach ($specifications as $specification)
                                <tr>
                                    <th class="table-secondary">{{$specification->specification_key}}</th>
                                    <td>{{$specification->specification_value}}</td>
                                </tr>
                                @endforeach

                            </table>
                        </div>

                        <div class="col-6">
                            
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>
</div> {{-- Description & Specification Area container end --}}













{{-- Description & Specification Area  --}}
<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review text-center">

             {{-- Description & Specifications Toggle Buttons --}}
            <div class="description-review-title nav" role=tablist>
                <a class="active" href="#rating_Rev" data-toggle="tab" role="tab" aria-selected="false">Ratings & Reviews
                <a href="#qna" data-toggle="tab" role="tab" aria-selected="true">Questions & Answers</a>
                </a>
            </div>


            <div class="description-review-text tab-content">

                {{-- Rating Reviews Section --}}
                
                <div class="tab-pane active show fade" id="rating_Rev" role="tabpanel">
                    <div id="RatingAreaDIV">

                    <div class="wishlist-basic-padding" style="border: 1px solid #dddddd; border-radius: 2px;"> 
                        <div class="row">
                            <div class="col-3">
                                <span style="font-size: 30px; color: rgb(27, 27, 27);">
                                    {{$stars}} <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <br>
                                <span>
                                    {{$reviews->count()}} Rating/Review @if($reviews->count() > 1)(S)@endif 
                                </span>
                            </div>

                            <div class="col-6">
                                <div class="rating-slider-container row">
                                    <div class="col-12">

                                        <div class="row " >
                                            <div class="col-2">
                                                5 <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
        
                                            <div class="col-8">
                                                <div style="margin: auto; display: block; vertical-align: middle; padding-top: 6px;">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$ratingPerc['fivePerc']}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                {{ moneyFormatIndia($ratingCounts['five']) }}
                                            </div>
                                        </div>

                                        <div class="row " >
                                            <div class="col-2">
                                                4 <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
        
                                            <div class="col-8">
                                                <div style="margin: auto; display: block; vertical-align: middle; padding-top: 6px;">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$ratingPerc['fourPerc']}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                {{ moneyFormatIndia($ratingCounts['four']) }}
                                            </div>
                                        </div>

                                        <div class="row " >
                                            <div class="col-2">
                                                3 <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
        
                                            <div class="col-8">
                                                <div style="margin: auto; display: block; vertical-align: middle; padding-top: 6px;">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$ratingPerc['threePerc']}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                {{ moneyFormatIndia($ratingCounts['three']) }}
                                            </div>
                                        </div>

                                        <div class="row " >
                                            <div class="col-2">
                                                2 <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
        
                                            <div class="col-8">
                                                <div style="margin: auto; display: block; vertical-align: middle; padding-top: 6px;">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{$ratingPerc['twoPerc']}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                {{ moneyFormatIndia($ratingCounts['two']) }}
                                            </div>
                                        </div>

                                        <div class="row " >
                                            <div class="col-2">
                                                <span>
                                                    1 <i class="fa fa-star" aria-hidden="true"></i>
                                                </span>
                                                
                                            </div>
        
                                            <div class="col-8">
                                                <div style="margin: auto; display: block; vertical-align: middle; padding-top: 6px;">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{$ratingPerc['onePerc']}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                {{ moneyFormatIndia($ratingCounts['one']) }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @if ($ordered == 1)
                            <div class="col-3">
                                <button class="btn btn-dark ReviewModalToggleBtn">@if ($reviewed == 1) Edit Review @else Rate Product @endif</button>
                            </div>
                            @endif
                            
                        </div>

                    </div>

                    <form id="ProductReviewForm" method="POST" class="d-none"> 
                        @csrf
                        <input type="hidden" name="action" value="{{route('review-submit')}}">
                    <div class="modal-content ">
                        <div class="modal-body" style="display: unset;">
                
                            <div class="mb-3">
                                <span style="font-size: 18px; font-weight: 500;">Rate This Product</span>
                            </div>
                            <input type="hidden" value="{{$product->id}}" name="product_id">
                        
                                <div class="form-field w-100">
                                    <select id="glsr-ltr" class="star-rating" name="rating" required>
                                        <option value="" disabled selected>Select a rating</option>
                                        <option value="5" @if(isset($ReviewCheck->stars) && $ReviewCheck->stars == 5) selected @endif>Fantastic</option>
                                        <option value="4" @if(isset($ReviewCheck->stars) && $ReviewCheck->stars == 4) selected @endif>Great</option>
                                        <option value="3" @if(isset($ReviewCheck->stars) && $ReviewCheck->stars == 3) selected @endif>Good</option>
                                        <option value="2" @if(isset($ReviewCheck->stars) && $ReviewCheck->stars == 2) selected @endif>Poor</option>
                                        <option value="1" @if(isset($ReviewCheck->stars) && $ReviewCheck->stars == 1) selected @endif>Terrible</option>
                                    </select>
                                </div>
                        
                            
                        </div>
                        <div style="border-top: 1px solid #dee2e6;"></div>
                        <div class="modal-body" style="display: unset;">
                            <span style="font-size: 18px; font-weight: 500;">Review This Product</span> 
                            <div class="form-group mt-3">
                            <input type="text" value="{{ $ReviewCheck->title ?? '' }}"
                                class="form-control" maxlength="50" name="title" id="title" aria-describedby="helpId" placeholder="Title (Optional)">
                            </div>
                
                            <div class="form-group">
                            <textarea maxlength="300" class="form-control" name="message" id="" rows="4" placeholder="Detailed Review...">{{ $ReviewCheck->message ?? '' }}</textarea>
                            </div>
                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary ReviewModalToggleBtn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>

                    @foreach ($reviews as $review)
                       @if ($review->message != '' || $review->title != '')
                        <div class="wishlist-basic-padding" style="border: 1px solid #dddddd; border-radius: 2px; border-top: 0;">
                            <div class="row">
                                <button type="button" class="btn btn-dark btn-sm">
                                    {{-- 6969696 --}}
                                    {{$review->stars}} <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                </button>
                                <span style="padding-left: 12px; padding-top: 3px; font-size: 14px; color: #212121; font-weight: 500;">{{ $ReviewCheck->title }}</span>
                            </div>
                            <div class="row">
                                <span style="margin: 12px 0;">
                                    {{ $review->message }}
                                </span>
                            </div>

                            <div class="row">
                                <span style="margin: 12px 0;">
                                    {{ $review->user->name }} <img width="14" src="{{asset('img/svg/verified-tick.svg')}}" alt=""> (Buyer), {{ HowMuchOldDate($ReviewCheck->created_at, 'days') }} ago
                                </span>
                            </div>
                        </div>        
                           
                        @endif
                    @endforeach

                    @if ($reviews->count() >= 1)
                        <div class="view-more-continer mt-3" >
                            <a href="{{route('all-product-reviews', $product->id)}}">
                                <span style="color: #0066c0;" class="hover-blue"> All {{ App\Models\ProductReview::where('product_id', $product->id)->count() }} Reviews <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    @endif
                    

                </div>
            </div>



                {{-- Qna Section --}}
                <div class="tab-pane fade" id="qna" role="tabpanel">
                    
                    QnA Section

                </div>

            </div>


        </div>
    </div>
</div> {{-- Description & Specification Area container end --}}











<!-- Related products area start -->
<div class="product-area pb-95">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="product-style">
            <div class="related-product-active owl-carousel">

                @if (isset($RelatedProducts))
                @foreach ($RelatedProducts as $RelatedProduct)
                @if ($RelatedProduct->id != $product->id)
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="{{route('product-index', $RelatedProduct->id)}}">
                            <div class="sm-prod-img-container" style="background-image: url('{{ asset('storage/images/products/'.$RelatedProduct->images[0]->image) }}');"></div>
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" onclick="ToggleWishlist({{$RelatedProduct->id}})" style="cursor: pointer;">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Add To Cart" onclick="ToggleCart({{$RelatedProduct->id}})" style="cursor: pointer;">
                                <i class="pe-7s-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="{{route('product-index', $RelatedProduct->id)}}" target="_blank"> {{$RelatedProduct->product_name}} </a></h4>
                        <span><font class="rupees">₹</font> 
                            {{ moneyFormatIndia($RelatedProduct->product_price) }}
                            <b style="font-size: 17px; color: #388e3c; font-weight: 500;">{{((($RelatedProduct->product_mrp - $RelatedProduct->product_price) / $RelatedProduct->product_mrp)*100)%100}}% off</b>
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
                @endif

            </div>
        </div>
    </div>
</div>
<!-- Related products area end -->



{{-- Data for ajax requests --}}
<div class="d-none">
    <form>
        <input name="product_id" value="{{ $product->id }}">
    </form> 
</div>

@endsection



@section('bottom-js')



<script>
    function ToggleWishlist(product_id) {

$.ajax({
    url: "{{route('toggle-wishlist-btn')}}",
    method: 'POST',
    data: {
        'product_id' : product_id,
    },
    success: function (data) {

        if (data == 500) {
            $(".bootstrap-growl").remove();
            $.bootstrapGrowl("Removed from wishlist.", {
                type: "danger",
                offset: {from:"bottom", amount: 50},
                align: 'center',
                allow_dismis: true,
                stack_spacing: 10,
            })
        } else if(data == 200) {
            $(".bootstrap-growl").remove();
            $.bootstrapGrowl("Added to wishlist.", {
                type: "success",
                offset: {from:"bottom", amount: 50},
                align: 'center',
                allow_dismis: true,
                stack_spacing: 10,
            })
        }
    }
})

}

function ToggleCart(product_id) {

    $.ajax({
    url: "{{route('toggle-cart-btn')}}",
    method: 'POST',
    data: {
        'product_id' : product_id,
    },
    success: function (data) {

        if (data == 200) {
            $('#CartCount').load("{{ route('cart') }} #CartCount")
            $(".bootstrap-growl").remove();
            $.bootstrapGrowl("Added To Cart.", {
                type: "success",
                offset: {from:"top", amount: 100},
                align: 'center',
                allow_dismis: true,
                stack_spacing: 10,
            })
        } else if(data == 500) {
            $('#CartCount').load("{{ route('cart') }} #CartCount")
            $(".bootstrap-growl").remove();
            $.bootstrapGrowl("Removed From Cart.", {
                type: "danger",
                offset: {from:"top", amount: 100},
                align: 'center',
                allow_dismis: true,
                stack_spacing: 10,
            })
        }
    }
})

}
</script>















    {{-- Toggle Cart --}}
    <script>
        $(document).ready(function() {

            $('#ToggleCartBtn').click(function (e) {

                e.preventDefault()

                var product_id  = $('input[name="product_id"]').val()

                console.log(product_id)

                $.ajax({
                    url: "{{route('toggle-cart-btn')}}",
                    method: 'POST',
                    data: {
                        'product_id' : product_id,
                    },
                    success: function (data) {

                        if (data == 200) {
                            console.log('Added to cart')
                            $('#ToggleCartBtn').html('remove from cart')
                            $('#CartCount').load("{{ route('cart') }} #CartCount")
                        } else if(data == 500) {
                            $('#ToggleCartBtn').html('add to cart')
                            $('#CartCount').load("{{ route('cart') }} #CartCount")
                        }
                    }
                })
            })
        })
    </script>


    {{-- Toggle Wishlist --}}
    <script>
        $(document).ready(function() {

            $('#ToggleWishlistBtn').click(function (e) {

                e.preventDefault()

                var product_id  = $('input[name="product_id"]').val()

                console.log(product_id)

                $.ajax({
                    url: "{{route('toggle-wishlist-btn')}}",
                    method: 'POST',
                    data: {
                        'product_id' : product_id,
                    },
                    success: function (data) {

                        if (data == 200) {
                            $('#ToggleWishlistBtn').addClass('btn-wishlisted').removeClass('btn-not-wishlisted')
                        } else if(data == 500) {
                            $('#ToggleWishlistBtn').addClass('btn-not-wishlisted').removeClass('btn-wishlisted')
                        }
                    }
                })
            })
        })
    </script>

    	<!-- Image Change On Hover -->
	<script>
		$(document).ready(function(){
			$('.small_img').hover(function(){
				$('.big_img').attr('src', $(this).attr('src'))
			})
		})
	</script>

	<!-- Initilize ImageZoomSL -->
	<script>
		$(document).ready(function(){
			$('.big_img').imagezoomsl({
				zoomrange: [3, 3]
			})
		})
	</script>
@endsection