@extends('layouts.common')

@section('content') <div class="body-container">

    @yield('modals')
    
<div class="container">
    <div class="row">

    <div class="col-md-3">
            <div id="ProfileDetailsDiv">
                <div class="account-details-container row" style="padding: 12px;">
                    <img class="account-dp" src="{{ asset('storage/images/dp/'.Auth()->user()->dp)}}">
                    <div class="account-greet">
                        <div class="account-hello">Hello,</div>
                        <div class="account-name">{{Auth()->user()->name}}</div>
                    </div>
                </div>
            </div>
        
                <div class="account-details-container row">
                    
                    <div class="account-menu-items-container">
                        <a style="width: 100%;" href="{{ route('orders') }}" >
                        <div class="account-head-menu">
                            <img src="{{ asset('img/svg/orders.svg') }}" alt="" srcset="">
                            <span style="width: calc(100% - 26px);padding-left: 20px;font-size: 16px;font-weight: 500;margin-top: 10px;">MY ORDERS</span> 
                            <img src="{{ asset('img/svg/next.svg') }}" alt="" class="account-menu-arrow " >
                        </div>
                    </a>
                    </div>
                

                    <div class="account-menu-break"></div> {{-- Underline --}}

                    <div class="account-menu-items-container">
                        <div class="account-head-menu">
                            <img src="{{ asset('img/svg/user.svg') }}" alt="" srcset="">
                            <a style="cursor: default">ACCOUNT SETTINGS</a>
                        </div>
                    </div>
                        
                    
                    <div class="w-100" style="padding-bottom: 12px;">
                        <a style="width: 100%;" href="{{ route('my-account') }}"><div class="account-menu-item @yield('profile-information-nav')">Profile Information</div></a>
                        <a style="width: 100%;" href="{{ route('addresses') }}"><div class="account-menu-item @yield('manage-addresses-nav')">Manage Addresses</div></a>
                        <a style="width: 100%;" href="/account/pancard"><div class="account-menu-item">PAN Card Information</div></a>
                    </div>


                    <div class="account-menu-break"></div> {{-- Underline --}}

                    <div class="account-menu-items-container">
                        <div class="account-head-menu">
                            <img src="{{ asset('img/svg/stuff.svg') }}" alt="" srcset="">
                            <a style="cursor: default; width: 100%;">MY STUFF</a>
                        </div>
                    </div>

                    <div class="w-100" style="padding-bottom: 12px;">
                        <a href="{{route('wishlist')}}"><div class="account-menu-item @yield('wishlist-information-nav')">My Wishlist</div></a>
                    </div>
                    
                    <div class="account-menu-break"></div> {{-- Underline --}}

                    <div class="account-menu-items-container" style="cursor: pointer;">
                        <div class="account-head-menu">
                            <img src="{{ asset('img/svg/logout.jpg') }}" alt="" srcset="" >
                            <a style="width: 100%;" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>


            </div>
    </div>


        <div class="col-md-9">

            @yield('right-col-menu')


        </div>


</div>
</div>


</div> @endsection



@section('bottom-js')

@endsection