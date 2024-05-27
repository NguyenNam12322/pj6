

<!DOCTYPE html>
<html lang="vi-VN">
    <head>
         <?php  

            $requestcheck = \Request::route();

            if(!empty($requestcheck)){
                 $nameRoute = \Request::route()->getName();
            }
            else{
                 $nameRoute = '';
            }


            $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
            $number_cart = count($cart);
    
           

          ?>
        <meta charset="utf-8" />

        <meta name="robots" content="{{ (isset($actives_pages_blog) && $actives_pages_blog ==0)?'noindex':'index' }},follow" />
        @if(!empty($meta))
        <title>{{ $meta->meta_title }}</title>
        <meta name="description" content="{{ $meta->meta_content }}"/>
        <meta property="og:title" content="{{ $meta->meta_title }}" />
        @if(!empty($data) && !empty($data->Image))
        <meta property="og:image" content="{{ asset($data->Image) }}"/>
        @endif
        <meta property="og:description" content="{{ $meta->meta_content }}" /> 
        <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>
        @else
            @if($nameRoute =='sale-home'||$nameRoute =='dealFe')
            <title>Khuyến mại lớn, giảm giá mạnh tại Điện Máy Người Việt</title>
            <meta name="description" content="Hàng ngàn khuyến mại hấp dẫn và giảm giá tại Siêu Thị Điện Máy Người Việt. Liên hệ hotline 0247.303.6336 để biết thêm thông tin chi tiết"/>
            <meta property="og:title" content="Khuyến mại lớn, giảm giá mạnh tại Điện Máy Người Việt" />
            <meta property="og:description" content="Hàng ngàn khuyến mại hấp dẫn và giảm giá tại Siêu Thị Điện Máy Người Việt. Liên hệ hotline 0247.303.6336 để biết thêm thông tin chi tiết" /> 
            <meta name="keywords" content="Khuyến mại lớn, giảm giá mạnh,"/>
            @else

             <?php 

                if(!Cache::has('meta5959')){

                    $metas = App\Models\metaSeo::find(5959); 

                    Cache::put('meta5959', $metas, 100000);

                }
                
                $meta = Cache::get('meta5959');
             ?>

            <title>{{  !empty($name_cates_cate)?$name_cates_cate:$meta->meta_title }}</title>
            <meta name="description" content="{{ $meta->meta_content??''}}"/>
            <meta property="og:title" content="{{ $meta->meta_title??'' }}" />
            <meta property="og:description" content="{{ $meta->meta_content??'' }}" /> 
            <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>
            @endif
        @endif
        <!-- <link rel="shortcut icon" href="{{ asset('uploads/icon/favicon.ico') }}"/> -->
        <meta name = "google-site-verify" content = "1AH1fN3G7ygWRcOlEQWJyhginaxmT67zTMPP8wnfFD0" />
        <meta name="google-site-verification" content="P-EnxCkmnXXEDeC0FWq-rSxjbSSyy9HeimO6f2Evtyc" />
        <meta property="zalo-platform-site-verification" content="UTYP5VFbJZ8Yz-G8uFTfDZxws27IX0fyDZK" />
      
        <meta http-equiv="Cache-control" content="public">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}?ver=12 ">

         <style type="text/css">
            .nk-nav-right ul{
                display: flex;
            }

            .flexthis .row-fluid{
                display: flex;
            }



           /* .nk-header #nk-search{
                width: 27% !important;
            }*/

            .header-menu__navs .navs-item-link {
                font-size: 13px !important;
            }    

            .nk-menu #nk-danh-muc-san-pham-left>h3{
                font-weight: inherit !important;
            }
         </style>
        <?php 
            $show_meta = $_GET['show']??'';
        ?>
        @if($show_meta ==''||$show_meta=='tragop-online')
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        @endif
       
        <meta property="og:image" content="{{ asset('images/template/logo.png') }}" />
      
        <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          };
          gtag('event', 'conversion', {
              'send_to': 'AW-971664599/BsqZCL6p_cYCENfZqc8D',
              'event_callback': callback
          });
          return false;
        }
        </script>

        <script>
         gtag('event', 'page_view', {
           'send_to': 'AW-971664599',
           'dynx_itemid':'',
           'dynx_pagetype':'home',
           'dynx_totalvalue':0
         });
        </script>

       
       <!--  <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=481349662401312&ev=PageView&noscript=1"
        /></noscript> -->
        <!-- End Facebook Pixel Code -->
          
         



        <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
         
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}?ver=1"> 
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/apps.css') }}?ver=18">
        <link rel="stylesheet" type="text/css" href="{{asset('css/dienmay.css')}}?ver=106">
        <link rel="stylesheet" type="text/css" href="{{asset('css/detailsfe.css')}}?ver=7"> 
       

        <meta name="csrf-token" content="{{ csrf_token() }}">

    
        <style type="text/css">
            /*body.theme-lunar-new-year{
                overflow-x: hidden;
            }*/

            .icons-shopings{
                position: fixed;
                top: 50%;
                left: 50%;
                z-index: 99;
            }



            .category__all{
                padding: 0 !important;
                width: 100% !important;
            }

            .category{
                box-shadow: none !important;
            }

            .main-menu{
                width: 240px;
            }

            .bar-top-left {
                position: absolute !important;
                background-color: #fff;
            }
            
            .listcompare-click{
                display: none;
            }

            .category__all{
                color: #fff !important;
               
            }

            .event-dt, .event{
                display:block;
            } 

            .event{
                width: 70px;
                height: 70px;
                
                position: absolute;
                top: 0;
                left: 10px;
                z-index: 999;
            
            }

            .list-menu .category{
                width: 11%;
            }

            .compare-pro-holder a {
                display: block;
                width: 100%;
                margin-right: 35px;
                /*float: left;*/
            }

            .sub-cate h3, .compare-show, .gift-text span{
                font-size: 14px;
            }
            .compare-pro-holder img{
                width: 100%;
            }

            #suggesstion-box img{
                width: 29%;
            }

            .global-compare-group{
                display: none;
            }

            .js-compare-item{
                padding: 0 10px;
            }
            #js-compare-holder img{
                margin-bottom: 10px;

            }
            .icImageCompareNew{
                background: url("{{ asset('images/background-image/icon_add_desktop.png')  }}") no-repeat top center;
                background-size: 45px 45px;
                width: 69%;
                height: 45px;
                display: block;   
                margin-bottom: 10px;

            }

            .img-compare{
                height: 140px;
                width: 140px;
                position: relative;
            }

            .add-compare-a{
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
            }

            #js-compare-holder{
                display: flex;
            }


            /*item footer*/

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

            .p_hotline_item .icon_purchase, .p_hotline_item .icon_security {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('{{ asset('media/category/icon.png')  }}');
            }

            .p_hotline_item span {
                width: 45%;
                display: inline-block;
                vertical-align: middle;
                font-family: Arial,Tahoma,sans-serif;
                font-size: 14px;
                color: #333;
                text-align: left;
            }

            .p_hotline_item span strong {
                display: block;
                font-weight: 700;
            }

            .p_hotline_item .icon_complain {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('{{ asset('media/category/icon.png')  }}');
                background-position: 95.5% 14.5%;
            }

            .p_hotline_item  .icon_purchase {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('{{ asset('media/category/icon.png')  }}');
                background-position: 81.5% 14.5%;
            }

            .p_hotline_item .icon_security {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('{{ asset('media/category/icon.png')  }}');
                background-position: 99% .5%
            }
            .iconss-sp{
                width: 20px;
            }

            .header__top {
                background-color: #fe6400e8 !important;
            }

            #ui-id-2{
                background: #fff;
                z-index: 99999;
            }


            #ui-id-1{
                z-index: 99999;
                background: #fff;
                width: 29vmax !important;
            }

            .listproduct .item-img, .listproduct .item .item-img img{
                margin-top: 0;
            }

            
        </style>

        <?php 
            $active_snow = 0
        ?>

        @if($active_snow = 1)

        <!-- hiệu ứng tuyết rơi -->

        <!-- <style>
            #snowflakeContainer{position:absolute;left:0px;top:0px;}
            .snowflake{padding-left:15px;font-size:14px;line-height:24px;position:fixed;color:#ebebeb;user-select:none;z-index:1000;-moz-user-select:none;-ms-user-select:none;-khtml-user-select:none;-webkit-user-select:none;-webkit-touch-callout:none;}
            .snowflake:hover {cursor:default}
        </style>
        <div id='snowflakeContainer'>
        <p class='snowflake'>❄</p>
        </div>
        <script style='text/javascript'>
            //<![CDATA[
            var requestAnimationFrame=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame;var transforms=["transform","msTransform","webkitTransform","mozTransform","oTransform"];var transformProperty=getSupportedPropertyName(transforms);var snowflakes=[];var browserWidth;var browserHeight;var numberOfSnowflakes=30;var resetPosition=false;function setup(){window.addEventListener("DOMContentLoaded",generateSnowflakes,false);window.addEventListener("resize",setResetFlag,false)}setup();function getSupportedPropertyName(b){for(var a=0;a<b.length;a++){if(typeof document.body.style[b[a]]!="undefined"){return b[a]}}return null}function Snowflake(b,a,d,e,c){this.element=b;this.radius=a;this.speed=d;this.xPos=e;this.yPos=c;this.counter=0;this.sign=Math.random()<0.5?1:-1;this.element.style.opacity=0.5+Math.random();this.element.style.fontSize=4+Math.random()*30+"px"}Snowflake.prototype.update=function(){this.counter+=this.speed/5000;this.xPos+=this.sign*this.speed*Math.cos(this.counter)/40;this.yPos+=Math.sin(this.counter)/40+this.speed/30;setTranslate3DTransform(this.element,Math.round(this.xPos),Math.round(this.yPos));if(this.yPos>browserHeight){this.yPos=-50}};function setTranslate3DTransform(a,c,b){var d="translate3d("+c+"px, "+b+"px, 0)";a.style[transformProperty]=d}function generateSnowflakes(){var b=document.querySelector(".snowflake");var h=b.parentNode;browserWidth=document.documentElement.clientWidth;browserHeight=document.documentElement.clientHeight;for(var d=0;d<numberOfSnowflakes;d++){var j=b.cloneNode(true);h.appendChild(j);var e=getPosition(50,browserWidth);var a=getPosition(50,browserHeight);var c=5+Math.random()*40;var g=4+Math.random()*10;var f=new Snowflake(j,g,c,e,a);snowflakes.push(f)}h.removeChild(b);moveSnowflakes()}function moveSnowflakes(){for(var b=0;b<snowflakes.length;b++){var a=snowflakes[b];a.update()}if(resetPosition){browserWidth=document.documentElement.clientWidth;browserHeight=document.documentElement.clientHeight;for(var b=0;b<snowflakes.length;b++){var a=snowflakes[b];a.xPos=getPosition(50,browserWidth);a.yPos=getPosition(50,browserHeight)}resetPosition=false}requestAnimationFrame(moveSnowflakes)}function getPosition(b,a){return Math.round(-1*b+Math.random()*(a+2*b))}function setResetFlag(a){resetPosition=true};
            //]]>
        </script> -->
 
        <!-- end hiệu ứng -->

        @endif

        <?php  
            
            if(!Cache::has('backgrounds1')) {

                $backgrounds = App\Models\background::find(1); 

                Cache::put('backgrounds1',$backgrounds,10000);

            }

            $background = Cache::get('backgrounds1');
        ?> 
        @if(!empty($background->background_image))
        <style type="text/css">
            

             body.theme-lunar-new-year {
                background-image: url('{{ asset($background->background_image)  }}');
            }    
             
        </style>
        @else

        <style type="text/css">
            

             body.theme-lunar-new-year {
                background:'#'{{ asset($background->background_image)  }};
            }  
            .danh-muc1, .danh-muc2{
                left: 0px !important;
            } 

            .hotlines{
                position:fixed; 
                z-index:9999
            }   

            #ui-id-1{
                font-size: 14px;
            }

            .submenu strong{
                font-size: 14px;
            } 

            .submenu h3{
                font-size: 14px;
            } 

             @media only screen and (min-width: 768px) {
                .hotlines{
                   
                    bottom:93px; 
                    right:8px; 
                    display: none;   
                }

                .theme-xmas.header:after {
                content: '';
                background-size: 90%;
                width: 12%;
                height: 18%;
                position: absolute;
                z-index: 2;
                background-image:  url('{{ asset("images/template/header-rope-right-23.png")  }}');
                top: 0;
                right: 0;
                background-repeat: no-repeat;
            }

            .theme-xmas.header:before {
                content: '';
                background-size: 90%;
                width: 12%;
                height: 18%;
                position: absolute;
                z-index: 2;
                background-image: url('{{ asset("images/template/header-rope-left-23.png")  }}');
                left: 0;
                top: 0;
                background-repeat: no-repeat;
            }   
            .header-pc{
                height: 80px;
            } 


                .zalo-chat-widget{  
                    bottom: 28% !important;  
                    right: 1%!important;  
                }  

                .hotline{
                    width: 237px;
                }

                .hotline p{

                    margin-bottom: 1em;
                }
                .global-compare-group{
                    height: 300px;
                }
                .list-menu{
                    margin-bottom: 0;
                }

                .submenu {

                    left:240px !important;

               }

               .hotline{
                    position: absolute;
                    
               }

                a.hotline-fix {
                    background: #FCEF41;
                    border-radius: 7px 0px 0px 0px;
                    margin-bottom: 5px;
                    font-size: 15px;
                }

                .hotline.position-fixed {
                    bottom: 21%;
                    right: 0;
                    padding: 0.5rem 0.3rem 0.5rem 0.8rem;
                    border-radius: 13px 0px 0px 13px;
                    background-color: transparent;
                    z-index: 99;
                    transition: 0.3s;
                }

                .hotline.position-fixed a i {
                    width: 35px;
                    height: 35px;
                    border: 1px solid #002069;
                    border-radius: 50%;
                    text-align: center;
                    line-height: 35px;
                    margin-right: 10px;
                    color: #002069;
                }

                .text-white {
                    color: #fff!important;
                }

               /* .zalo-mobile{
                    display: none;
                }*/

              /*  .zalo-icon{
                    left: 73%;
                }*/
            }

            @media only screen and (max-width: 768px) {
                .menus-banner .strongtitle {
                    font-size: 12px !important;
                    -webkit-line-clamp: 1;
                      -webkit-box-orient: vertical;
                      overflow: hidden;
                      display: -webkit-box;
                }

                 .nk-header #nk-searchs {
                    border-radius: .9em;
                    background-color: #FFFFFF;
                    height: 40px;
                    position: relative;
                   /* width: 30%;*/
                    float: left;
                }

                .re-call, .help{
                    position: fixed;
                    z-index: 9999;
                } 

                .re-call{
                    right: 0;
                    bottom: 65px
                }

                 .help{
                    right: 0;
                    bottom: 10px
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

                .search-results{
                    background: #fff;
                }



                .ui-widget-content p{

                    font-size: 15px;
                }

                .zalo-chat-widget{  
                    bottom: 10% !important;  
                    left: 10px!important;  
                }  


                .suggest_link{
                    font-size: 14px;
                }  

                .p_hotline_item span {
                    width: 100%;
                    text-align: center;
                }
                .hotlines{
                    bottom:120px; 
                    right:0; 
                }  
                #myBtn-top {
                   /* bottom: 28px;
                    right: 100px*/
                    display: none !important;
                }  
                  #skw{
                    border: 1px solid #D92548;
                  }

                .btn-remove-all-compare{
                    display: none !important;

                }

                .icons-mobile-bar button {
                    padding: 10px;
                    border: 1px solid #E9162E;
                }

               .fa-bars:before {
                    color: #E9162E;
                }
                .btn-compare{
                    top: 0px !important;
                    left: 112px !important;
                    line-height: 28px !important;
                }
                .compare-add-mobile{
                    width: 100% !important;
                }

            }
        </style>
        @endif

        <style type="text/css">
            
            .loader {
              height: 5rem;
              width: 5rem;
              border-radius: 50%;
              border: 10px solid orange;
              border-top-color: #002147;
              box-sizing: border-box;
              background: transparent;
              animation: loading 1s linear infinite;
              position: absolute;
                top: 50%;
                left: 50%;
                z-index: 999;

            }

            .tin-km{
                padding: 5px 8px;
            }

            .deal-icon{
                color: #fe0000 !important;
            }

            #ui-id-2{
                width: 100%!important;
                left: 0 !important;
                padding: 5px;
            }

            .global-compare-group {
                background: #fff;
                position: fixed;
                bottom: 0;
                left: 30%;
                width: 800px;
                -webkit-box-shadow: 3px -2px 11px 1px rgb(0 0 0 / 25%);
                box-shadow: 3px -2px 11px 1px rgb(0 0 0 / 25%);
                z-index: 9999;
                display: none;
            }

            .global-compare-group .pro-compare-holder {
                padding-right: 15px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }

            .global-compare-group .title {
                background: #546ce8;
                padding: 8px 12px;
            }

            .global-compare-group .compare-pro-holder {
                width: calc(100% - 200px);
            }

            .global-compare-group .btn-compare {
                width: 145px;
                line-height: 40px;
                margin-left: 55px;
                background: #546ce8;
                color: #fff;
                font-weight: 600;
                font-size: 18px;
                border-radius: 4px;
                text-align: center;
                display: block;
            }
            .text-22 p{
                margin-bottom: 0;
            }
            .submenu strong{
                margin-bottom: 5px;
            }

        </style>

        <style type="text/css">
            

            .border-rd{
                border-radius: 4px;
                border: 1px solid #fff;
                padding: 9px;
            }

            .pine-tree img {
                width: 10%;
                position: fixed;
            }

            .pine-tree-right {
                left: 90vw;
/*                transform: rotate(335deg);*/
            }

            .pine-tree-left, .pine-tree-right {
                bottom: 0;
                cursor: pointer;
                z-index: 1;
/*                animation: lighting 1s infinite;*/
            }

            .pine-tree-left, .pine-tree-right {
                bottom: 0px;
                cursor: pointer;
                z-index: 1;
/*                animation: 1s ease 0s infinite normal none running lighting;*/
            }

            @keyframes lighting {
              0% {
                content: url({{ asset('public/background/Asset3@3x.png')  }}));
              }
              to {
                content: url({{ asset('public/background/Asset5@3x.png')  }});
              }
            }

            .pine-tree .tuyet-left {
                bottom: 0;
                left: 1vw;
                cursor: pointer;
                z-index: 999;
                width: 9vw;
            }

            .pine-tree img {
                width: 10%;
                position: fixed;
            }

            .pine-tree .santa-left {
                bottom: 0;
                left: 0;
                cursor: pointer;
                z-index: 2;
                width: 3vw;
            }

            .pine-tree .santa-right {
                bottom: 0;
                right: 0;
                cursor: pointer;
                z-index: 2;
/*                width: 3vw;*/
            }

            @if(!empty(Auth::user()->id) && Auth::user()->id==1)

                .phpdebugbar{
                    display:block;
                }
            @else 
            
               .phpdebugbar{
                    display:none;
                }
            @endif

        </style>
        @stack('style')


        
    </head>
    <body class="theme-lunar-new-year d">
        <div class="banner-media desktop">
            <div class="" data-size="1">
                <div class="item" data-background-color="#CF1F2F" data-order="1">

                    <?php 

                        if(!Cache::has('banners12')) {

                            $banners = App\Models\banners::where('option', 1)->get()->last();

                            Cache::put('banners12',$banners,10000);
                        }


                        $banner = Cache::get('banners12');
                    ?>

                    @if(!empty($banner)&& $banner->active ==1)
                    <a aria-label="slide" data-cate="0" data-place="1295" href="#"><img  src="{{ asset($banner->image) }}" alt="BF"  ></a>
                    @endif
                </div>
            </div>
            
        </div>

       
        <?php  


            $userClient = session()->get('status-login');

            if(!Cache::has('popup1') ){

                $popups = App\Models\popup::find(4);

                Cache::put('popup1', $popups,10000);
            }


            $popup = Cache::get('popup1');
            
        ?>
        <!-- popup quảng cáo  -->

        @if($popup->active==1)

        @if($popup->option ==0)

        <div id="box-promotion" class="box-promotion box-promotion-active">
            <div class="box-promotion-item" style="width: 500px;height: 500px;left: 34%;top: 23%;">
                <div class="box-banner">
                    <a href="{{ $popup->link }}" target="_blank" rel="nofollow"><img src="{{ asset( $popup->image) }}" alt="pop-up"></a>
                </div>
                <a class="box-promotion-close" href="javascript:void(0)" title="Đóng lại">x</a>
            </div>
        </div>
        @else

        @if(!empty($requestcheck)&& \Request::route()->getName() =="homeFe")
        <div id="box-promotion" class="box-promotion box-promotion-active">
            <div class="box-promotion-item" style="width: 500px;height: 500px;left: 34%;top: 23%;">
                <div class="box-banner">
                    <a href="{{ $popup->link }}" target="_blank" rel="nofollow"><img src="{{ asset( $popup->image) }}" alt="pop-up"></a>
                </div>
                <a class="box-promotion-close" href="javascript:void(0)" title="Đóng lại">[x]</a>
            </div>
        </div>

        @endif

        @endif
        
        @endif

     


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
                                                                                                                                                                                                                                        
                            <span class="close_top_banner">✕</span>
                        </div>
                    </div>



                    <!-- header -->
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
                                                                                <div class="search-result" style="display: none;">
                                                                                    <ul class="nk-search-cate">
                                                                                        <li></li>
                                                                                    </ul>
                                                                                    <ul class="nk-search-product-item">
                                                                                        <li></li>
                                                                                    </ul>
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

                         #nk-cart ul{
                            padding: 5px 0 0;
                            width: 57%;
                            position: relative;
                            display: flex;
                        }

                         .flexthis .row-fluid{
                            display: block !important; 
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
                            margin: 5px;
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
                            margin: 0;
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
                        .nk-header{
                            height: 158px !important;
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
                            width: 23%;
                        }

                        .div-header-cart{
                            width: 100%;
                            display: flex;
                        }

                        .d .nk-header #nk-cart{
                            width: 77%;
                        }

                    }

             @media only screen and (min-width: 601px) {
                .mobile{
                    display: none;
                }
             }   
                </style>

                 


            <div class="row-fluid mobile">
                <div class="span16 nk-header">
                    <div class="fluid">
                        <div class="span16 _nk_main">
                            <div class="row-fluid ">

                                <div class="div-header-cart">

                                    <div class="logo-mobile"></div>

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
            <!-- endheader -->


                    @include('frontend.menu_list')

                </div>
            </div>

        @yield('content')


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


        <!-- Modal -->
        <div class="modal fade" id="Modal-register" tabindex="-1" role="dialog" aria-labelledby="Modal-register" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabels">Đăng ký</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" role="form" id="registers-form-submit" action="#">
                            {{ csrf_field() }}
                            <div class="clearfix pt-3"></div>
                            <h4>Tạo tài khoản mới.</h4>
                            <hr>
                            <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                                <ul>
                                    <li style="display:none"></li>
                                </ul>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Email">Địa chỉ email</label>
                                <div class="col-md-8"><input class="form-control" type="email" data-val="true" data-val-email="The Địa chỉ email field is not a valid e-mail address." data-val-required="Trường Địa chỉ email là bắt buộc." id="Emails" name="Emails"> <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="FullName">Họ và tên</label>
                                <div class="col-md-8"><input class="form-control" data-val="true" data-val-required="Trường Tên là bắt buộc." id="FullName" name="FullName"> <span class="text-danger field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span></div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="number-phone">Số điện thoại </label>
                                <div class="col-md-8"><input class="form-control" data-val="true" data-val-required="Số điện thoại là bắt buộc" id="number-phone-customer" name="number-phone-register"> <span class="text-danger field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span></div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Password">Mật khẩu</label>
                                <div class="col-md-8"><input class="form-control" type="password"></span></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="ConfirmPassword">Xác nhận mật khẩu</label>
                                <div class="col-md-8"><input class="form-control" type="password"  id="ConfirmPassword" name="ConfirmPassword" autocomplete="on"> <span class="text-danger field-validation-valid"></span></div>
                            </div>

                             
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

       <!--  Endmodal -->

       <!-- Modal -->
        <div class="modal fade" id="Modal-login" tabindex="-1" role="dialog" aria-labelledby="Modal-login" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="login-modals">Đăng nhập</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('login-Fe') }}"  id="login-forms-fe">
                            {{ csrf_field() }}

                            <h2>Đăng nhập</h2>
                            <div class="clearfix pt-3"></div>
                            <h4>Sử dụng tài khoản của bạn để đăng nhập</h4>
                            <hr>
                            <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                                <ul>
                                    <li style="display:none"></li>
                                </ul>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Email">Địa chỉ email</label>
                                <div class="col-md-8"><input class="form-control" type="email"  id="email" name="email"> <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Password">Mật khẩu</label>
                                <div class="col-md-8"><input class="form-control" type="password"  name="password"> <span class="text-danger field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span></div>
                            </div>
                            
                            <div class="form-group row">
                               <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <p><a href="javascript::void(0)" class="register-forms">Đăng ký người dùng mới</a></p>


                            
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

       <!--  Endmodal -->

      

    <div class="max-width">
        <div class="phone_hotline"> <a href="tel:0243.687.9145" title="Bảo Hành: 0243.687.9145" class="p_hotline_item"> <i class="icon_security"></i> <span><strong>Bảo Hành: 0243.687.9145</strong> (8h00 - 17h00)</span> </a> <a href="tel:0247.303.6336" title="Mua hàng: 0247.303.6336" class="p_hotline_item"> <i class="icon_purchase"></i> <span><strong>Mua hàng: 0247.303.6336</strong> (8h00 - 17h00)</span> </a> <a href="tel:0916917949" title="Khiếu nại:0916917949" class="p_hotline_item"> <i class="icon_complain"></i> <span><strong>Khiếu nại: 091.691.7949</strong> (8h00 - 17h00)</span> </a> </div>
    </div>
       

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-footer">
                        <h3 class="title">Thông tin</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="{{ route('details', 'gioi-thieu') }}">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'lien-he') }}">Liên hệ</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'nha-phan-phoi-dien-may-uy-tin-chuyen-nghiep') }}">Dự án bán buôn</a>
                            </li>

                          
                            <li class="mobile">
                                <?php 

                                    $routeUri = Route::getFacadeRoot()->current();
                                ?>
                                @if(!empty($routeUri))
                                <a href="{{ Route::getFacadeRoot()->current()->uri() }}?show=pc_view">Xem bản desktop</a>
                                @endif
                            </li>
                        </ul>
                    </div>

                   
                    <div class="col-md-3 col-footer">
                        <h3 class="title">Hỗ trợ mua hàng</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="{{ route('details','huong-dan-mua-dien-may-tra-gop-online-qua-the-tin-dung-tren-trang-web-dien-may-nguoi-viet') }}">Hướng dẫn trả góp</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'page/cach-thuc-thanh-toan') }}">Cách thức thanh toán</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'bang-gia-vat-tu-lap-dat') }}">Bảng giá vật tư lắp đặt</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col-md-4 col-footer">
                        <h3 class="title">Chính sách</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="/page/chinh-sach-quy-dinh-chung">Chính sách &amp; quy định chung</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'page/chinh-sach-doi-tra-hang') }}">Chính sách đổi trả sản phẩm</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'page/chinh-sach-bao-hanh') }}">Chính sách bảo hành</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'page/chinh-sach-van-chuyen') }}">Chính sách giao hàng</a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-3 col-footer">
                        <form>
                            <input id="email_newsletter" type="text" placeholder="Đăng ký email nhận thông tin khuyến mại">
                            <span id="now_submit">Gửi</span>
                        </form>

                        <h4 style="margin-top: 20px;margin-bottom: 10px;">Kết nối với chúng tôi</h4>
                        <a class="ft-fb" rel="nofollow" href="https://www.facebook.com/dienmaynguoiviet/"><i class="fab fa-facebook-f"></i></a>
                        <a class="ft-yt" rel="nofollow" href="https://www.youtube.com/channel/UCRVWFSZs8k81B61_hwmkMIA"><i class="fab fa-youtube"></i></a>
                        <a rel="nofollow" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=1180"><img style="max-height: 40px" src="{{ asset('images/template/dathongbao.png') }}"></a>
                    </div> -->
                </div>
                <!-- <div class="footer-bottom">
                    <div class="container">
                        <p> <b>© 2018. Công ty TNHH Thương Mại Phú Tiến. Địa chỉ: : Kho Đóng Tàu, Ngõ 683 Đường Nguyễn Khoái, Quận Hoàng
                            Mai, TP HN. GPKD số : 0102011440 do Sở Kế Hoạch và Đầu Tư TP. Hà Nội, cấp ngày 25/02/2004 </b>
                        </p>
                    </div>
                </div> -->
            </div>
        </footer>

        

        <div class="hotlines">   
            <a href="tel:02473036336"><img src="{{ asset('images/template/tongdai02473036336.png') }}" alt="hotline" style="height:55px; z-index: 999;"></a>
              
            <div class="clear"></div>
              
        </div>

        <div class="re-call">   
            <a href="tel:02473036336"><img src="{{ asset('images/template/tongdai02473036336.png') }}" alt="hotline" style="height:55px; z-index: 999;"></a>
              
            <div class="clear"></div>
              
        </div>

        <div class="help">   
            <a href="tel:02473036336"><img src="{{ asset('images/template/tongdai02473036336.png') }}" alt="hotline" style="height:55px; z-index: 999;"></a>
              
            <div class="clear"></div>
              
        </div>



        <div class="global-compare-group">
            <div class="title text-22 text-white d-flex align-items-center justify-content-between font-600">
                <p>SO SÁNH SẢN PHẨM</p>
                <a href="javascript:void(0)" class="close-compare text-white fa fa-times" onclick="compare_close()"></a>
            </div>
            <div class="text-center red mt-2 text-18 font-500" id="js-alert"></div>
            <div class="pro-compare-holder">
                <div class="compare-pro-holder clearfix" id="js-compare-holder">
                   

                </div>
                <div>
                    <a href="javascript:void(0)" class="btn-compare btn-compare" onclick="compare_link()">SO SÁNH</a>
                    <br>
                    <a href="javascript:void(0)" class="btn-compare btn-remove-all-compare" onclick="compare_close()">XÓA TOÀN BỘ </a>
                </div>
                
            </div>
        </div>


       <!--  <button onclick="topFunction()" id="myBtn-top" title="Go to top"><i class="fas fa-angle-up"></i></button> -->
        
        <script>
            window.dataLayer = window.dataLayer || [];
            
            dataLayer.push({ 'pageType':'Home','pagePlatform':'Web','pageStatus':'Kinh doanh'})
            
            
            
        </script>

        <div class="hotline position-fixed">

           
            <a href="tel:02473036336" class="d-flex align-items-center position-relative hotline-fix mb-2">
   
            <i class="fa fa-phone"></i>
            <span><b>024 7303 6336</b> <br> <span>Bấm phím 1</span></span>

           
        </div>

        @if(Session::get('show-pop-up')==='1')

        <!-- new -->

        <div class="news position-fixed icons-shopings hide">   

            <a class="closes" href="javascript:void(0)" onclick="closePopup()"><img src="{{ asset('images/template/close.png') }}" alt="hotline" style="height:55px; z-index: 999;"></a>

            <a href="javascript:void(0)"><img src="{{ asset('images/template/shopping.png') }}" alt="hotline" style="height:55px; z-index: 999;"></a>
              
            <div class="clear"></div>

            <div class="share-button"> <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart cartSP" onclick="addToSuport(2221)">GỌI LẠI CHO TÔI <br>(Tư vấn tận tình)</button> <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart cartSP right-cart" onclick="addToSuport(2221)">TRẢ GÓP QUA THẺ <br></button> </div>
              
        </div>

       @endif

     

       <!--  <div class="zalo-mobile">

            <a href="https://zalo.me/0913011888" target="_blank">
                <div style="position: fixed; bottom: 52px; right: 52px; transform: translate(0px, 0px) !important; z-index: 2147483644; border: none; visibility: visible; right: 0px; width: 60px; height: 60px;" class="zalo-chat-widget"data-welcome-message="Điện Máy Người Việt rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height="">
                    <img src="https://page.widget.zalo.me/static/images/2.0/Logo.svg">
                </div>
            </a>
        </div>     -->
          
            

        
       <!--  <div  class="zalo-chat-widget" data-oaid="1329456933344915716" data-welcome-message="Điện Máy Người Việt rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height=""></div>

         <script src="{{ asset('/js/zalo.js') }}"></script>  -->
       
        
        
 
