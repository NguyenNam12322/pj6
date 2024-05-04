<?php
    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
    $number_cart = count($cart);
    ?>   
<script>
    // var code = prompt('Nhập mã để truy cập trang web:');
    // if (code !== '112233445577') {
    //     window.location.href = 'https://demo.dienmaynguoiviet.net/404';
    // }
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

        @if(!empty($meta))
        <title>{{ $meta->meta_title }}</title>
        <meta name="description" content="{{ $meta->meta_content }}"/>
        <meta property="og:title" content="{{ $meta->meta_title }}" />
        @else
        <title>Siêu thị điện máy</title>
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
        <meta itemprop="image" content="">
        <meta name="format-detection" content="telephone=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}?ver=12 ">
        <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}">
        <script type="text/javascript" src="https://dienmaynguoiviet.vn/js/lib/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://dienmaynguoiviet.vn/css/lib/owl.carousel.min.css">
        <script type="application/javascript">
            var dataRenderProduct = [];
        </script>
        <style type="text/css">
            #ui-id-1{
            background: #fff;
            z-index: 9999;
            width: 22%;
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="loader"></div>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin giỏ hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="tbl_list_cartss">
                        </div>
                        <div class="c3_col_1 form-info-cart {{ $number_cart<=0?'hide':'' }}" >
                            <form class="c3_box" id="form-sub" method="post"  action="{{ route('order') }}">
                                {{ csrf_field() }}
                                <div class="title_box_cart"> Thông tin khách hàng</div>
                                <div class="item-form">
                                    <div class="option-group clearfix">
                                        <div class="step_option">
                                            <span class="st_opt st_opt_active" data-value="Anh" data-name="sex"></span><span>Anh</span>
                                        </div>
                                        <div class="step_option">
                                            <span class="st_opt" data-value="Chị" data-name="sex"></span><span>Chị</span>
                                        </div>
                                        <input type="hidden" name="sex" id="sex" value="Nam">
                                    </div>
                                    <!--option-group-->
                                </div>
                                <div class="item-form">
                                    <input type="text" name="name" id="buyer_name" placeholder="Họ tên">
                                </div>
                                <div class="item-form">
                                    <input type="text" name="phone_number" id="buyer_tel" value="" placeholder="Số điện thoại">
                                </div>
                                <div class="item-form">
                                    <input type="text" name="mail" id="buyer_email" value="" placeholder="Email">
                                </div>
                                <div class="item-form">
                                    <textarea name="address" placeholder="Địa chỉ" id="buyer_address"></textarea>
                                </div>
                                <div class="item-form" style="width: 50%;display: inline-block;color: #0083d1;">
                                    <select name="province" class="form-control" id="ship_to_province" onchange="getDistrict(this.value)">
                                        <option value="0">--Lựa chọn--</option>
                                        <option value="1">Hà nội</option>
                                        <option value="2">TP HCM</option>
                                        <option value="5">Hải Phòng</option>
                                        <option value="4">Đà Nẵng</option>
                                        <option value="6">An Giang</option>
                                        <option value="7">Bà Rịa-Vũng Tàu</option>
                                        <option value="13">Bình Dương</option>
                                        <option value="15">Bình Phước</option>
                                        <option value="16">Bình Thuận</option>
                                        <option value="14">Bình Định</option>
                                        <option value="8">Bạc Liêu</option>
                                        <option value="10">Bắc Giang</option>
                                        <option value="9">Bắc Kạn</option>
                                        <option value="11">Bắc Ninh</option>
                                        <option value="12">Bến Tre</option>
                                        <option value="18">Cao Bằng</option>
                                        <option value="17">Cà Mau</option>
                                        <option value="3">Cần Thơ</option>
                                        <option value="24">Gia Lai</option>
                                        <option value="25">Hà Giang</option>
                                        <option value="26">Hà Nam</option>
                                        <option value="27">Hà Tĩnh</option>
                                        <option value="30">Hòa Bình</option>
                                        <option value="28">Hải Dương</option>
                                        <option value="29">Hậu Giang</option>
                                        <option value="31">Hưng Yên</option>
                                        <option value="32">Khánh Hòa</option>
                                        <option value="33">Kiên Giang</option>
                                        <option value="34">Kon Tum</option>
                                        <option value="35">Lai Châu</option>
                                        <option value="38">Lào Cai</option>
                                        <option value="36">Lâm Đồng</option>
                                        <option value="37">Lạng Sơn</option>
                                        <option value="39">Long An</option>
                                        <option value="40">Nam Định</option>
                                        <option value="41">Nghệ An</option>
                                        <option value="42">Ninh Bình</option>
                                        <option value="43">Ninh Thuận</option>
                                        <option value="44">Phú Thọ</option>
                                        <option value="45">Phú Yên</option>
                                        <option value="46">Quảng Bình</option>
                                        <option value="47">Quảng Nam</option>
                                        <option value="48">Quảng Ngãi</option>
                                        <option value="49">Quảng Ninh</option>
                                        <option value="50">Quảng Trị</option>
                                        <option value="51">Sóc Trăng</option>
                                        <option value="52">Sơn La</option>
                                        <option value="53">Tây Ninh</option>
                                        <option value="56">Thanh Hóa</option>
                                        <option value="54">Thái Bình</option>
                                        <option value="55">Thái Nguyên</option>
                                        <option value="57">Thừa Thiên-Huế</option>
                                        <option value="58">Tiền Giang</option>
                                        <option value="59">Trà Vinh</option>
                                        <option value="60">Tuyên Quang</option>
                                        <option value="61">Vĩnh Long</option>
                                        <option value="62">Vĩnh Phúc</option>
                                        <option value="63">Yên Bái</option>
                                        <option value="19">Đắk Lắk</option>
                                        <option value="22">Đồng Nai</option>
                                        <option value="23">Đồng Tháp</option>
                                        <option value="21">Điện Biên</option>
                                        <option value="20">Đăk Nông</option>
                                    </select>
                                </div>
                                <div id="district-holder-login" style="width: 49%;display: inline-block;color: #0083d1;"></div>
                                <!-- <div id="ajxTaxInvoice" class="item-form">
                                    <div class="ng_ml">
                                        <input type="checkbox" onclick="showTap('pnlTaxInvoice')" name="chkTaxInvoice" id="chkTaxInvoice">
                                        <label id="bale_ml" for="chkTaxInvoice">Xuất hóa đơn công ty</label>
                                    </div>
                                    <div style="width: 100%; margin-top:10px; padding: 0px;display: none;" id="pnlTaxInvoice">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="120" align="left">Công ty/Tổ chức:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxName" value="" size="50" name="user_info[tax_company]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120" align="left">Địa chỉ:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxAddress" value="" size="50" name="user_info[tax_address]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120" align="left">Mã số thuế:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxCode" name="user_info[tax_code]" value="">
                                                        <span class="cmt" id="txtTaxCodeView">&nbsp;</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div> -->
                                <!--ajxTaxInvoice-->
                                <div class="item-form">
                                    <table style="width:100%;">
                                        <tbody>
                                            <tr class="item-paymethod">
                                                <td><input type="radio" style="width:initial; padding:0; margin:0; height:auto;" name="pay_method" value="3" class="pay_option" id="paymethod_3" checked></td>
                                                <td>
                                                    <label for="paymethod_3">Trả tiền khi nhận hàng</label>
                                                    <div id="pay_2" style="display:none;" class="pay_content">Trả tiền khi nhận hàng</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary order1">Đặt hàng</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                        <style type="text/css">
                            .cart-container {
                            text-align: center;
                            padding: 20px;
                            /*                                    border: 1px solid #ccc;*/
                            border-radius: 8px;
                            background-color: #fff;
                            }
                            #nk-banner-home .owl-nav{
                                display: none;
                            }

                            

                            /*#nk-banner-home .owl-dots{
                                display: none;
                            }*/
                            .empty-cart-message {
                            font-size: 18px;
                            color: #555;
                            margin-top: 30px;
                            }
                            .cart-icon {
                            font-size: 40px;
                            color: #ccc;
                            }
                            #exampleModal .modal-body{
                            min-height: 200px;
                            }
                        </style>
                        <div class="cart-container {{ $number_cart>0?'hide':'' }}">
                            <div class="cart-icon">🛒</div>
                            <div class="empty-cart-message">
                                <p>Không có sản phẩm nào trong giỏ hàng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <div class="span16 row flexthis _nk_bottom">
                                        <div class="row-fluid ">
                                            <div class="span4 ">
                                                <h1 id="nk-logo">
                                                    <a href="/">
                                                    <img fetchpriority="high" loading="eager" src="/images/companies/_1/html/2017/T11/homepage/Logo_NK.svg" width="242px" height="42px" alt="">
                                                    </a>
                                                </h1>
                                            </div>

                                            <div class="span12 nk-nav-right">
                                                <div class="row-fluid ">
                                                    <div class="span16 ">
                                                        <div class="header-right" id="nk-holine-new">
                                                            <div id="nk-location" class="nk_tooltip nk_tooltip_ext newstyle">
                                                                <!-- <ul>
                                                                    <li class="placeholder-info-box">
                                                                        <i class="nki-placeholder-3"></i>
                                                                        <div>
                                                                            <span class="title">Xem giá tại</span>
                                                                            <br>
                                                                            <a class="nk-select-loccation" id="nk-select-loccation">TP.HCM</a>
                                                                        </div>
                                                                    </li>
                                                                    </ul> -->
                                                                <div id="popUpChangeProvince" class="modal">
                                                                    <div class="modal-background bnt-close-popup"></div>
                                                                    <div class="popup_location popup_location_list">
                                                                        <a class="nki-Vector nk-close-ext bnt-close-popup"></a>
                                                                        <h2>Chọn tỉnh thành để xem đúng giá &amp; khuyến mãi:</h2>
                                                                        <div class="nk-search-box">
                                                                            <input type="text" placeholder="Tìm kiếm tỉnh thành." class="act_search">
                                                                            <button>
                                                                            <i class="nki-search"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="nk-location-list">
                                                                            <a data-id="001" data-name="TP.HCM" data-alias="tp.hcm" data-value="001" class="item_area checker">
                                                                                TP.HCM 
                                                                                <div class="icon">
                                                                                    <svg height="15" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-check-circle">
                                                                                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </a>
                                                                            <a data-id="027" data-name="Hà Nội" data-alias="ha noi" data-value="027" class="item_area">Hà Nội</a>
                                                                            <a data-id="002" data-name="Bình Dương" data-alias="binh duong" data-value="002" class="item_area">Bình Dương</a>
                                                                            <a data-id="031" data-name="Hải Phòng" data-alias="hai phong" data-value="031" class="item_area">Hải Phòng</a>
                                                                            <a data-id="004" data-name="Đồng Nai" data-alias="dong nai" data-value="004" class="item_area">Đồng Nai</a>
                                                                            <a data-id="061" data-name="Quảng Ninh" data-alias="quang ninh" data-value="061" class="item_area">Quảng Ninh</a>
                                                                            <a data-id="012" data-name="Bà Rịa - Vũng Tàu" data-alias="ba ria vung tau" data-value="012" class="item_area">Bà Rịa - Vũng Tàu</a>
                                                                            <a data-id="054" data-name="Thái Nguyên" data-alias="thai nguyen" data-value="054" class="item_area">Thái Nguyên</a>
                                                                            <a data-id="040" data-name="Lâm Đồng" data-alias="lam dong" data-value="040" class="item_area">Lâm Đồng</a>
                                                                            <a data-id="045" data-name="Phú Thọ" data-alias="phu tho" data-value="045" class="item_area">Phú Thọ</a>
                                                                            <a data-id="018" data-name="Bình Thuận" data-alias="binh thuan" data-value="018" class="item_area">Bình Thuận</a>
                                                                            <a data-id="041" data-name="Nam Định" data-alias="nam dinh" data-value="041" class="item_area">Nam Định</a>
                                                                            <a data-id="007" data-name="Tiền Giang" data-alias="tien giang" data-value="007" class="item_area">Tiền Giang</a>
                                                                            <a data-id="055" data-name="Thanh Hóa" data-alias="thanh hoa" data-value="055" class="item_area">Thanh Hóa</a>
                                                                            <a data-id="006" data-name="Bến Tre" data-alias="ben tre" data-value="006" class="item_area">Bến Tre</a>
                                                                            <a data-id="042" data-name="Nghệ An" data-alias="nghe an" data-value="042" class="item_area">Nghệ An</a>
                                                                            <a data-id="003" data-name="Vĩnh Long" data-alias="vinh long" data-value="003" class="item_area">Vĩnh Long</a>
                                                                            <a data-id="056" data-name="Thừa Thiên Huế" data-alias="thua thien hue" data-value="056" class="item_area">Thừa Thiên Huế</a>
                                                                            <a data-id="057" data-name="Trà Vinh" data-alias="tra vinh" data-value="057" class="item_area">Trà Vinh</a>
                                                                            <a data-id="021" data-name="Đà Nẵng" data-alias="da nang" data-value="021" class="item_area">Đà Nẵng</a>
                                                                            <a data-id="010" data-name="An Giang" data-alias="an giang" data-value="010" class="item_area">An Giang</a>
                                                                            <a data-id="049" data-name="Quảng Ngãi" data-alias="quang ngai" data-value="049" class="item_area">Quảng Ngãi</a>
                                                                            <a data-id="008" data-name="Cần Thơ" data-alias="can tho" data-value="008" class="item_area">Cần Thơ</a>
                                                                            <a data-id="016" data-name="Bình Định" data-alias="binh dinh" data-value="016" class="item_area">Bình Định</a>
                                                                            <a data-id="035" data-name="Kiên Giang" data-alias="kien giang" data-value="035" class="item_area">Kiên Giang</a>
                                                                            <a data-id="024" data-name="Gia Lai" data-alias="gia lai" data-value="024" class="item_area">Gia Lai</a>
                                                                            <a data-id="011" data-name="Bạc Liêu" data-alias="bac lieu" data-value="011" class="item_area">Bạc Liêu</a>
                                                                            <a data-id="022" data-name="Đắk Lắk" data-alias="dak lak" data-value="022" class="item_area">Đắk Lắk</a>
                                                                            <a data-id="020" data-name="Cà Mau" data-alias="ca mau" data-value="020" class="item_area">Cà Mau</a>
                                                                            <a data-id="034" data-name="Khánh Hòa" data-alias="khanh hoa" data-value="034" class="item_area">Khánh Hòa</a>
                                                                            <a data-id="014" data-name="Bắc Giang" data-alias="bac giang" data-value="014" class="item_area">Bắc Giang</a>
                                                                            <a data-id="013" data-name="Bắc Kạn" data-alias="bac kan" data-value="013" class="item_area">Bắc Kạn</a>
                                                                            <a data-id="015" data-name="Bắc Ninh" data-alias="bac ninh" data-value="015" class="item_area">Bắc Ninh</a>
                                                                            <a data-id="017" data-name="Bình Phước" data-alias="binh phuoc" data-value="017" class="item_area">Bình Phước</a>
                                                                            <a data-id="019" data-name="Cao Bằng" data-alias="cao bang" data-value="019" class="item_area">Cao Bằng</a>
                                                                            <a data-id="025" data-name="Hà Giang" data-alias="ha giang" data-value="025" class="item_area">Hà Giang</a>
                                                                            <a data-id="026" data-name="Hà Nam" data-alias="ha nam" data-value="026" class="item_area">Hà Nam</a>
                                                                            <a data-id="029" data-name="Hà Tĩnh" data-alias="ha tinh" data-value="029" class="item_area">Hà Tĩnh</a>
                                                                            <a data-id="030" data-name="Hải Dương" data-alias="hai duong" data-value="030" class="item_area">Hải Dương</a>
                                                                            <a data-id="066" data-name="Hậu Giang" data-alias="hau giang" data-value="066" class="item_area">Hậu Giang</a>
                                                                            <a data-id="032" data-name="Hòa Bình" data-alias="hoa binh" data-value="032" class="item_area">Hòa Bình</a>
                                                                            <a data-id="033" data-name="Hưng Yên" data-alias="hung yen" data-value="033" class="item_area">Hưng Yên</a>
                                                                            <a data-id="036" data-name="Kon Tum" data-alias="kon tum" data-value="036" class="item_area">Kon Tum</a>
                                                                            <a data-id="037" data-name="Lai Châu" data-alias="lai chau" data-value="037" class="item_area">Lai Châu</a>
                                                                            <a data-id="038" data-name="Lạng Sơn" data-alias="lang son" data-value="038" class="item_area">Lạng Sơn</a>
                                                                            <a data-id="039" data-name="Lào Cai" data-alias="lao cai" data-value="039" class="item_area">Lào Cai</a>
                                                                            <a data-id="005" data-name="Long An" data-alias="long an" data-value="005" class="item_area">Long An</a>
                                                                            <a data-id="043" data-name="Ninh Bình" data-alias="ninh binh" data-value="043" class="item_area">Ninh Bình</a>
                                                                            <a data-id="044" data-name="Ninh Thuận" data-alias="ninh thuan" data-value="044" class="item_area">Ninh Thuận</a>
                                                                            <a data-id="046" data-name="Phú Yên" data-alias="phu yen" data-value="046" class="item_area">Phú Yên</a>
                                                                            <a data-id="047" data-name="Quảng Bình" data-alias="quang binh" data-value="047" class="item_area">Quảng Bình</a>
                                                                            <a data-id="048" data-name="Quảng Nam" data-alias="quang nam" data-value="048" class="item_area">Quảng Nam</a>
                                                                            <a data-id="009" data-name="Quảng Trị" data-alias="quang tri" data-value="009" class="item_area">Quảng Trị</a>
                                                                            <a data-id="051" data-name="Sóc Trăng" data-alias="soc trang" data-value="051" class="item_area">Sóc Trăng</a>
                                                                            <a data-id="050" data-name="Sơn La" data-alias="son la" data-value="050" class="item_area">Sơn La</a>
                                                                            <a data-id="052" data-name="Tây Ninh" data-alias="tay ninh" data-value="052" class="item_area">Tây Ninh</a>
                                                                            <a data-id="053" data-name="Thái Bình" data-alias="thai binh" data-value="053" class="item_area">Thái Bình</a>
                                                                            <a data-id="058" data-name="Tuyên Quang" data-alias="tuyen quang" data-value="058" class="item_area">Tuyên Quang</a>
                                                                            <a data-id="059" data-name="Vĩnh Phúc" data-alias="vinh phuc" data-value="059" class="item_area">Vĩnh Phúc</a>
                                                                            <a data-id="060" data-name="Yên Bái" data-alias="yen bai" data-value="060" class="item_area">Yên Bái</a>
                                                                            <a data-id="068" data-name="Đắk Nông" data-alias="dak nong" data-value="068" class="item_area">Đắk Nông</a>
                                                                            <a data-id="067" data-name="Điện Biên" data-alias="dien bien" data-value="067" class="item_area">Điện Biên</a>
                                                                            <a data-id="023" data-name="Đồng Tháp" data-alias="dong thap" data-value="023" class="item_area">Đồng Tháp</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                                                    <li class="search-order">
                                                                        <div class="icon">
                                                                            <span class="material-symbols-rounded" style=" display: block; color: white; font-size: 26px">history</span>
                                                                        </div>
                                                                        <!-- <a href="/tra-cuu.html"> Tra cứu đơn hàng </a> -->
                                                                    </li>
                                                                    <li id="login_form">
                                                                        <a href="login.html?return_url=index.php" class="nk-text-login">
                                                                        <i class="nki-user"></i> Tài khoản </a>
                                                                    </li>
                                                                    <li id="login_form2" class="nk_tooltip" data-toggle=".nk-login-content" data-overlay="overlay" style="display: none;"></li>
                                                                    <li class="nk_tooltip" data-toggle=".nk-hotline-content1" data-overlay="true">
                                                                        <a href="tel:18006800">
                                                                            <div class="icon">
                                                                                <i class="nki-Phone"></i>
                                                                            </div>
                                                                            <!-- <p>
                                                                                <span>Gọi mua: 1800.6800 (Miễn phí)</span>
                                                                                </p> -->
                                                                        </a>
                                                                        <div class="nk-hotline-content1">
                                                                            <div class="icon-up"></div>
                                                                            <p>
                                                                                <span>Thời gian hoạt động</span>
                                                                                <span class="color3">8h00 - 21h00</span>
                                                                            </p>
                                                                        </div>
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
                    margin: 10px 0px 5px 15px;
                    padding: 4px 0;
                    text-align: center;
                    width: calc(20% - 0px);
                }
                .nav-list {
                    display: flex;
                    flex-wrap: wrap;
                }
                .category{
                    width: 100% !important;
                    box-shadow: none !important;
                } 
                .nk-header{
                    height: auto !important;
                }

                .search_center{
                    height: 96px !important;
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
                .nk-header ._nk_main ._nk_bottom{
                    margin-top: 40px !important;
                }
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
                
            }

             @media only screen and (min-width: 601px) {
                .mobile{
                    display: none;
                }
             }   
                </style>

                 

            <!-- mobile -->
            
            <div class="row-fluid mobile">
                <div class="span16 nk-header">
                    <div class="fluid">
                        <div class="span16 _nk_main">
                            <div class="row-fluid mobile">

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
                                      
                                        <li id="login_form">
                                            <a href="login.html?return_url=index.php" class="nk-text-login">
                                            <i class="nki-user"></i> Tài khoản </a>
                                        </li>
                                        <li id="login_form2" class="nk_tooltip" data-toggle=".nk-login-content" data-overlay="overlay" style="display: none;"></li>
                                        <li class="nk_tooltip" data-toggle=".nk-hotline-content1" data-overlay="true">
                                            <a href="tel:18006800">
                                                <div class="icon">
                                                    <i class="nki-Phone"></i>
                                                </div>
                                                <!-- <p>
                                                    <span>Gọi mua: 1800.6800 (Miễn phí)</span>
                                                    </p> -->
                                            </a>
                                            <div class="nk-hotline-content1">
                                                <div class="icon-up"></div>
                                                <p>
                                                    <span>Thời gian hoạt động</span>
                                                    <span class="color3">8h00 - 21h00</span>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


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

                                <div class="navigation menu-mobile mobile">
                                    <div class="wrap menu-top">
                                        <div class="icons-mobile-bar"><button class="show-menu-mobile"><i class="fa fa-bars"></i></button></div>
                                       
                                        <div class="clear"></div>
                                    </div>
                                </div>

                                <div class="header__main menu-mobiles-show mobile hide">
                                
                                    <div class="category">
                                        <p class="category__txts" style="display:none"> <span class="menu-list"> <i class="fa fa-bars" aria-hidden="true"></i> </span></p>
                                        <nav class="nav-list">
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

                <!-- banner home -->
                <div class="row-fluid nk-banner-homes">
                    <div class="span16 banner_home__ container">
                        <div class="row-fluid ">
                            <div class="span11 row banner-left">
                                <div id="nk-banner-home">
                                    <div  class="nk-banner-main owl-carousel carsl1 owl-loaded owl-drag" >
                                        @if(isset($banners))
                                        @foreach($banners as $value)
                                        <div data-banner-item="0" class="item">
                                            <a rel="nofollow" href="javascript:void(0)">
                                            <img fetchpriority="high" class="main-banner" src="{{ asset($value->image) }}"  alt="ECM_Pre-order S24_0124" style="width: 100%">
                                            </a>
                                        </div>
                                        @endforeach
                                        @else
                                        <div data-banner-item="0" class="item">
                                            <a rel="nofollow" href="javascript:void(0)">
                                            <img fetchpriority="high" class="main-banner" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/694x376px.jpg"  alt="ECM_Pre-order S24_0124" style="width: 100%">
                                            </a>
                                        </div>
                                        @endif 
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
                                </style>
                            </div>
                            <div class="span5 banner-right desktop">
                                <?php 
                                    $dems = 0;
                                    ?>
                                @if(!empty($bannersRight))
                                @foreach($bannersRight as $value)
                                <?php 
                                    $dems++;
                                    ?>
                                <div class="{{  $dems ===2?'bottom-image':'top-image' }} ">
                                    <a href="javascript:void(0)">
                                    <img fetchpriority="high" loading="eager" src="{{  asset($value['image'])  }}" width="100%" alt="309x183px_AV1">
                                    </a>
                                </div>
                                <?php 
                                    if($dems>=2){
                                    
                                        break;
                                    }
                                    ?>
                                @endforeach
                                @else
                                <div class="top-image">
                                    <a href="javascript:void(0)">
                                    <img fetchpriority="high" loading="eager" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/TET_2024/HOME/309x183px_AV1.jpg" width="100%" alt="309x183px_AV1">
                                    </a>
                                </div>
                                <div class="bottom-image">
                                    <a href="javascript:void(0)">
                                    <img fetchpriority="high" loading="eager" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/309x183.jpg" width="100%" alt="309x183">
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


                @yield('content')
                <div class="row-fluid ">
                    <!-- <div class="span16 margbt10 ">
                        <div class="container">
                            <div class="blog-container">
                                <div class="header-blog header-block">
                                    <span>Thông tin hữu ích - Mua sắm thông minh</span>
                                    <a class="view-more-blog" href="/blog.html">Xem thêm</a>
                                </div>
                                <div class="section-news-top ">
                                    <div class="content_blog">
                                        <div class="wrap_item_left">
                                            <div class="item">
                                                <a href="https://www.nguyenkim.com/ct-giap-thin-vui-bat-thinh-linh.html">
                                                    <img loading="lazy" class="pict lazy ls-is-cached lazyloaded" src="https://cdn.nguyenkimmall.com/images/thumbnails/580/326/detailed/914/0301-MN-1_1162x652__2_.png" data-src="https://cdn.nguyenkimmall.com/images/thumbnails/580/326/detailed/914/0301-MN-1_1162x652__2_.png" width="285px" height="195px" alt="0301-MN-1_1162x652__2_">
                                                    <span class="options">
                                                        <h3 class="truncate-blog-title" data-truncate="Giáp Thìn Vui Bất Thình Lình - Ưu đãi đặc biệt tại Nguyễn Kim mùa Tết 2024"> Giáp Thìn Vui Bất Thình Lình - Ưu đãi đặc biệt tại Nguyễn Kim mùa Tết 2024</h3>
                                                        <span class="truncate-blog-time">Nguyễn Vũ Chi Mai</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="wrap_item_right">
                                            <div class="item">
                                                <a href="https://www.nguyenkim.com/hang-ngan-san-pham-xa-kho-gia-soc-dang-cho-ban-tai-53-ttms-nguyen-kim.html">
                                                    <img loading="lazy" class="pict lazy ls-is-cached lazyloaded" src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/914/0401-TTT-4_1162x652.png" data-src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/914/0401-TTT-4_1162x652.png" width="285px" height="195px" alt="0401-TTT-4_1162x652">
                                                    <span class="options">
                                                        <h3 class="truncate-blog-title" data-truncate="Hàng ngàn sản phẩm Xả Kho Giá Sốc đang chờ bạn tại 53 TTMS Nguyễn Kim "> Hàng ngàn sản phẩm Xả Kho Giá Sốc đang chờ bạn tại 53 TTMS Nguyễn Kim </h3>
                                                        <span class="truncate-blog-time">Trương Thu Thảo </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="https://www.nguyenkim.com/mua-tu-lanh-may-giat-panasonic-ruoc-40-may-giat-say-panasonic-cuc-xin.html">
                                                    <img loading="lazy" class="pict lazy ls-is-cached lazyloaded" src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/914/0901-TTT-1_1162x652.png" data-src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/914/0901-TTT-1_1162x652.png" width="285px" height="195px" alt="0901-TTT-1_1162x652">
                                                    <span class="options">
                                                        <h3 class="truncate-blog-title" data-truncate="Mua tủ lạnh, máy giặt Panasonic - Rước 40 máy giặt sấy Panasonic cực xịn"> Mua tủ lạnh, máy giặt Panasonic - Rước 40 máy giặt sấy Panasonic cực xịn</h3>
                                                        <span class="truncate-blog-time">Trương Thu Thảo </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="https://www.nguyenkim.com/dat-truoc-galaxy-s24-series-tai-nguyen-kim-ruoc-uu-dai-cuc-khung.html">
                                                    <img loading="lazy" class="pict lazy ls-is-cached lazyloaded" src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/916/Catepage-Banner_1200x628px_4muz-rc.jpg" data-src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/916/Catepage-Banner_1200x628px_4muz-rc.jpg" width="285px" height="195px" alt="Catepage-Banner_1200x628px_4muz-rc">
                                                    <span class="options">
                                                        <h3 class="truncate-blog-title" data-truncate="Đặt Trước Galaxy S24 Series Tại Nguyễn Kim Rước Ưu Đãi Cực Khủng"> Đặt Trước Galaxy S24 Series Tại Nguyễn Kim Rước Ưu Đãi Cực Khủng</h3>
                                                        <span class="truncate-blog-time">Trương Thu Thảo </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div> -->
                    <div class="row-fluid ">
                        <div class="span16 container">
                            <div class="nk-recent">
                                <div class="nk-recent-title header-block">
                                    <span>Sản phẩm Gợi ý</span>
                                </div>
                                <?php
                                    $hot = DB::table('hot')->select('product_id')->where('group_id', 2)->orderBy('orders', 'asc')->get()->pluck('product_id');
                                    
                                        $data = App\Models\product::whereIn('id', $hot->toArray())->Orderby('orders_hot', 'desc')->get();
                                    
                                    ?>    
                                <div class=" recent-container">
                                    <div class="nk-recent-list product-list owl-carousel owl-loaded owl-drag">
                                        <div id="sync1" class="owl-carousel">
                                            @foreach($data as $key =>$datas)
                                            <div class="product-slide">
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
                                                                <p class="final-price">{{ @str_replace(',' ,'.', number_format($datas->Price)) }}đ   </p>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="owl-dots disabled"></div>
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
                        <div class="span16 container">
                            <div class="nk-product-cate-homepage">
                                <div class="lst-cate-title header-block">
                                    <span>Danh Mục Nổi Bật</span>
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
                        items:3
                    },
                    1000:{
                        items:1
                    }
                }
            })
            
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
                        items:3
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
            
            
            
            $('.nk-banner-main').owlCarousel({
                loop:true,
                margin:10,
                dots:false,
                nav:false,
                navigation : false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
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
                        items:1.5
                    },
                    600:{
                        items:3
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

            $(".show-menu-mobile").click(function(){

                if($('.menu-mobiles-show').hasClass('hide')){

                    $('.menu-mobiles-show').removeClass('hide');

                }
                else{
                    $('.menu-mobiles-show').addClass('hide');
                }
             
            });  

        
            
        </script>
    </body>
</html>