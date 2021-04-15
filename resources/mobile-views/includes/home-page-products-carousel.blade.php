<div class="electronic-banner-area mb-2" style="padding: 0">
    <div class="">
        <div class="">
            <div class="bbb_main_container">
                <div class="bbb_viewed_title_container" >
                    <h3 class="bbb_viewed_title" style="margin-bottom: 5px;">
                        <span style="font-size: 18px; font-weight: 600;">{{$section->title}} </span>
                        <a style="font-size: 14px;" class="static-blue" target="_blank" href="{{ route('admin-edit-home-carousel-slider', $section->id) }}">Edit</a>
                    </h3>
                    <div class="mb-2">
                        <span >{{$section->caption}}</span>
                    </div>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev" onclick="PrevCarousel({{ $section->id }})"><i class="fas fa-chevron-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next" onclick="NextCarousel({{ $section->id }})"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-carousel-{{ $section->id }} owl-theme bbb_viewed_slider">
                        @foreach ($section->SectionProducts as $product)
                        @php
                           $product = $product->product;
                        @endphp
                        <div class="owl-item">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{route('product-index', $product->id)}}" target="_blank">
                                        <div class="sm-prod-img-container" style="background-image: url('{{ asset('storage/images/products/'.$product->images[0]->image) }}');"></div>
                                    </a>
                                    <div class="product-action">
                                        <a class="animate-left cursor-pointer" onclick="ToggleWishlist({{$product->id}})" title="Wishlist"><i class="pe-7s-like"></i></a>
                                        <a class="animate-top cursor-pointer" onclick="ToggleCart({{$product->id}})" title="Add To Cart"><i class="pe-7s-cart"></i></a>
                                        <a class="animate-right cursor-pointer" onclick="ToggleCompare({{$product->id}})" title="Compare"><i class="pe-7s-repeat"></i></a>
                                    </div>
                                </div>
                                <div class="product-content" style="text-align: center;">
                                    <h4><a class="line-limit-2 " href="{{route('product-index', $product->id)}}"> {{$product->product_name}} </a></h4>
                                    <div class="product-rating-4 mb-2 mt-2">
                                        <i class="icofont icofont-star @if (isset($product->stars->stars) && $product->stars->stars >= 1) yellow @endif "></i>
                                        <i class="icofont icofont-star @if (isset($product->stars->stars) && $product->stars->stars >= 2) yellow @endif "></i>
                                        <i class="icofont icofont-star @if (isset($product->stars->stars) && $product->stars->stars >= 3) yellow @endif "></i>
                                        <i class="icofont icofont-star @if (isset($product->stars->stars) && $product->stars->stars >= 4) yellow @endif "></i>
                                        <i class="icofont icofont-star @if (isset($product->stars->stars) && $product->stars->stars >= 5) yellow @endif "></i>
                                    </div>
                                    <span><font class="rupees">₹</font> 
                                        {{ moneyFormatIndia($product->product_price) }}
                                        <b style="font-size: 17px; color: #388e3c; font-weight: 500;">{{((($product->product_mrp - $product->product_price) / $product->product_mrp)*100)%100}}% off</b>
                                    </span>
                                    @if ($product->product_stock <= 0)
                                        <br>
                                        <span class="text-danger">Out Of Stock</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>