<!-- Messenger Plugin chat Code -->
   <!--  <div id="fb-root"></div> -->

    <!-- Your Plugin chat code -->
   <!--  <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101251095983613");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script> -->

    <!-- Your SDK code -->
   <!--  <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> -->

  

     <!--Start of Tawk.to Script-->
    <!-- <script src="{{asset('js/tawto.js')}}"></script> -->
   
    <!--End of Tawk.to Script-->


<?php 
    $ismobile = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

    ?>
    <link rel="stylesheet" href="{{asset('css/lib/owl.carousel.min.css')}}">

 <script src="{{ asset('js/layout1.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('css/lib/owl.theme.default.min.css')}}">
    <script type="text/javascript" src="{{asset('js/lib/owl.carousel.min.js')}}"></script>

  
    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>

    <script src="{{asset('js/lib/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/lib/lazyload.js') }}"></script>
    <script src="{{ asset('js/lib/sweetalert2.all.min.js') }}"></script>


    @stack('script')

  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  <script>


    function showPopup() {

        $('.icons-shopings').removeClass('hide')
      
    }
    setTimeout(showPopup, 3000);

    function closePopup() {

        $('.icons-shopings').addClass('hide');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('removePopup') }}",
           
            success: function(result){
              
               console.log(result);
                
            }
        });
    }

    function compare_close() {

        ar_product = [];

        $('.global-compare-group').hide();

        $('.compare-show .fa-solid').removeClass('fa-check')

        $('.compare-show .fa-solid').addClass('fa-plus');

        $('.compare-show').css('color','#59A0DA');
    }


    $('.loader').hide();




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

    $(function() {
        $("#skw").autocomplete({
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
                        _token: "{{ csrf_token() }}",
                        product:$('#skw').val()
                    },
                    dataType: "json",
                    success: function (data) {
                        var items = data;

                        response(items);


                        $('#ui-id-2').html();

                        $('#ui-id-2').html(data);
                    
                    }
                });
            },
            html:true,
        });
    }) 

   
  
  </script>

    <script type="text/javascript">
       
         function topFunction() {
  
           $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
          
        }

    </script>

    @if($popup->option ==0)
    <script type="text/javascript">
        
        // turn off popup
        
        lazyload();

        $('.box-promotion-close').bind("click", function(){

            if ( typeof(Storage) !== "undefined") {
               
                sessionStorage.setItem('popup','1');
               
               
            } else {
                alert('Trình duyệt của bạn đã quá cũ. Hãy nâng cấp trình duyệt ngay!');
            }
            $('.box-promotion-active').hide();

        });


        if(sessionStorage.getItem('popup')){
             $('.box-promotion-active').hide();

        }

        
    </script>

    @else

    <script type="text/javascript">

    $('.box-promotion-close').bind("click", function(){

           
            $('.box-promotion-active').hide();

    });


    </script>

    @endif

    <script>

    
        $('.register-forms').click(function(){
            $("#Modal-login").modal("hide");
            $("#Modal-register").modal("show");
        })

        $('.logins-modal').click(function(){
             $("#Modal-login").modal("show");


        })

        $('.register-form').click(function(){
             $("#Modal-register").modal("show");


        })
       


        // hover menu

        $(".child").mouseenter(function(){
            const child = $( this ).attr('data-id');

            $(this).css('position','relative');

           
            $('.'+child).show();
        }).mouseleave(function(){
            
            $('.navmwg').hide();
        });

        
        
       
        $('#now_submit').click(function() {
            const value = $('#email_newsletter').val();
            if(value==''){
                alert('bạn chưa nhập thông tin email');
            }
            else{
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value))
                {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                
                    $.ajax({
                       
                        type: 'POST',
                        url: "{{ route('getemail') }}",
                        data: {
                            email: $('#email_newsletter').val(),
                           
                               
                        },
                        success: function(result){
                            alert(result);
                        }
                    });
                    
                }
                else{
                    alert('email không đúng đinh dạng');
                }
            }
        })
        $(window).resize(function(){
            if($(window).width()<768){

                $('.bar-top-lefts').hide();
            }
         
        });


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

        // check sub mit

        $( "#form-sub" ).submit(function( event ) {

          
            const numberProduct =  parseInt($('#number-product-cart').text()) ;

            if($('#ship_to_province').val()==0){

                alert('vui lòng lựa chọn thành phố');
                event.preventDefault();   
            }
            else if($('#buyer_tel').val().length<10){
                alert('vui kiểm tra lại trường số điện thoai');
                event.preventDefault();  
            }
            else if($('#buyer_address').val().length==0){
                alert('vui kiểm tra lại trường địa chỉ');
                event.preventDefault(); 
            }

            else{
                if(numberProduct<=0){
                    alert('không thể mua sản phẩm vì trong giỏ hàng ko có sản phẩm')
                    event.preventDefault();
                }
               
                else{
                    var click = 0;
                    click++;

                    $('.order1').remove();
                    $('#form-sub .btn-secondary').remove();

                    $('#exampleModal .close').hide();
                    
                    $('#exampleModal .modal-footer').append('<div  class="btn btn-primary">Đang xử lý đơn hàng</div>')
                    $('.loader').show();
                    return;
                    
                }
            }

            
        });


       

        $('.menu-list .fa-bars').bind("click", function(){
            if($('.nav-list').is(":visible")){

                $('.nav-list').hide();
            }
            else{
                $('.nav-list').show();
            }

        });

        $(".st_opt").bind("click", function(){
            $('.st_opt').removeClass('st_opt_active');

            $(this).addClass('st_opt_active');

            let sex = $(this).attr('data-value');

            $('#sex').val(sex);

        });


        $(".menu-list").bind("click", function(){
            if($(".bar-top-lefts").is(":hidden")){
                $(".bar-top-lefts").show()
            }
            else{
                $(".bar-top-lefts").hide();
            }
        }); 


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

                            alert(1);

                            $('#ui-id-1').html();

                            $('#ui-id-1').html(data);
                        
                        }
                    });
                },

                
                html:true,
            });
         });    

        $(document).ready(function() {
            jQuery.validator.addMethod("phonenu", function (value, element) {
                if ( /^\d{3}-?\d{3}-?\d{4}$/g.test(value)) {
                    return true;
                } else {
                    return false;
                };
            }, "Invalid phone number");

            

            $("#registers-form-submit").validate({
                rules: {
                   
                    "FullName": {
                        required: true,
                        maxlength:150
                         
                    },

                    "Emails": {
                        required: true,
                        email: true,
                        
                    },

                    "number-phone-register": {
                        required: true,
                         phonenu: true,
                        
                    },

                   

                    "Passwords":{
                        required:true,
                    },
                    "ConfirmPassword":{
                        required:true,
                        equalTo: "#Passwords"
                    }

                   
                },

                messages: {
                    "FullName": {
                        required: "Bắt buộc nhập Họ và tên",
                        maxlength: "Hãy nhập tối đa 150 ký tự"
                    },
                   
                    "Emails":{
                        email: "Email không đúng định dạng",
                        required: "Bắt buộc nhập Email",
                    },

                    "Passwords":{
                        required:"Bắt buộc nhập Password",
                    },
                    "ConfirmPassword":{
                        required:"Bắt buộc nhập xác nhận Password",
                        equalTo:'Xác nhận Password phải giống với Password'
                    }
                   
                }
               
            }); 

             $("#login-forms-fe").validate({
                rules: {
                   
                   

                    "email": {
                        required: true,
                        email: true,
                        
                    },

                    "password":{
                        required:true,
                    },
                   

                   
                },

                messages: {
                    
                    "email":{
                        email: "Email không đúng định dạng",
                        required: "Bắt buộc nhập Email",
                    },

                    "password":{
                        required:"Bắt buộc nhập Password",
                    },
                  
                   
                }
               
            }); 


            $('#registers-form-submit').submit(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('register-client-fe') }}",
                    data: {
                        fullname: $('#FullName').val(),
                        password: $('#Passwords').val(),
                        email: $('#Emails').val(),
                        phone: $('#number-phone-customer').val(),
                        
                    },
                   
                    success: function(result){
                        $("#Modal-register").modal("hide");
                        alert(result);

                        
                    }
                });
            })    

            

            $("#form-sub").validate({
                rules: {
                    "name": {
                        required: true,
                        maxlength: 15
                    },
                    "phone_number": {
                        required: true,
                         phonenu: true,
                    },

                    "mail": {
                        email: true,
                        
                    },

                    "address":{
                        required:true,
                    },
                    "province":{
                        required:true,
                    }

                   
                },
                messages: {
                    "name": {
                        required: "Bắt buộc nhập Họ và tên",
                        maxlength: "Hãy nhập tối đa 15 ký tự"
                    },
                    "phone_number": {
                        required: "Bắt buộc nhập số điện thoại",
                       
                    },
                    "mail":{
                        email: "Email không đúng định dạng",
                    },

                    "address":{
                        required:"Bắt buộc nhập thông tin địa chỉ",
                    },
                    "province":{
                        required:"Bắt buộc chọn thành phố",
                    }
                   
                }
            });
        });

        
        $( ".fa-user" ).click(function(){
            if($('.client-login').is(':visible')){
                 $('.client-login').hide();
            }
            else{
                $('.client-login').show();
            }
        }); 

        $(".btn-closemenu").click(function(){

                $('.show-menu').removeClass('active');
            });
 

        $(".show-menu-mobile").click(function(){

        
            $('.show-menu').addClass('active');

        });  
    
    </script>

    </body>
</html>
