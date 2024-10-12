<?php
    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
    $number_cart = count($cart);
     $info = DB::table('show_info_header_footer')->select('logo','tdht')->where('id',1)->get()->first();
    ?>   
<script>
 
</script>
<!DOCTYPE html>
<!--[if lt IE 10]>
<html class="ltie10" lang="vi-VN">
    <![endif]-->
    <!--[if gt IE 9]>
    <!-->
        <html lang="vi-VN" itemscope itemtype="https://schema.org/WebPage">
            <!--
             <![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="revisit-after" content="1 days" />
        <meta property="og:locale" content="vi_VN" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="wJlNdHg4BHXSldM_fBxvDlkFVJyXAFJzFiofL6fDtBs" />
        <link rel="canonical" href="{{ url()->current() }}" >
        @if(!empty($meta))
        <title>{{ $meta->meta_title }}</title>
        <meta name="description" content="{{ $meta->meta_content }}"/>
        <meta property="og:title" content="{{ $meta->meta_title }}" />
        @else
        <title>Mua Sắm Tại Kho - Mua bán điện tử, điện lạnh, gia dụng chính hãng tại kho</title>
        <meta name="description" content="Mua Sắm tại kho - mua bán thiết bị điện tử, điện lạnh, gia dụng chính hãng tại kho. Mua online tại muasamtaikho.vn giá tốt phục vụ chuyên nghiệp tận tâm."/>
        @endif 
        @if(!empty($data) && !empty($data->Image))
        <meta property="og:image" content="{{ asset($data->Image) }}"/>
        @endif
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        

        <meta property="og:type" content="article" />

        <meta property="fb:app_id" content="534767553533391" />
        <meta property="fb:pages" content="150921051593902" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
        <meta itemprop="name" content="">
        <meta itemprop="description" content="">
       
        <link rel="shortcut icon" href="{{ asset('images/template/favicon-muasamtaikho.ico') }}"> 
        <meta name="format-detection" content="telephone=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}?ver=63">
        <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}">
        <script type="text/javascript" src="{{ asset('js/lib/owl.carousel.min.js')  }}"></script>
        <link rel="stylesheet" href="{{  asset('css/lib/owl.carousel.min.css') }}">
        <script type="application/javascript">
            var dataRenderProduct = [];
        </script>
        <style type="text/css">
            #ui-id-1{
                background: #fff;
                z-index: 9999;
                width: 22%;
            }

            .phones-hotline a{
                color :#fff !important;
            }

            .box-fix-css{
                margin-left: -15px !important;
                margin-right: -15px !important;
            }



        </style>
        @stack('style')
        <?php  
            $requestcheck = \Request::route();
            
            if(!empty($requestcheck)){
                 $nameRoute = \Request::route()->getName();
            }
            else{
                 $nameRoute = '';
            }
            
            
            ?>
        @if(!empty($requestcheck)&& \Request::route()->getName() =="homeFe")
        <style type="text/css">
            .nk-menu #nk-danh-muc-san-pham-left.nk-danh-muc-trang-chu>ul {
            display: block;
            }
            #nk-banner-home .item{
            margin-left: 256px !important;
            }
        </style>
        @endif 
        <style type="text/css">
            .nk_houseware_best_selling_2020_wrapper .product, .product-slide{
            width: auto !important;
            }
        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16676362450">
        </script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'AW-16676362450');
        </script>

        <!-- Event snippet for Lượt xem trang conversion page -->
        <script>
          gtag('event', 'conversion', {
              'send_to': 'AW-16676362450/4NESCJ6vz8sZENKx9I8-',
              'value': 1.0,
              'currency': 'VND'
          });
        </script>




    </head>
    <script>
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
        
        function isApp() {
            return false;
            return getCookie('client') == 'app';
        }
        
        function isAndroid() {
            return /Android/.test(navigator.userAgent || navigator.vendor || window.opera);
        }
        
        function isMobileSkin() {
            return getCookie('mp_skin') == 'mobile';
        }
        
        function isIOS() {
            return /iPad|iPhone|iPod/.test(navigator.userAgent || navigator.vendor || window.opera) && !window.MSStream;
        }
        
        function loadAppJS() {
            var element = document.createElement("script");
            element.async = true;
            element.defer = true;
            element.src = '/js/addons/nk_mp_mobile/app/libs/requirejs/require.js';
            element.setAttribute('data-main', '/js/addons/nk_mp_mobile/app/AppLoader.js?t=1805225');
            document.head.appendChild(element);
        }
       
    </script>
    <body class="d nk-home-page">
        <!-- Google Tag Manager (noscript) -->
     
        <!-- End Google Tag Manager (noscript) -->
        <script>
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }
            
            function isApp() {
                return false;
                return getCookie('client') == 'app';
            }
            
            function isAndroid() {
                return /Android/.test(navigator.userAgent || navigator.vendor || window.opera);
            }
            
            function isMobileSkin() {
                return getCookie('mp_skin') == 'mobile';
            }
            
            function isIOS() {
                return /iPad|iPhone|iPod/.test(navigator.userAgent || navigator.vendor || window.opera) && !window.MSStream;
            }
            
            function loadAppJS() {
                var element = document.createElement("script");
                element.async = true;
                element.defer = true;
                element.src = '/js/addons/nk_mp_mobile/app/libs/requirejs/require.js';
                element.setAttribute('data-main', '/js/addons/nk_mp_mobile/app/AppLoader.js?t=1805225');
                document.head.appendChild(element);
            }
            if (location.search.indexOf("phone_app=Y") >= 0) document.cookie = "client=app";
            var bodyClass = document.body.getAttribute('class');
            bodyClass += isApp() ? ' app' : '';
            bodyClass += isIOS() ? ' ios' : isAndroid() ? ' android' : '';
            document.body.setAttribute('class', bodyClass);
            if (isApp()) {
                if (document.addEventListener) {
                    document.addEventListener("DOMContentLoaded", function() {
                        document.removeEventListener("DOMContentLoaded", arguments.callee, false);
                        loadAppJS();
                    }, false);
                } else if (document.attachEvent) {
                    document.attachEvent("onreadystatechange", function() {
                        if (document.readyState === "complete") {
                            document.detachEvent("onreadystatechange", arguments.callee);
                            loadAppJS();
                        }
                    });
                }
            }
        </script>
       
        <div class="ty-tygh" id="tygh_container">
        <div id="ajax_overlay" class="ty-ajax-overlay"></div>
        <div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
        <div class="ty-helper-container no-touch" id="tygh_main_container">
        <div class="tygh-top-panel clearfix">
            <div class="container-fluid ">
                <div class="row-fluid ">
                    <div class="span16 nk-banner-top">
                        <script>
                            let _cdp365JourneySetting = {
                                jrequest_events: [{
                                    event_category: "pageview",
                                    event_action: "view"
                                }],
                                jrequest_zones: "none"
                            }
                        </script>
                        <style>
                            .lp-menu ul {
                            display: inline-block;
                            }

                            #nk-logo{
                                width: 30%;
                            }
                            .m .lp-menu.menu-type-4 ul li {
                            min-width: 33.33%;
                            max-width: 33.33%;
                            }
                            .m .nk-main-content-checkout .nk-tra-gop-bang-the-tin-dung .item-content ul li img {
                            object-fit: cover;
                            }
                            .m .nk-main-content-checkout .nk-tra-gop-bang-the-tin-dung .item-content ul li {
                            height: 46px;
                            }
                            .m .flash-product .position-top-left {
                            position: absolute;
                            top: 0;
                            left: 0;
                            }
                            .m .flash-product .position-top-left img {
                            height: 41px;
                            object-fit: contain;
                            }
                            .m #nk-banner-home {
                            margin-top: 6px;
                            }
                            .m .custom-dot-carousel.trang-chu.active {
                            min-height: auto;
                            }
                        </style>
                        <!--  <a class="banner-link" href="https://www.nguyenkim.com/tet-2024-giap-thin-vui-bat-thinh-linh.html" title="banner-top">
                            <img class="banner-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/TET_2024/WEB/Top-Banner-1920x45px.jpg" width="1920px" height="45px" alt="ECM_Top banner Tết 2024">
                            </a> -->
                        <span class="close_top_banner">✕</span>
                    </div>
                </div>
                
                <div class="row-fluid desktop">
                    <div class="span16 nk-header">
                        <div class="row-fluid ">
                            <div class="span16 container _nk_main">
                                <div class="row-fluid ">
                                    <div class="span16 row flexthis div-logo">
                                        <div class="row-fluid ">
                                            <div class="span4 ">
                                                <h1 id="nk-logo">
                                                    <a href="/">
                                                    <img fetchpriority="high" loading="eager" src="{{ asset($info->logo) }}" alt="">
                                                    </a>
                                                </h1>
                                            </div>

                                            <div class="span12 nk-nav-right">
                                                <div class="row-fluid ">
                                                    <div class="span16 ">
                                                        <div class="header-right" id="nk-holine-new">
                                                            
                                                            <div id="nk-search">
                                                                <form action="{{ route('search-product-frontend') }}" method="get" class="cm-processed-form">
                                                                    <div class="nk-search-box">
                                                                        <input type="text" id="tags" name="key"  id="search_input" placeholder="Bạn cần tìm gì hôm nay ?" autocomplete="off">
                                                                        <button>
                                                                        <i class="nki-search"></i>
                                                                        </button>
                                                                        <div class="nk-search-hint">
                                                                            <div class="search-result">
                                                                                <!-- <ul class="nk-search-cate">
                                                                                    <li></li>
                                                                                </ul>
                                                                                <ul class="nk-search-product-item">
                                                                                    <li></li>
                                                                                </ul> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <div id="nk-cart">
                                                                <ul>
                                                                    <li class="cart-info-box nk_tooltip" data-toggle=".nk-cart-content" data-overlay="true">
                                                                        <a href="javascript:void(0)" class="checkout_header" onclick="showToCart()">
                                                                            <div class="icon"><i class="nki-shopping-cart"></i>
                                                                                @if($number_cart>0)
                                                                                <span class="mount">{{$number_cart }}</span>
                                                                                <span class="mount">{{$number_cart }}</span>
                                                                            </div>
                                                                            @endif
                                                                            Giỏ hàng 
                                                                        </a>
                                                                    </li>
                                                                    <li id="login_form2" class="nk_tooltip" data-toggle=".nk-login-content" data-overlay="overlay" style="display: none;"></li>
                                                                   

                                                                    <li class="search-order">
                                                                        <div class="fas-phones phones-hotline"> 


                                                                            <a href="tel: 0913011888" class="header__history tin-km"><i class="nki-Phone"></i> Hotline:{{ $info->tdht }}</a> </div>
                                                                        <!-- <a href="/tra-cuu.html"> Tra cứu đơn hàng </a> -->
                                                                    </li>
                                                                    <li id="login_form">
                                                                        <!-- <a href="login.html?return_url=index.php" class="nk-text-login"> -->
                                                                       <a href="/tin-tuc">Tư vấn mua sắm </a>
                                                                    </li>
                                                                    
                                                                </ul>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style type="text/css">
            @media only screen and (max-width: 600px) {
                body{
                    min-width: unset !important;
                }

                .box-sugest .box-fix-css{
                    padding: 0 15px;
                }

                
                /*.nk-header #nk-logo img{
                    display: ;
                }
*/
                .promotion-menu{
                    position: relative;
                }



                  .banner_home__ .banner-left{
                    width: 100% !important;
                }

                .view-all{
                    text-align: center;
                }

                .banner_home__.container{
                    padding: 0 !important;
                }


                .nk-banner-main{
                    height: auto !important;
                    width: auto !important;
                }

                .span11{
                    margin:0 !important;
                } 

                .product .product-feature-badge{
                    min-height: 0 !important;
                    top:0 !important;
                    margin-top: 0;
                }
                .show-group-data .product-image{
                    height: auto !important;
                }

                .product .product-body{
                    margin-top: 0 !important;
                }

                .product .product-header .product-image{
                    margin-top: 0!important;
                }

                .product .product-header{
                    min-height: auto ;
                }

                .search-results{
                    background: #fff;
                    position: relative;
                    z-index: 999;
                }

                #nk-banner-home .item{
                    margin: 0 !important;
                }

                #payday-block .product{
                    min-width: auto !important;
                    margin: 10px 0;
                }
                .payday-container .hinh_giamgia{
                    height: auto !important;
                    display: none;
                }


                .nk-header #nk-searchs {
                    border-radius: .9em;
                    background-color: #FFFFFF;
                    height: 40px;
                    position: relative;
                   /* width: 30%;*/
                    float: left;
                }

                .nk-header #nk-searchs .nk-search-box input[type="text"] {
                    height: 40px;
                    border: none;
                    padding: 0 10px;
                    color: #111;
                    font-size: 15px;
                    border-radius: .9em;
                    width: 100%;
                }

                .nk-header #nk-searchs .nk-search-box button {
                    background-color: white;
                    height: 40px;
                    width: 56px;
                    border: none;
                    cursor: pointer;
                    position: absolute;
                    top: 0;
                    right: 0;
                    border-top-right-radius: .9em;
                    border-bottom-right-radius: .9em;
                    outline: none;
                }

                #nk-searchs {
                    width: 90% !important;
                    margin: 0 auto;
                }

                .d .nk-header #nk-search .nk-search-box .nk-search-hint{
                    width: 100% !important;
                    left: 0 !important;
                    top:116px !important;
                }

                .nk-banner-main {
                    height: 256px;
                    width: 300px;
                }

                #nk-banner-home{
                    min-height: auto !important;
                }

                #nk-search{
                    width: 90% !important;
                    margin: 0 auto;
                }

                .nav-search{
                    width: 100% !important;
                }

                .banner-ads-text{
                    display: none;
                }
                .product{
                    max-width:  100% !important;
                    min-width: auto !important;
                }
                .container-fluid{
                    padding: 0;
                    margin: 0;
                }
                .row-fluid{
                    margin: 0 !important;
                } 
                #pagination_contents .product{
                    width: 47% !important;
                    min-width: unset;
                    max-width: unset;
                    margin: 15px 5px;
                }
                #pagination_contents .product .product-image img{
                    width: 100% !important;
                }

                .nav1-search{
                    height: 100%;
                    width: 100%;
                }

                .desktop{
                    display: none;
                }
                .search_center{
                    margin-left:0;
                }
                .nk-header::after{
                    height: 150px !important;
                }
                .nav-list a {
                    align-items: center;
                    border: 1px solid #e0e0e0;
                    border-radius: 4px;
                    color: #333;
                    display: flex;
                    justify-content: center;
                    font-size: 12px;
                    line-height: 16px;
                    min-height: 40px;
/*                    margin: 10px 0px 5px 15px;*/
                    padding: 4px 0;
                    text-align: center;
                    width: 18vw;
                }
                .nav-list {
                    display: flex;
                    flex-wrap: wrap;
                }
                .category{
                    width: 100% !important;
                    box-shadow: none !important;
                } 
               

                .search_center{
                    height: 40px !important;
                }

                .header__main{
                    box-shadow: none !important;
                }
                .nk-menu{
                    height: auto !important;
                }
                .nk-header ._nk_main ._nk_bottom{
                    margin-right: 0;
                }
               /* .nk-header ._nk_main ._nk_bottom{


                    margin-top: 40px !important;
                }*/
                .d .nk-product-cate-homepage .nk-content .item {
                    width: 30% !important;
                }    
                .fa-navicon:before, .fa-reorder:before, .fa-bars:before{
                    color: #E9162E;
                }
                .icons-mobile-bar button{
                    padding: 10px;
                    border: 1px solid #E9162E;
                }
                .menu-mobile{
                    margin-left: 14px;
                    height: auto;
                }

                .menu-mobiles-show{
                    height: auto;
                }
                .nk-header ._nk_main{
                    position: relative;
                }
                .show-menu {
                    background-color: #fff;
                    height: 100%;
                    overflow: scroll;
                    max-width: 640px;
                    padding: 60px 10px 100px;
                    position: fixed;
                    top: 0;
                    transition: .3s;
                    right: -100%;
                    width: 100%;
                    z-index: 99;
                }

                .show-menu.active {
                    left: 0;
                    margin: auto;
                    right: 0;
                }

                .nav-list {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 6px;
                }
                .show-bar{
                    background: #fff;

                }

                .logo-mobile{
                    width: 55%;
                    overflow: hidden;
                }
                .logo-mobile img{
                    width: 100%;
                } 

                .div-header-cart{
                    width: 100%;
                    display: flex;
                    overflow: hidden;
                }

                .d .nk-header #nk-cart{
                    width: 77%;
                }

                .p_hotline_item span {
                    width: 100% !important;
                    text-align: center !important;
                }

                .nav-list a span.item__label {
                    background-color: #f51212;
                    border-radius: 3px;
                    color: #fff;
                    font-size: 9px;
                    font-weight: normal;
                    position: absolute;
                    padding: 0 3px;
                    right: -2px;
                    top: 0;
                    line-height: 11px;
                }
                
            }

             @media only screen and (min-width: 601px) {
                .mobile{
                    display: none;
                }
                .nki-menu:before{
                    color: #000 !important;
                }

                .fix-pad{
                    padding: 0;
                }



                .nk-banner-main{
                    padding: 0 !important;
                }

                #login_form{
                    color: #fff;
                }

                .header__history{
                    margin: 0 !important;
                }

                .search-order{
                    width: 32% !important;
                }

             /*   #nk-banner-home .carsl1{
                    background: #000;
                } */
                .head-menu{
                    background: linear-gradient(0deg,#d1a94e,#fdf5a1,#cfac54);
                }
                .._nk_main .row-fluid{
                    height: 100%;
                }

                .nk-menu .span16{
                    padding: 0 !important;
                }

                .div-logo .span16{
                    padding: 24px 0;
                }
                .div-logo{
                    overflow: hidden;
                }
                .span11{
                    height: 278px !important;
                }

              
             }

             footer .col-footer h3 {
                text-transform: uppercase;
                font-size: 16px;
                color: #424242;
                font-weight: bold;
                margin-top: 0;
                margin-bottom: 15px;
            }

            .footer .row {
                margin-top: 30px;
            }

            footer .col-footer ul li {
                margin-bottom: 8px;
                font-weight: bold;
            }

             .p_hotline_item span {
                    width: 45%;
                    display: inline-block;
                    vertical-align: middle;
                    font-family: Arial, Tahoma, sans-serif;
                    font-size: 14px;
                    color: #333;
                    text-align: left;
                }

            .max-width {
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                position: relative;
            } 

            .phone_hotline {
                width: 100%;
                background: #f5f5f5;
                display: flex;
                justify-content: space-between;
            } 
            .p_hotline_item {
                width: 33.34%;
                text-align: center;
                position: relative;
            } 

            .p_hotline_item .icon_security {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url({{ asset('media/category/icon.png')}});
                background-position: 99% .5%;
            }

            .p_hotline_item .icon_purchase {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url({{ asset('media/category/icon.png')}});
                background-position: 81.5% 14.5%;
            }
            .p_hotline_item .icon_complain {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url({{ asset('media/category/icon.png')}});
                background-position: 95.5% 14.5%;
            }

            .p_hotline_item span strong{
                display: block;
                font-weight: 700;
            }


            </style>
            <!-- mobile -->
            
            <div class="row-fluid mobile search-head">
                <div class="span16 nk-header">
                    <div class="fluid">
                        <div class="span16 _nk_main">
                            <div class="row-fluid mobile">

                                <div class="div-header-cart">

                                    <div class="logo-mobile">
                                        <a href="/"> <img src="{{ asset('/images/template/logo2.jpg') }}" alt=""> </a> 
                                    </div>

                                    <div id="nk-cart">
                                        <ul>
                                            <li class="cart-info-box nk_tooltip" data-toggle=".nk-cart-content" data-overlay="true">
                                                <a href="javascript:void(0)" class="checkout_header" onclick="showToCart()">
                                                    <div class="icon"><i class="nki-shopping-cart"></i>
                                                        @if($number_cart>0)
                                                        <span class="mount">{{$number_cart }}</span>
                                                        <span class="mount">{{$number_cart }}</span>
                                                    </div>
                                                    @endif
                                                   
                                                </a>
                                            </li>
                                          
                                            <li>
                                                <a href="#">
                                                <i class="nki-Phone"></i>  </a>
                                            </li> 

                                             <li id="login_form">
                                                <a href="#" class="nk-text-login">
                                                <i class="fa fa-newspaper"></i> Tin tức </a>
                                            </li>

                                        
                                            <li class="icons-mobile-bar">

                                                <a class="btn  show-menu-mobile show-bar" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                                            </li> 
                                          

                                        </ul>
                                    </div>

                                </div>

                                <!-- menu show bar -->

                                <div class="show-menu">
                                    <div class="box-fixed active">
                                        <a href="javascript:void(0)" class="btn-closemenu">Đóng</a>
                                    </div>
                                    <div class="show-menu__main">
                                        <nav class="nav-list nav-list--dynamic">
                                            <a href="/ti-vi">Tivi</a> 
                                            <a href="/may-giat">Máy giặt</a> 
                                            <a href="/tu-lanh">Tủ lạnh</a> 
                                            <a href="/dieu-hoa">Điều hòa</a> 
                                            <a href="/tu-dong">Tủ đông</a> 
                                            <a href="/tu-mat">Tủ Mát</a> 
                                            <a href="/gia-dung">Gia Dụng</a> 
                                            <a href="/lo-nuong">Lò Nướng</a> <!-- <a href="/may-loc-nuoc">Máy lọc nước</a> --> 
                                            <a href="/may-say-quan-ao">Máy sấy quần áo</a> 
                                            <a href="/may-loc-nuoc">A.O.Smith</a> 
                                            <a href="/quat">Quạt</a> 
                                            <a href="/may-cu-trung-bay">Máy cũ, Trưng bày</a> 
                                            <a href="/deal" class="promotion-menu"> Giảm giá <br>đặc biệt <span class="item__label">- 5%</span> </a> 
                                        </nav>

                                     <!--    <div class="readmore-menu">
                                            <a href="/danh-muc-nhom-hang" class="txt-readmore"> Xem tất cả nhóm hàng</a>
                                        </div> -->
                                        <div class="show-menu__link clearfix">
                                            <div class="link-item">
                                                <p>Thông tin</p>
                                                <ul>
                                                    <li>
                                                        <a href="#">Giới thiệu </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Liên hệ  </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Dự án bán buôn </a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="link-item">
                                                <p>Hỗ trợ mua hàng</p>
                                                <ul>
                                                    <li>
                                                        <a href="#">Hướng dẫn mua hàng </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cách thức thanh toán </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Bảng giá lắp đặt </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- end menu show -->


                                <div class="span16 row flexthis _nk_bottom search_center">
                                    <div class="row-fluid nav1-search">
                                       <!--  <div class="span4 ">
                                            <h1 id="nk-logo">
                                                <a href="/">
                                                <img fetchpriority="high" loading="eager" src="/images/companies/_1/html/2017/T11/homepage/Logo_NK.svg" width="242px" height="42px" alt="">
                                                </a>
                                            </h1>
                                        </div> -->
                                        
                                        <div class="span12 nk-nav-right nav-search">
                                            <div class="row-fluid ">
                                                <div class="span16 ">
                                                    <div class="header-right" id="nk-holine-new">


                                                        <div id="nk-searchs">
                                                            <form action="{{ route('search-product-frontend') }}" method="get" class="cm-processed-form">
                                                                <div class="nk-search-box">
                                                                    <input type="text" id="tags_mobile" name="key"  id="search_input" placeholder="Bạn cần tìm gì hôm nay ?" autocomplete="off">
                                                                    <button>
                                                                    <i class="nki-search"></i>
                                                                    </button>
                                                                   
                                                                    <div class="search-results">
                                                                       
                                                                    </div>
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end mobile -->

            <div class="clearfix"></div>



                @include('frontend.menu_list')
            
        </div>
        <div class="tygh-content clearfix">
            <div class="container-fluid none-bacground">
                @if(!empty($bannerscrollRight) && !empty($bannerscrollLeft))
                <div class="row-fluid ">
                    <div class="span16 container wrap_banner_scroll">
                        <div class="nk-banner-scroll-home-left">
                            <div class="scroll-content">
                                <a rel="nofollow" href="{{ $bannerscrollLeft->link }}">
                                <img class="banner-lazy" src="{{ asset($bannerscrollLeft->image) }}" width="100%" alt="ECM_Banner scroll homepage position left">
                                </a>
                            </div>
                        </div>
                        <div class="nk-banner-scroll-home-right">
                            <div class="scroll-content">
                                <a rel="nofollow" href="{{ $bannerscrollLeft->link }}">
                                <img class="banner-lazy" src="{{ asset($bannerscrollLeft->image) }}" data-src="{{ asset($bannerscrollLeft->image) }}" width="100%" alt="ECM_Banner scroll homepage position right (1)">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(isset($banners))
                <!-- banner home -->
                <div class="row-fluid nk-banner-homes">
                    <div class="span16 banner_home__ container">
                        <div class="row-fluid ">
                            <div class="span11 row banner-left">
                                <div id="nk-banner-home">
                                    <div  class="nk-banner-mains owl-carousel carsl1 owl-loaded owl-drag" >
                                       
                                        @foreach($banners as $value)
                                        <div data-banner-item="0" class="item">
                                            <a rel="nofollow" href="javascript:void(0)">
                                            <img fetchpriority="high" class="main-banner" src="{{ asset($value->image) }}"  alt="ECM_Pre-order S24_0124" style="width: 100%">
                                            </a>
                                        </div>
                                        @endforeach
                                     
                                        
                                    </div>
                                </div>
                                <style>
                                    #nk-banner-home #sync1 {
                                    display: block;
                                    visibility: visible;
                                    opacity: 1;
                                    border-radius: 0.5rem;
                                    }
                                    .owl-carousel .item {
                                    padding: 0;
                                    }
                                    .wrapper-home-banner .owl-carousel {
                                    display: block;
                                    visibility: visible;
                                    opacity: 1;
                                    border-radius: 0.5rem;
                                    }
                                    .owl-item .owl-lazy {
                                    opacity: 1;
                                    }
                                    .homenews ul li a {
                                        overflow: hidden;
                                        line-height: 1.2em;
                                        font-size: 14px;
                                        color: #333;
                                        word-spacing: .15em;
                                    }
                                    .homenews span a {
                                        padding: 10px 0;
                                        font-size: 14px;
                                        color: #414042;
                                        text-transform: uppercase;
                                        font-weight: 600;
                                        line-height: 16px;
                                    }
                                </style>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endif 


                @yield('content')
                <div class="row-fluid ">
                   
                    <div class="row-fluid ">
                        <div class="span16 container box-sugest">
                            <div class="row-fluid box-fix-css">
                                <div class="nk-recent">

                                    <div class="nk-recent-title header-blocks">
                                        <span>Sản phẩm Gợi ý</span>

                                    </div>
                                    <?php
                                        $hot = DB::table('hot')->select('product_id')->orderBy('orders', 'asc')->get()->pluck('product_id');
                                        
                                            $data = App\Models\product::whereIn('id', $hot->toArray())->Orderby('orders_hot', 'desc')->get();
                                        
                                        ?>    
                                    <div class=" recent-container mouse-mover">
                                        <div class="nk-recent-list product-list owl-carousel owl-loaded owl-drag">
                                            <div id="sync1" class="owl-carousel ">
                                                @foreach($data as $key =>$datas)
                                                <div class="product-slide item" id="sugest_pd_{{ $datas->id }}">
                                                    <div class="product-slide">
                                                        <div class="product">
                                                            <div class="product-header" href="https://www.nguyenkim.com/dien-thoai-iphone-15-pro-128gb-blue-titanium.html">
                                                                <div class="top-right">
                                                                    <div class="product-feature-badge-item installment"><span>Trả góp 0%</span></div>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="{{ route('details', $datas->Link) }}">
                                                                    <img
                                                                        class="ls-is-cached lazyloaded"
                                                                        src="{{ asset($datas->Image) }}"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-body">
                                                                <div class="product-feature-badge"></div>
                                                                <div class="product-title"><a href="{{ route('details', $datas->Link) }}">{{ $datas->Name }}</a></div>
                                                                <div class="product-price">
                                                                    <p class="final-price"> {{ @convert_price($datas->Price) }}  </p>
                                                                </div>
                                                            </div>
                                                            <div class="product-footer"></div>
                                                        </div>
                                                    </div>

                                                    @include('frontend.layouts.more-info', ['value'=>$datas])
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <style>
                                a.adpopup-close.close-desktop {
                                height: 25px;
                                width: 25px;
                                background-color: #FFF;
                                border-radius: 50%;
                                display: inline-block;
                                }
                                .adpopup-style-bg-light {
                                background-color: #fff0;
                                }
                                .adpopup {
                                box-shadow: 0 7px 20px 0 rgba(17, 29, 43, 0);
                                }

                                .box-sugest{
                                    padding: 0 !important;
                                }


                                .adpopup-close.close-desktop::before,
                                .adpopup-close.close-desktop::after {
                                left: 11px;
                                top: 4px;
                                }
                                .m .adpopup-content-image img {
                                background: #fff0;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="row-fluid ">
                        <div class="span16 container fix-pad">
                            <div class="nk-product-cate-homepage row-fluid">
                                <div class="lst-cate-title header-blocks">
                                    <span>Danh mục nổi bật</span>
                                </div>
                                <div class="categories">
                                    <div class="nk-content">
                                        <a class="item" href="/dieu-hoa">
                                            <div>
                                                <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/maylanh.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/maylanh.png" width="50" height="50" alt="may-lanh">
                                            </div>
                                            <h4 class="cate-title">Điều hòa</h4>
                                        </a>
                                      
                                        <a class="item" href="/tu-lanh/">
                                            <div>
                                                <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/tulanh.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/tulanh.png" width="50" height="50" alt="bep-tu-hong-ngoai">
                                            </div>
                                            <h4 class="cate-title">Tủ lạnh</h4>
                                        </a>
                                        <a class="item" href="/tivi/">
                                            <div>
                                                <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/tivi.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/tivi.png" width="50" height="50" alt="dien-thoai-di-dong">
                                            </div>
                                            <h4 class="cate-title">Tivi</h4>
                                        </a>
                                      
                                        <a class="item" href="/may-giat/">
                                            <div>
                                                <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-giat.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-giat.png" width="50" height="50" alt="may-say-toc">
                                            </div>
                                            <h4 class="cate-title">Máy giặt</h4>
                                        </a>
                                     
                                    
                                      
                                        <a class="item" href="/noi-com-dien/">
                                            <div>
                                                <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/noi-com-dien.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/noi-com-dien.png" width="50" height="50" alt="may-ep-trai-cay">
                                            </div>
                                            <h4 class="cate-title">Nồi cơm điện</h4>
                                        </a>
                                   
                                   
                                 
                                        <a class="item" href="/bep-tu-hong-ngoai">
                                            <div>
                                                <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/bep-dien.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/bep-dien.png" width="50" height="50" alt="quat-vi">
                                            </div>
                                            <h4 class="cate-title">Bếp điện</h4>
                                        </a>
                                
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--   <div class="row-fluid ">
                        <div class="span16 ">
                            <div id="div_asm_nk_banner_side_pc"></div>
                            <script defer="">
                                _cdp365JourneySetting = {
                                    jrequest_events: [{
                                        event_category: "pageview",
                                        event_action: "view"
                                    }],
                                    jrequest_zones: ["div_asm_nk_banner_side_pc"]
                                }
                            </script>
                            <style>
                                .d .nk-recent {
                                margin: 1em -15px !important;
                                }
                            </style>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        @include('frontend.footer')
        <!--  <script src="https://cdn.nguyenkimmall.com/js/addons/nk_mp_core/onesignal.js" async=""></script>
            <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script> -->
        @stack('js')
        <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
            $('.carsl1').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });

            $('.left-menu').hover(function() {
                
                $(this).find('.sub-menu').show();

                

            }, function() {
                $(this).find('.sub-menu').hide();
            });



         
            
            // setTimeout(function() {
            //     run(0);
            // }, 1000);
            
            // function run(key) {
            //     var hour =  $('.time'+key+' .hourss').text();
            //     var minutes =  $('.time'+key+' .minutess').text();
            //     var second =  $('.time'+key+' .secondss').text();
            //     h =  parseInt(hour);
            //     m = parseInt(minutes);
            //     s = parseInt(second);
            //     s--;
            //     /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
            //       // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
            //       //  - giảm số phút xuống 1 đơn vị
            //       //  - thiết lập số giây lại 59
            //     if (s === -1){
            //           m -= 1;
                     
            //           s = 59;
            //     }
            
            //     // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
            //     //  - giảm số giờ xuống 1 đơn vị
            //     //  - thiết lập số phút lại 59
            //     if (m === -1){
            //         h -= 1;
            //         m = 59;
            //     }
            
            //      if (h < 0){
            //         $('.time'+key).remove();
            
            //         priceSet =  $('.desc-deal'+key+' .price-old').text();
            
            //         $('.desc-deal'+key+' .price-old').css('text-decoration','none');
            
            //         $('.desc-deal'+key+' .price-new').text(priceSet);
            
            //       }  
            
            //     hour =  h.toString();
            
            //     minutes =  m.toString();
                
            //     seconds =  s.toString();
            //     // $('.time'+key+' .hourss').text(h<10?'0'+hour:''+hour);
            //     // $('.time'+key+' .secondss').text(s<10?'0'+seconds:''+seconds);
            //     // $('.time'+key+' .minutess').text(m<10?'0'+minutes:''+minutes); 
            
            //     if(key===0){
            
            //         $('.countdown-timer #hour').text(h<10?'0'+hour:''+hour);
            //         $('.countdown-timer #second').text(s<10?'0'+seconds:''+seconds);
            //         $('.countdown-timer #minute').text(m<10?'0'+minutes:''+minutes); 
            
            
            //     }
            
            //     // nhảy time bản mobile khi tắt set giờ riêng


            //     $('.mobiles .time .hourss').text(h<10?'0'+hour:''+hour);
            //     $('.mobiles .time .secondss').text(s<10?'0'+seconds:''+seconds);
            //     $('.mobiles .time .minutess').text(m<10?'0'+minutes:''+minutes); 

            //     console.log(seconds);
            
            //     setTimeout(function() {
            //         run(0);
            //     }, 1000);
            // }
            
        </script>

         <?php 
            $ismobile = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

            ?>
        <script type="text/javascript">
            $('#sync1').owlCarousel({
                loop:true,
                margin:10,
                nav:false,

                responsive:{
                    0:{
                        items:1.5
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:5
                    }
                }
            })

            $('.view-all span').click(function(){

                $('.mobiles-view').remove();
                $('.show-group-data').removeClass('desktop');
            })
            
            
            
           
            
            
            $('#payday-blocks').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
            
            $('#payday-block').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
            
            $('#payday-blockss').owlCarousel({
            
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:5
                    }
                }
            })
            <?php 

            if($ismobile){?>
            // tags_mobile

                $(function() {
                    $("#tags_mobile").autocomplete({
                    
                        minLength: 2,
                        
                        source: function(request, response) {
                    
                            $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                    
                    
                            });
                            $.ajax({
                    
                                url: "{{  route('sugest-click')}}",
                                type: "POST",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    product:$('#tags_mobile').val()
                                },
                                dataType: "json",
                                success: function (data) {
                                    var items = data;
                    
                                    response(items);

                                    // console.log(data)
                                    
                                    $('#ui-id-1').hide();

                                    $('.search-results').html();
                    
                                    $('.search-results').html(data);

                    
                                 
                                }
                            });
                        },
                    
                        
                        html:true,
                    });
                });
            <?php    

                } 
                else{
            ?>   

            
            $(function() {
                $("#tags").autocomplete({
                
                    minLength: 2,
                    
                    source: function(request, response) {
                
                        $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                
                
                        });
                        $.ajax({
                
                            url: "{{  route('sugest-click')}}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                product:$('#tags').val()
                            },
                            dataType: "json",
                            success: function (data) {
                                var items = data;
                
                                response(items);
            
                
                                $('#ui-id-1').html();
                
                                $('#ui-id-1').html(data);
                            
                            }
                        });
                    },
                
                    
                    html:true,
                });
            });
            <?php 

                }
            ?>
            
            
            $("#exampleModal").on("hidden.bs.modal", function () {
                $('#tbl_list_cartss').html('');
            });
            
            function showToCart() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            
                $.ajax({
                    type: 'POST',
                    url: "{{ route('showCart') }}",
                   
                    success: function(result){
                      
                       // numberCart = result.find("#number-product-cart").text();
            
                        $('#tbl_list_cartss').append(result);
            
                       
                        $('#exampleModal').modal('show'); 
                        
                    }
                });
                
            } 

            $(".btn-closemenu").click(function(){

                $('.show-menu').removeClass('active');
            });

            $(".show-menu-mobile").click(function(){

                $('.show-menu').addClass('active');

              
             
            });  

    var movingText = $(".gift-info");

    movingText.hide();

    if(window.innerWidth>768){

      // Xử lý sự kiện khi chuột di chuyển
        $(".mouse-mover .item").on("mousemove", function(event) {
            movingText.show();

            var id = $(this).attr("id");

            var data = $("#"+id+" .gifts-info").html();

            // nếu text dài thì add thêm height để chống tràn

            number_text_promotion =  parseInt($("#"+id+" .gifts-info").attr('data-text'));

            if(number_text_promotion >300){
                $(".gift-info").addClass('max-height');
            }

            if(number_text_promotion <300 && $(".gift-info").hasClass('max-height')){
                $(".gift-info").removeClass('max-height');
            }
            
            // end check


            $(".gift-info").html('');
            $(".gift-info").html(data);

            var x = event.pageX+15;
            var y = event.pageY+15;

            // Cập nhật vị trí của chữ theo vị trí của chuột
            movingText.css({
              "left": x,
              "top": y,
            });
          })
          .on("mouseout", function(event) {
            // Fade out element when mouse leaves
            movingText.hide();
          });

    }      
        
            
        </script>
    </body>
</html>