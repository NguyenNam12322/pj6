@extends('frontend.layouts.appmb')
@section('content') 
@push('style')

   

    <style>

    .productSpecification_table .popup{
        display: block !important;
    }   

    b, strong{
        font-weight: 700 !important;
    }

    h2, h3{
        font-size: initial!important;
    }

    .redirectCart {
        text-transform: uppercase;
    }    

    .pdetail-status{
        overflow: hidden;
    }

    
     @media (min-width: 1200px) {
        .container {
            max-width: 1270px !important;
        }


    }

     @media only screen and (max-width: 600px) {

        .nk-menu{
            display: none;
        }

        .title{
            height: 58px;
        }

        .box01 .owl-carousel .owl-item img:not(.monopoly-label) {
            height: 220px !important;

        }  

        .post-sidebar-img img{
            width: 100%;
        }  

        .nhapnhay {
            background: #fddd39;
            font-size: 18px;
            font-weight: bold;
            -webkit-animation: my 1700ms infinite;
            -moz-animation: my 1700ms infinite;
            -o-animation: my 1700ms infinite;
            animation: my 1700ms infinite;
        }

        .pdetail-status{
            margin-top:20px;
        }
    }
    @media only screen and (min-width: 601px) {
        .productSpecification_table{
            display: none;
        }

        .cartSPs{
            background: orange;
        }

        .btn-add-carts{
            margin: 0 !important;
            width: 100% !important;
        }

        .list_specifications{
            display: none;
        }
        .box01 img{
            width: 100%;
            height: 300px !important;
        }

        .box-info-name h1{
            width: 100%;
        }

      /*  .box-info-name{
            height: 20px !important;
        }*/

        .box-compare{
            height: 30px !imporant;
        }
        hr{
            margin: 0;
        }

        .crazy-deal-details pc{
            height: 38px;
        }

        .post-sidebar-img img{
            width: 100%;
            
        }

        .pdetail-installment{
            height: 150px !important;
        }
       

        .box01, .box01__show{
            margin-bottom: 0 !important;
        }
        /*h3 a{
            font-size: 16px !important;
        }*/
    }   

    }
   

    
    </style>   

    <style type="text/css">
                
        .box_pro-benefit{
            width: 100%;
        }
        .app img{
            width: 100%;
        }

        .related__ttl {
            color: #1053AF;
        }
    </style>         

    <?php


        
        $thuonghieu = [1 => 5, 3 => 35, 2 =>56, 4 =>76, 6=>115, 7=>129];

        $namecate = Cache::rememberForever('namecate'.$data_cate, function() use($data_cate){

            $namecate = App\Models\groupProduct::find($data_cate)??'';

            return $namecate;
        });   



        if(!empty($thuonghieu[$data_cate])){

            $thuonghieuCate = $thuonghieu[$data_cate];

            $ar_groups_info = Cache::rememberForever('ar_groups_info_'.$data->id, function() use($thuonghieuCate, $data_cate, $data){

                $namecate = Cache::get('namecate'.$data_cate);

                $dataThuonghieu = App\Models\groupProduct::where('parent_id', $thuonghieuCate)->get();

                $ar_groups_info = [];

                foreach ($dataThuonghieu as $value) {

                    if (strpos(strtolower($data->Name), strtolower(str_replace($namecate->name, '', $value->name)))>-1) {

                        array_push($ar_groups_info, ['name'=>  $value->name, 'link'=>$value->link]);
                    }
                    
                }
                return $ar_groups_info;
            });

        }

        $checkDaikin = false;

        // hạ phần check Daikin
        
        // if(!empty($thuonghieu[$data_cate])&& !empty($ar_groups_info)){

            
        //     if(trim(str_replace($namecate->name, '',  $ar_groups_info[0]['name']))==='Daikin'){
        //         $checkDaikin = true;

        //     }

        // }   

        $checkSharp = strpos($data->Name, 'Sharp');

        $browserAsString = !empty($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';

        $browserIsMobileSafari = false;

        if (strstr($browserAsString, " AppleWebKit/") && strstr($browserAsString, " Mobile/"))
        {
            $browserIsMobileSafari = true;
        }
               
    
    ?>

    <?php
    if($data->Quantily==0||$data['Price']==0){
        $status ='Đang cập nhật giá';
    
    }
    elseif($data->Quantily<=-1){
        $status ='Ngừng kinh doanh';
    }
    else{
        $status = 'CÒN HÀNG';
    }

    ?>
   

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/application.css') }}"> -->


    @if($browserIsMobileSafari===true)

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/css/jquery.fancybox.min.css" media="print">
    @else
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" media="print">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/stylespr.css') }}" media="print"> -->
    @endif
    
    <style type="text/css">
        .copy-button{
            position: absolute;

            top: 0;
            right: 0;
        }
        .img-main .saker{
            max-width: 100px;
        }

        .sakers{
            position: absolute;
            top:20px;

            left: 50px;
        }

        .monopoly .ttl, .box_pro-images .monopoly h3 {
            background-color: transparent;
            border: none;
            padding: 15px 0 0;
            text-align: left;
            display: block;
            font-weight: 700;
        }

        .monopoly_item ul li {
            width: 49%;
            padding: 11px 0;
        }

        .price{
            color:#D82A20 !important
        }

        .monopoly_item ul {
            display: flex;
            flex-wrap: wrap;
        }

        .monopoly_item ul li .icon_genuine {
            background-position: 1.2% 60%;
        }

        .monopoly_item ul li {
            list-style: none;
            font-family: Arial, Tahoma, sans-serif;
            font-size: 13px;
            font-weight: 500;
            padding: 6px 0;
            color: #333;
            line-height: 25px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }

         @media only screen and (max-width: 767px) {

            .monopoly_item ul li .icon_change, .monopoly_item ul li .icon_genuine {
                width: 30px;
                height: 25px;
                display: inline-block;
                vertical-align: middle;
                background-image: url(//cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/FE/img/detail-product/icon_detail-2.png);
                margin-right: 6px;
                background-size: 330px 330px;
            }

            .share-button{
                width: 100%;
                display: flex;
            }

            .share-button .redirectCart{
                width: 49%;
                border: 0;
            } 

            .share-button .right-cart{
                margin-left: 10px;
                background: #ffde00;
                color: #000;
                border: 0;
            }

            .monopoly_item ul li .icon_refund {
                width: 30px;
                height: 25px;
                display: inline-block;
                vertical-align: middle;
                background-image: url(//cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/FE/img/detail-product/icon_detail-2.png);
                background-position: 22% 60.4%;
                margin-right: 4px;
                background-size: 330px 330px;
            }
            .monopoly_item ul li .icon_delivery, .monopoly_item ul li .icon_guarantee_mb {
                width: 30px;
                height: 25px;
                display: inline-block;
                vertical-align: middle;
                background-image: url(//cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/FE/img/detail-product/icon_detail-2.png);
                margin-right: 6px;
                background-size: 330px 330px;
            }
            .pdetail-info p{
                text-align: left !important;
            }

            .monopoly_item ul li .icon_guarantee_mb {
                background-position: 33% 60.4%;
            }

            .monopoly_item ul li .icon_change {
                background-position: 11.6% 60.4%;
            }

            .monopoly_item ul li .icon_delivery {
                background-position: 43% 60.4%;
            }

            .monopoly_item ul {
                display: block;
                flex-wrap: wrap;
            }

            .monopoly_item ul li {
                width: 100%;
                padding: 11px 0;
            }

            .option-price-mobile select{
                width: 55%;
            } 

            .option-price-mobile{
                text-align: right;
            }
           /* .pdetail-price {
                height: 169px !important;
            }   */

            .pdetail-price-box{
                height: auto !important;
            } 

            .box-select-price{
                height: 79px;
                margin-left: 96px;
            }
            .pdetail-info, .pdetail-stockavailable{
                text-align: left;
                display: flex;
            }

            .p1{
                margin-right: 15px;
            }
            .pdetail-price-box{
                text-align: center !important;
            }

            .box_pro-info .discount {
                height: auto;
                margin-top: 5px;
            }

            .discount .installment {
                font-family: Arial, Tahoma, sans-serif;
                font-size: 12px;
                color: #000;
                background: #f1f1f1;
                border-radius: 3px;
                padding: 2px 7px;
                width: 25%;
                margin-top: 15px;
            }
       
        }

        @media only screen and (min-width: 768px) {
            .copy-button{

                display: none;
            }    

            .option-price{
                height: 30px;
                width: 40%;
            }

            .option-price select{
                height: 30px;
            }

            .show-price-desktop{
                height: 30px !important;
            }

            .theme-xmas.header:before, .theme-xmas.header:after{
                height: 90% !important;
            }


        }    

        .post-sidebar-list {
            margin: 16px 0 0;
            padding: 0;
            list-style: none;
        }

        .post-sidebar-item {
            position: relative;
            padding: 0 0 0 102px;
            margin: 16px 0 0;
            min-height: 65px;
        }

        .post-sidebar-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 89px;
/*            height: 65px;*/
            overflow: hidden;
            display: block;
        }

        .post-sidebar-title {
            font-size: 16px;
            line-height: 19px;
            font-weight: 700;
            margin: 0;
            color: #333;
        }

        .price_market span {
            text-decoration: line-through;
        }
    </style>


@endpush

<?php 
    if(!Cache::has('saker') ){

        $saker = App\Models\maker::get();

       Cache::forever('saker',$saker);

    } 

    $sakers = Cache::get('saker');

    $logoSaker = $sakers->filter(function($item) use($data){
        return $item->id == $data->Maker;
    })->first();

    if(!empty(Cache::get('deals'))){
        $check_deal =  Cache::get('deals')->where('product_id', $data->id);
    }
    else{
        $check_deal = DB::table('deal')->where('product_id', $data->id)->get();
    }

    

    $now = \Carbon\Carbon::now();
   
    if(!empty($check_deal)){

        $check_deal =  $check_deal->all();

        if(!empty($check_deal)){
            $check_deal = reset($check_deal);
        }

        $deal_check_add = false;
        
        if(!empty($check_deal) && !empty($check_deal->deal_price) &&$check_deal->active==1){
             
            $timeDeal_star = $check_deal->start;
            $timeDeal_star =  \Carbon\Carbon::create($timeDeal_star);
            $timeDeal_end = $check_deal->end;
            $timeDeal_end =  \Carbon\Carbon::create($timeDeal_end);
            $timestamp = $now->diffInSeconds($timeDeal_end);


            if($now->between($check_deal->start, $check_deal->end)){
                $deal_check_add = true;
               
                $price_old = $data->Price;
                $text = '<b>MUA ONLINE GIÁ SỐC: </b>';
                $data->Price = $check_deal->deal_price;
                $percent = ceil((int)$price_old/$data->Price);
            }
        }
        
    }

    // check flashdeal 

        
    if(!cache::has('date_flash_deal')){

        $date_string_flash_deal = DB::table('date_flash_deal')->where('id', 1)->first()->date;


        cache::put('date_flash_deal', $date_string_flash_deal, 1000);
    } 

    $date_string_flash_deal = cache::get('date_flash_deal');

   


    $date_flashdeal = \Carbon\Carbon::create($date_string_flash_deal);

    if($date_flashdeal->isToday()){

        // kiểm tra sản phẩm có trong flashdeal k

        $check_Pd_Flash_deal = App\Models\flashdeal::select('flash_deal_time_id')->where('product_id', $data->id)->first();


        if(!empty($check_Pd_Flash_deal)){

            $key_check_between =  $check_Pd_Flash_deal->flash_deal_time_id;
            $add_date = $date_string_flash_deal;
            $time1_start = \Carbon\Carbon::createFromDate($add_date.', 9:00');
            $time1 = \Carbon\Carbon::createFromDate($add_date.', 12:00');
            $time2_start = \Carbon\Carbon::createFromDate($add_date.', 12:00');
            $time2 = \Carbon\Carbon::createFromDate($add_date.', 14:00');
            $time3_start = \Carbon\Carbon::createFromDate($add_date.', 14:00');
            $time3 = \Carbon\Carbon::createFromDate($add_date.', 17:00');
            $time4_start = \Carbon\Carbon::createFromDate($add_date.', 17:00');
            $time4 = \Carbon\Carbon::createFromDate($add_date.', 22:00');

            $define = [['start'=>'9h', 'endTime'=>$time1, 'startTime'=>$time1_start], ['start'=>'12h', 'endTime'=>$time2, 'startTime'=>$time2_start], ['start'=>'14h', 'endTime'=>$time3, 'startTime'=>$time3_start], ['start'=>'17h', 'endTime'=>$time4, 'startTime'=>$time4_start]];

            foreach($define as $key => $value)

            if($now->between($value['startTime'], $value['endTime'])){

                $groups_deal = $key;

                if($groups_deal === $key_check_between){

                    $key_check_betweens = true;
                }
              
                // kiểm tra sản phẩm có ở trong khung giờ flashdeal không?

                $groups_deal = $groups_deal+1;

                $flashDeal = App\Models\flashdeal::where('product_id', $data->id)->where('flash_deal_time_id', $groups_deal)->where('active',1)->get()->last();

                if(!empty($flashDeal)){
                    
                    $deal_check_add = true;
                    $price_old = $data->Price;
                    $text = '<b>MUA ONLINE GIÁ SỐC: </b>';
                    $data->Price =  $flashDeal->deal_price;
                    $percent = ceil((int)$price_old/$data->Price);
                    $timestamp = $now->diffInSeconds($value['endTime']);

                }

            }


            if(empty($key_check_betweens)&& $key_check_between>0){

               
                if($now < $define[$key_check_between-1]['startTime']){
                    $timestamp_check = $now->diffInSeconds($define[$key_check_between-1]['startTime']);

                }

            }

          
        }

       
    }
    // end check flashdeal


    if(!Cache::has('groupsProductDetails') ){

        $groupProducts = App\Models\groupProduct::select('name', 'link', 'product_id','id')->where('level', 0)->get();

        Cache::put('groupsProductDetails', $groupProducts, 10000);

    }

    $groupProduct = Cache::get('groupsProductDetails');
    

    foreach($groupProduct as $groupProducts ){

        if(!empty(json_decode($groupProducts->product_id))){

            if(in_array($data['id'],json_decode($groupProducts->product_id))){

                $groupName = $groupProducts->name;

                $groupLink = $groupProducts->link;

                $groupProductId =  $groupProducts->id;

                
            }
        }
    }

    
    Cache::forget('gifts_Fe_sss'.$data['id']);
    if(!Cache::has('gifts_Fe_sss'.$data['id'])){

        $gifts = gift($data['id']);

        if(empty($gifts)){

            if(!empty($groupProductId)){
                $gifts = groupGift($groupProductId);
            }   
           
            
            if(empty($gifts)){


                $gifts =[];
            }
        }
        
        Cache::put('gifts_Fe_sss'.$data['id'], $gifts,100);

    }
   
    $gift = Cache::get('gifts_Fe_sss'.$data['id']);

    if(!empty($gift)){
        $gifts = $gift['gifts'];
        $gift = $gift['gift'];

    }


    
    ?>
@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/detailsfe.css') }}">
@endpush


<?php

    $gift_Price = pricesPromotion($data->Price, $data->id);
?>

<!-- <div class="locationbox__overlay"></div>
<div class="locationbox">
    <div class="locationbox__item locationbox__item--right" onclick="OpenLocation()">
        <p>Chọn địa chỉ nhận hàng</p>
        <a class="cls-location" href="javascript:void(0)">Đóng</a>
    </div>
    <div class="locationbox__item" id="lc_title"><i class="icondetail-address-white"></i><span> Vui lòng đợi trong giây lát...</span></div>
    <div class="locationbox__popup" id="lc_pop--choose">
        <div class="locationbox__popup--cnt locationbox__popup--choose">
            <div class="locationbox__popup--chooseDefault">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <b id="h-provincename" style="display:none!important" data-provinceid="3">Hồ Chí Minh</b>
</div> -->

<div class="prod-info txt_555 fix">
    <span class="name-scroll"> {{ $data->Name }} </span>
    <div class="vote" id="vote_avg">
        <div class="fl" style="padding:0 5px 0 0;">
            Model: <span class="value txt_blue">{{ $data->ProductSku }}</span> | 
            Tình trạng: <span class="value txt_blue">{{ @$status }}</span> | 
        </div>
        <a id="btn-vote" class="txt_555 fl" href="javascript:;" onclick="go_comm()"> Đánh giá: </a>
        <div class=" totalRate " id="js-total-rating" style="display: inline-block;"><i class="icons icon-star star"><span></span></i><i class="icons icon-star star"><span></span></i><i class="icons icon-star star"><span></span></i><i class="icons icon-star star"><span></span></i><i class="icons icon-star star"><span></span></i></div>
        (<span class="reviewCount">0</span>)
    </div>
    <div class="prod-info-left fl">          
        <span class="robot txt_green txt_b txt_20">{{  str_replace(',' ,'.', number_format($data->Price))  }} &#x20AB;</span>
    </div>
    <div class="clear space3px"></div>
    <div class="clear space10px"></div>
   
       
    @if(!empty($gift) && $data->Quantily>0)   
    <div class="promo line_h19">
        <div class="txt_b">Khuyến mại: {{ $gifts->type ==1?'Lựa chọn 1 trong 2 sản phẩm sau':'' }}</div>
        <div style="display: flex;">
            @foreach($gift as $values)
            <img src="{{ @asset($values->image) }}" height="30px" width="30px">
            @if($values->id==5)
            <a href=""><p>{{ @$values->name??'' }}</p></a>
            @else
            <p>{{ @$values->name??'' }}</p>
            @endif
            <br>
            @endforeach
        </div>
    </div>

    @endif
   
    <div class="buy-group">
        @if($data->Quantily>0) 
        @if((int)$data->Price>0)
        <div class="clear space10px in">
            <a class="btn-buy txt_center cor5px buy-nows-popup" href="javascript:void(0)">
            <i class="fa fa-shopping-cart"></i> <span class="txt_15" onclick="addToCart({{ $data->id }})">Mua ngay</span>
            </a>

            <a class="btn-buy txt_center cor5px buy-nows-popup but-carsp" href="javascript:void(0)">
            <i class="fa fa-phone"></i> <span class="txt_15" onclick="addToSuport({{ $data->id }})">Gọi lại cho tôi</span>
            </a>
        </div>
        @endif
        @if((int)$data->Price>=3000000)
        <div class="clear space10px credit">
           
            <a class="btn-buy txt_center cor5px"  href="{{ route('details', $data->Link)  }}?show=tra-gop" style="background: #ffde00; border-bottom: 0;">
            <i class="fa fa-shopping-cart"></i> <span class="txt_15" >Trả góp qua thẻ</span>
            </a>

            <a class="btn-buy txt_center cor5px"  href="javascript:void(0)" style="border-bottom: 0;" onclick="addCartFast({{ $data->id }})">
            <i class="fa fa-shopping-cart"></i> <span class="txt_15">THÊM VÀO GIỎ HÀNG</span>
            </a>
        </div>
        @endif

         <br>

        
        @endif

        <div>
            
            <a class="btn-buy txt_center cor5px"  href="javascript:void(0)" style="border-bottom: 0; background: #CCD0D3;
    color: #000; width: calc(100% - 15px); padding: 0;"  data-toggle="modal" data-target="#specifications">
            <i class="icondetail-thongso"></i> <span class="txt_15">Thông số kỹ thuật</span>
            </a>
        </div>

       

        
       
    </div>

    <div class="clear"></div>
    <br>
    <style type="text/css">
        .commitment {
            border: 1px solid #0083d1;
            padding: 10px;
        }
        .commitment h4 {
            font-weight: bold;
            color: #ff9;
            text-transform: uppercase;
            font-size: 16px;
            margin: 0;
            padding: 10px;
            background-color: #fe0000;
            margin: -10px;
            margin-bottom: 0px;
            text-align: center;
        }
       .commitment ul {
            line-height: 3vmin;
        }
        .commitment .support a {
            color: #fe0000;
            font-size: 16px;
            font-weight: bold;
            display: block;
            line-height: 30px;
            width: 100%;
        }

        .commitment h5 {
          /*  font-weight: 500;*/
            font-size: 16px;
            text-transform: uppercase;
            margin: 0;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .commitment{
            width: 100%;
        }
        .commitment ul li::before {
            content: "\f00c";
            font-weight: 900;
            font-family: Font Awesome\ 5 Free;
            font-size: 8px;
            margin-right: 5px;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 100%;
            width: 14px;
            height: 14px;
            display: inline-block;
            background-color: #ff3333;
            line-height: 13px;
            text-align: center;
        }

        /*.pdetail-price{
            height: 69px;
        }*/
        .pdetail-price-box{
            height: 74%;
        }
    </style>

    <div class="prod-info-right fr">

        <div>
            <div class="commitment">
                <div class="support">
                    <h5>Tổng Đài mua hàng</h5>
                        <a href="tel:02473036336">0247.303.6336</a>
                    <h5>Tổng Đài mua hàng( Sau 17h )</h5>
                     <div class="style-number-fone">
                       <a href="tel:0913011888">091.301.1888</a>
                        
                     </div>
                   
                </div>
                <br>
                <div class="support1">
                    <h4>Yên tâm mua sắm</h4>
                    <ul>
                        <li>Bảo hành tại nhà</li>
                        <li>Lắp đặt miễn phí</li>
                  (Trừ điều hòa, bình nước nóng)
                        <li>Thanh toán tại nhà</li>
                        <li>Giao hàng miễn phí 20km</li>
                        <li>Giá cạnh tranh nhất thị trường</li>
                        <li>Đổi mới 100% trong 7 ngày đầu</li>
                            ( Trừ Sanaky, Sony, tivi Samsung chỉ bảo hành tại nhà )
                    </ul>
                </div>
            </div>
      
        <div class="clear"></div>
    </div>
    <!--right-->
    <div class="clear"></div>
    </div>
    <!--//prod-info-left -->

</div>
@push('style')

@endpush



@push('script')

@if($browserIsMobileSafari)
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js"></script>
@else
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endif


<script>

    function formatMoney(number, decPlaces, decSep, thouSep) {
        decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
        decSep = typeof decSep === "undefined" ? "." : decSep;
        thouSep = typeof thouSep === "undefined" ? "," : thouSep;
        var sign = number < 0 ? "-" : "";
        var i = String(parseInt(number = Math.abs(Number(number) || 0).toFixed(decPlaces)));
        var j = (j = i.length) > 3 ? j % 3 : 0;

        return sign +
            (j ? i.substr(0, j) + thouSep : "") +
            i.substr(j).replace(/(\decSep{3})(?=\decSep)/g, "$1" + thouSep) +
            (decPlaces ? decSep + Math.abs(number - i).toFixed(decPlaces).slice(2) : "");
    }


    $('.option-price-mobile').change(function(){

        value = $('#option-price_change_mobile').val();

        ar_val = [];

        ar_val[1] = 0;

        ar_val[2] = 100000;

        ar_val[3] = 150000;

        ar_val[4] = 250000;
     
        const price = {{  $data->Price }};

        new_price   =  parseInt(price) + ar_val[value];

        price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

        $('.show-price-mobile h3').text(price_format.replace('đ', '').trim());



    });


    $('.option-price').change(function(){

        value = $('#option-price_change').val();

        ar_val = [];

        ar_val[1] = 0;

        ar_val[2] = 100000;

        ar_val[3] = 150000;

        ar_val[4] = 250000;
     
        const price = {{  $data->Price }};

        new_price   =  parseInt(price) + ar_val[value];

        price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

      
        $('.show-price-desktop h3').text(price_format.replace('đ', '').trim());

    });



    let ar_product = [];

    function compare_link() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('check-unique-cate') }}",
            data: {
                ar_product_id: JSON.stringify(ar_product),
                  
            },
            success: function(result){
                if(result == 0){

                    alert('có sản phẩm không cùng nhóm, không thể so sánh');
                }
                else{

                   
                    var link = '{{ route("so-sanh") }}?list='+ar_product+'&cate='+result;
        
                    location.href = link;
                }
               
            }
        });         
    }

    $('.scroll-content').click(function(){

        $('html, body').animate({
            scrollTop: $("#contents-scroll").offset().top
        }, 1000);
    })

    function compareShow(id) {
       
        if($(this).find('.fa-solid').hasClass('fa-check')){

            $(this).find('.fa-solid').removeClass('fa-check');

            $(this).find('.fa-solid').addClass('fa-plus');

            $(this).css('color','#59A0DA');

            index = ar_product.indexOf(id);

            if (index !== -1) {
                ar_product.splice(index, 1);
            }
        }
        else{
            $(this).css('color','red');

            $(this).find('.fa-solid').removeClass('fa-plus');

            $(this).find('.fa-solid').addClass('fa-check');

            if(ar_product.length<3){

                ar_product.push(id);
            } 
            else{
                alert('không thể thêm sản phẩm nữa');
            }    
        }

       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('compare-show') }}",
            data: {
                ar_product_id: JSON.stringify(ar_product),
                   
            },
            success: function(result){
               $('#js-compare-holder').html('');
               $('#js-compare-holder').append(result);
            }
        });         
    
        $('.global-compare-group').show();

    }

    

    @if(!empty($gift) && $gifts->type ==1)
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
          } else {
            $box.prop("checked", false);
          }
    });
    @endif
    var gift_check = ''
    @if(!empty($gift) && $data->Quantily>0 && $deal_check_add==false)  
    gift_check  = '{{ $gift[0]->name }}';
    $('#gift_checked').val(gift_check);
    $('input[type="checkbox"]').click(function(){
            if($(this).is(":checked")){
                gift_check = $(this).val();
               
            }

            $('#gift_checked').val(gift_check);
           
        });
    @endif

    $( document ).ready(function() {
    
        $('[data-fancybox]').fancybox({
            clickContent: 'close',
             buttons: ['close']
        });
       
        $('.item-ss').bind('click',function(){
            $('.listcompare-click').show();
        })    
    
        $('.star-click').bind('click',function(){
            id_star = $(this).attr('id');    
            number_star = id_star.substr(5, 6);
            $('#star_number').val(number_star);
            // console.log(number_star);
           
        });
    
        $("#rate-form").validate({
            rules: {
                name: "required",
                content: "required",
                email: {
                    required: true,
                    email: true
                },
               
            },
             messages: {
                name: "vui lòng nhập tên",
                content: "vui lòng nhập đánh giá",
               
                email: {
                    required: "vui lòng nhập địa chỉ email",
                    email: "vui lòng nhập đúng định dạng email"
                },
              
            },
            submitHandler: function(form) {
                
              postComment();
    
            }
           
        }); 
    
    });  
    
    
    function postComment() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('rate-form') }}",
            data: {
                product_id: {{ $data->id }},
                email:$('#email0').val(),
                name:$('#name0').val(),
                content:$('#content0').val(),
                star:$('#star_number').val(),
                   
            },
            success: function(result){
    
                $('.comments-rate').text('Đã gửi bình luận');
                $('.comments-rate').val('Đã gửi bình luận');
    
                $('#email0').val('');
                $('#name0').val('');
                $('#content0').val('');
              
              alert(result);
            }
        });
    
    }  
    
    
    // chức năng sản phẩm đã xem
    
    
    function toUniqueArray(a){
        var newArr = [];
        for (var i = 0; i < a.length; i++) {
            if (newArr.indexOf(a[i]) === -1) {
                newArr.push(a[i]);
            }
        }
      return newArr;
    }
    
    product_id_item_viewer = [];
    
    const item_local_store =  JSON.parse(localStorage.getItem('viewed_product'));
    
    if(item_local_store !=null){
    
        product_id_item_viewer = item_local_store;
    }
    
    product_id_item_viewer.push('{{ $data->id }}');
    
    product_id_item_viewer = toUniqueArray(product_id_item_viewer);

     product_id_item_viewer.slice(0, 6);

    
    localStorage.setItem('viewed_product', JSON.stringify(product_id_item_viewer));
    
    view_product_id = localStorage.getItem('viewed_product');

    if(view_product_id.length>=30){

         localStorage.clear();

    }

    button_buy_height = $('.scroll-box').offset().top;
    view_more_height  = ($('.view-more-related').offset().top)+1600;
 
                
    $(".show-more span").bind("click", function(){
        $('.content').css({'height':'auto', 'overflow':'auto' });
        $(this).hide();
        view_more_height  = $('.view-more-related').offset().top-100;
    });
    
    // $(function(){
    //     $(window).scroll(function(){
    //         const scroll_result = $('.total-imgslider').offset().top;
    //         const scroll_browser = $(this).scrollTop();
    
    //         if(scroll_browser>= scroll_result &&scroll_browser <= view_more_height){
    
    //             $(".prod-info").show();
                
    //         }
    //         else{
    //             $(".prod-info").hide();
    //         }
    
    //     });
    // });
    
