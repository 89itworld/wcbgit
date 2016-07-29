<?php
/**
 * Created by PhpStorm.
 * User: Mahipal Singh
 * Date: 03-06-2016
 */
  ?>
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="../">
                        {!! Html::image('public/images/logo.jpg','whitecashback')!!}
                        <h1>Cashback Means WhiteCashback</h1></a>
                </div> <!-- Logo -->
                <div class="site-search posrel">
                    <h1>GET THE HIGHEST CASHBACK WITH WHITECASHBACK</h1>
                    <input type="text" name="search" placeholder="Looking for coupons? Search Here" />
                    <button class="search-btn" ><i class="fa fa-search"></i></button>
                </div> <!-- site-search -->
                <div class="login-links">
                    <div class="row">
                        {!! Html::link('signUp','SIGN UP') !!}
                        @if(\Auth::user())
                            {!! Html::link('logout','LOGOUT') !!}
                        @else
                            {!! Html::link('user_login','LOGIN') !!}
                         @endif
                    </div> <!-- row -->
                    <div class="row sslink">
                        <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="" class="youtube"><i class="fa fa-youtube"></i></a>
                    </div> <!-- row -->
                </div> <!-- login-links -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- Header -->
    <div class="clearfix"></div>
@include('layouts.common.categories')

    <div class="clearfix"></div>

    <div id="top-clients">
        <div class="container">
            <div class="row">
                <ul class="clientList">
                    <li><a href={!! Config::get('SITE_URL'); !!}"flipkart-com-cashback-offers">{!! Html::image('public/images/headerclient-logo/whitecashback_flipkart.jpg') !!} </a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}"snapdeal-com-cashback-offers"> {!! Html::image('public/images/headerclient-logo/whitecashback_snapdeal.jpg') !!}</a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}""> {!! Html::image('public/images/headerclient-logo/whitecashback_shopclues.jpg','whitecashback_shopclues') !!}</a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}""> {!! Html::image('public/images/headerclient-logo/whitecashback_ebay.jpg','whitecashback_ebay') !!}</a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}""> {!! Html::image('public/images/headerclient-logo/whitecashback_jabong.jpg','whitecashback_jabong') !!}</a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}""> {!! Html::image('public/images/headerclient-logo/whitecashback_myntra.jpg','whitecashback_myntra') !!} </a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}""> {!! Html::image('public/images/headerclient-logo/whitecashback_amazon.jpg','whitecashback_amazon') !!}</a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}""> {!! Html::image('public/images/headerclient-logo/whitecashback_yatra.jpg','whitecashback_yatra') !!}</a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}""> {!! Html::image('public/images/headerclient-logo/whitecashback_airtel.jpg','whitecashback_yatra') !!}</a></li>
                    <li><a href={!! Config::get('SITE_URL'); !!}""> {!! Html::image('public/images/headerclient-logo/whitecashback_paytm.jpg','whitecashback_yatra') !!}</a></li>

                </ul>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- top-clients -->