</script>
<script>

    price_add_address = 0;
   
    $('.bar-top-left').hide();

    $("img").each(function() {
    
        $(this).attr("data-src",$(this).attr("src"));

        $(this).addClass('lazyload');
        
        
    });


    // copy image to clipbroad

    const copyImage = (imageSrc) => {
        const image = new Image();
        image.src = imageSrc;
        const canvas = document.createElement('canvas');
        canvas.width = image.width;
        canvas.height = image.height;
        canvas.getContext('2d').drawImage(image, 0, 0);
        const dataURI = canvas.toDataURL('image/png').replace('image/png', 'image/octet-stream');
        navigator.clipboard.writeText(dataURI).then(() => {
            alert('Image copied to clipboard successfully.');
        }, () => {
            alert('Failed to copy image to clipboard.');
      });
    }    



    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // $.ajax({
    //     type: 'POST',
    //     url: "{{ route('show-viewed-product') }}",
    //     data: {
    //         product_id: view_product_id
               
    //     },
    //     success: function(result){
    //        // numberCart = result.find($("#number-product-cart").text());
    //        $('.viewer-product').append(result);
           
    //     }
    // });  



    function addToSuport() {
          $('#modal-suport').modal('show'); 
      }  


    function addToCart(id) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('cart') }}",
            data: {
                product_id: id,
                gift_check:$('#gift_checked').val(),
                price_new : arval_price
                   
            },
            beforeSend: function() {
               
                $('.loader').show();

            },
            success: function(result){

               window.location.href = '{{ route('show-cart') }}'; 

            }
        });
    }      
    
    // function addToCart(id) {

    //     const value = $("input[name='price-add']:checked").val();

    //     ar_val = [];

    //     @if(!empty($data_price_show))
    //     @foreach($data_price_show as $val)

    //         ar_val[{{ $val->id }}] = {{ $val->price }};
    //     @endforeach

    //     @endif

    //     var transport_cost = ar_val[value];

        
    //     $('.form-info-cart').removeClass('hide');
    //     $('.cart-container').addClass('hide');

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    
    //     $.ajax({
    //         type: 'POST',
    //         url: "{{ route('cart') }}",
    //         data: {
    //             product_id: id,
    //             gift_check:$('#gift_checked').val(),

    //            transport_cost:transport_cost,
                   
    //         },
    //         beforeSend: function() {
               
    //             $('.loader').show();

    //         },
    //         success: function(result){

    //            //  numberProductCart = $(".number-cart").text();
    
    //            //  console.log(numberProductCart);
               
    //            // numberCart = result.find(numberProductCart);

    //             $('#tbl_list_cartss').html('');
    
    //             $('#tbl_list_cartss').append(result);
    
    //             const numberCart = $('#number-product-cart').text();
    
    //             $('.number-cart').text(numberCart);
    
    //             $('#exampleModal').modal('show'); 
    //             $('.loader').hide();
                
    //         }
    //     });

    //      $(".btn-closemenu").click(function(){

    //         $('.show-menu').removeClass('active');
    //     });

       

        
    // }

    function isValid(p) {
        var phoneRe = /(84|0[3|5|7|8|9])+([0-9]{8})\b/;
        var digits = p.replace(/\D/g, "");
        return phoneRe.test(digits);
    }


    function addCallPhone(id){

        if($('#buyer_names_call').val()==''){
            alert('vui lòng nhập họ tên');
        }
        else if($('#buyer_tels').val()==''){
            alert('vui lòng nhập số điện thoại')
        }
        else if(!isValid($('#buyer_tels').val())){
            alert('số điện thoại không đúng định dạng');
        }
        else{
            name = $('#buyer_names_call').val();
            phone = $('#buyer_tels').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('callphone') }}",
                data: {
                    name: name,
                    phone:phone,
                    product_id:id,
                       
                },
                success: function(result){
        
                    $('#modal-suport').modal('hide'); 

                    alert('Gửi thành công!')
                    
                }
            });
        }

    }

    function addCartFast(id) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('addcartfast') }}",
            data: {
                product_id: id,
                   
            },
            success: function(result){
    
                $('.number-cart').text(result);
                alert('Thêm sản phẩm vào giỏ hàng thành công !');

            }
        });
        
    }

    


    $('.price-add-mobile').change(function(){

        const value = $("input[name='price-add-mobile']:checked").val();

        ar_val = [];
        @if(!empty($data_price_show))
        @foreach($data_price_show as $val)

            ar_val[{{ $val->id }}] = {{ $val->price }};
        @endforeach

        @endif

        const price = {{  $data->Price }};

        // console.log(ar_val[value]);

        new_price   =  parseInt(price) + ar_val[value];


        price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

      
        $('.show-price-mobile h3').text(price_format.replace('đ', '').trim());

        console.log(12);

    })


   
    

    values = $("#inputs-price").val();

    price = {{  $data->Price }};

    arval_price = [];

    $("#inputs-price").change(function(){

         if ($("#inputs-price").is(":checked")) {

            if(arval_price.length===0){

    
                price_pd = price;

            }
            else{
                 price_pd = arval_price[0];
                
            }
            new_price = parseInt(price_pd)+ parseInt(values);

            arval_price =[new_price];

            price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

            $('.show-price-desktop h3').text(price_format.replace('đ', '').trim());

        } else {

            price_pd = arval_price[0];

             new_price = parseInt(price_pd)- parseInt(values);

            arval_price =[new_price];

            price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

            $('.show-price-desktop h3').text(price_format.replace('đ', '').trim());
        }


    })

    
    val = $("#input-price").val();
    $("#input-price").change(function(){
         if ($("#input-price").is(":checked")) {

            if(arval_price.length===0){
                
                price_pd = price;

            }
            else{
                 price_pd = arval_price[0];
                
            }
            new_price = parseInt(price_pd)+ parseInt(val);

            arval_price =[new_price];

            price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

            $('.show-price-desktop h3').text(price_format.replace('đ', '').trim());

        } else {

            price_pd = arval_price[0];

            new_price = parseInt(price_pd)- parseInt(val);

            arval_price =[new_price];

            price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

            $('.show-price-desktop h3').text(price_format.replace('đ', '').trim());
        }


    })


    values = $("#inputs-price-mb").val();

    price = {{  $data->Price }};

    arval_price = [];

    $("#inputs-price-mb").change(function(){

         if ($("#inputs-price-mb").is(":checked")) {

            if(arval_price.length===0){

    
                price_pd = price;

            }
            else{
                 price_pd = arval_price[0];
                
            }
            new_price = parseInt(price_pd)+ parseInt(values);

            arval_price =[new_price];

            price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

            $('.show-price-mobile h3').text(price_format.replace('đ', '').trim());

        } else {

            price_pd = arval_price[0];

             new_price = parseInt(price_pd)- parseInt(values);

            arval_price =[new_price];

            price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

            $('.show-price-mobile h3').text(price_format.replace('đ', '').trim());
        }


    })

    
    val = $("#input-price-mb").val();
    $("#input-price-mb").change(function(){
         if ($("#input-price-mb").is(":checked")) {

            if(arval_price.length===0){
                
                price_pd = price;

            }
            else{
                 price_pd = arval_price[0];
                
            }
            new_price = parseInt(price_pd)+ parseInt(val);

            arval_price =[new_price];

            price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

            $('.show-price-mobile h3').text(price_format.replace('đ', '').trim());

        } else {

            price_pd = arval_price[0];

            new_price = parseInt(price_pd)- parseInt(val);

            arval_price =[new_price];

            price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(new_price);

            $('.show-price-mobile h3').text(price_format.replace('đ', '').trim());
        }


    })


    $('#carousel').owlCarousel({
        margin:10,
        nav:false,
        autoplay:true,
        dots:true,
        autoWidth: false,
        loop:true,
       
        dotsEach:1,

        
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa fa-angle-right'></i>"],
       
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

    document.addEventListener("DOMContentLoaded", function() {
        // Lấy tất cả các thẻ img trên trang
        const images = document.querySelectorAll('img');

        // Lặp qua từng ảnh
        images.forEach(function(img) {
            // Kiểm tra xem ảnh có thuộc tính alt không
            if (img.hasAttribute('alt')) {
                // Lấy giá trị của alt
                const altText = img.getAttribute('alt');
                
                // Sao chép giá trị alt sang title
                img.setAttribute('title', altText);
            }
        });
    });

    
    $('.listproduct').owlCarousel({
        loop:false,
    
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
                items:3
            }
        }
    });


    @if(!empty($timestamp_check))

         // đếm thời gian 

         //document.getElementById('svg').innerHTML = xmlSvg;
                                        
        time = '{{ @$timestamp_check }}';
        number_deal_product =10;
        //in time 
        var h = 12;
        var i = 0;
        var s = 0;
    
        amount = time //calc milliseconds between dates
        days = 0;
        hours = 0;
        mins = 0;
        secs = 0;
        out = "";
    
    
        hours = Math.floor(amount / 3600);
        amount = amount % 3600;
        mins = Math.floor(amount / 60);
        amount = amount % 60;
        secs = Math.floor(amount);
            
            
    
    
        //time run 
        if(parseInt(time)>0 && parseInt(number_deal_product)>0){
         h = hours;
          m = mins;
          s = secs;
        }   
        else{
            let today =  new Date();
            h = 99 - parseInt(today.getHours());
            m = 59 - parseInt(today.getMinutes());
            s = 59 - parseInt(today.getSeconds());
            
        }

        start();    
        function start()
        {

              /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
              if (h === null)
              {
                  h = parseInt($('.hour').text());

              }

              /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
              // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
              //  - giảm số phút xuống 1 đơn vị
              //  - thiết lập số giây lại 59
              if (s === -1){
                  m -= 1;
                  s = 59;
              }

              // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
              //  - giảm số giờ xuống 1 đơn vị
              //  - thiết lập số phút lại 59
              if (m === -1){
                  h -= 1;
                  m = 59;
              }

              // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
              //  - Dừng chương trình
              if (h == -1){

                $('.crazy-deal-details').remove();

                $('.pdetail-price b').remove();
                $('.pdetail-price-box b').remove();
                

              }



              /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/



              var hour =  h.toString();

              var seconds =  s.toString();

              var minutes =  m.toString();



              // $('.hourss').text(h<10?'0'+hour:''+hour);
              // $('.secondss').text(s<10?'0'+seconds:''+seconds);
              // $('.minutess').text(m<10?'0'+minutes:''+minutes);

            let currentHour = h<10?'0'+hour:''+hour;
            let currentMinutes = m<10?'0'+minutes:''+minutes;
            let currentSeconds = s<10?'0'+seconds:''+seconds;

    
            let currentTimeStr =currentHour + ":" + currentMinutes + ":" + currentSeconds;

          

            $('.clock-start').html(currentTimeStr);

              // Insert the time string inside the DOM
           

              /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
              timeout = setTimeout(function(){
                  s--;
                  start();


              }, 1000);
        }

    @endif

    @if(!empty($text))

        // đếm thời gian 

         //document.getElementById('svg').innerHTML = xmlSvg;
                                        
        time = '{{ @$timestamp }}';
        number_deal_product =10;
        //in time 
        var h = 12;
        var i = 0;
        var s = 0;
    
        amount = time //calc milliseconds between dates
        days = 0;
        hours = 0;
        mins = 0;
        secs = 0;
        out = "";
    
    
        hours = Math.floor(amount / 3600);
        amount = amount % 3600;
        mins = Math.floor(amount / 60);
        amount = amount % 60;
        secs = Math.floor(amount);
            
            
    
    
        //time run 
        if(parseInt(time)>0 && parseInt(number_deal_product)>0){
         h = hours;
          m = mins;
          s = secs;
        }   
        else{
            let today =  new Date();
            h = 99 - parseInt(today.getHours());
            m = 59 - parseInt(today.getMinutes());
            s = 59 - parseInt(today.getSeconds());
            
        }

        start();    
        function start()
        {

              /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
              if (h === null)
              {
                  h = parseInt($('.hour').text());

              }

              /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
              // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
              //  - giảm số phút xuống 1 đơn vị
              //  - thiết lập số giây lại 59
              if (s === -1){
                  m -= 1;
                  s = 59;
              }

              // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
              //  - giảm số giờ xuống 1 đơn vị
              //  - thiết lập số phút lại 59
              if (m === -1){
                  h -= 1;
                  m = 59;
              }

              // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
              //  - Dừng chương trình
              if (h == -1){

                $('.crazy-deal-details').remove();

                $('.pdetail-price b').remove();
                $('.pdetail-price-box b').remove();
                priceChange = '{{  str_replace(',' ,'.', number_format($price_old))  }}'   ;
                $('.pdetail-price-box h3').text(priceChange);

              }



              /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/



              var hour =  h.toString();

              var seconds =  s.toString();

              var minutes =  m.toString();



              // $('.hourss').text(h<10?'0'+hour:''+hour);
              // $('.secondss').text(s<10?'0'+seconds:''+seconds);
              // $('.minutess').text(m<10?'0'+minutes:''+minutes);

            let currentHour = h<10?'0'+hour:''+hour;
            let currentMinutes = m<10?'0'+minutes:''+minutes;
            let currentSeconds = s<10?'0'+seconds:''+seconds;

    
            let currentTimeStr =currentHour + ":" + currentMinutes + ":" + currentSeconds;

          

            $('.clock').html(currentTimeStr);

              // Insert the time string inside the DOM
           

              /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
              timeout = setTimeout(function(){
                  s--;
                  start();


              }, 1000);
        }
    @endif    
</script>
@endpush


@endsection