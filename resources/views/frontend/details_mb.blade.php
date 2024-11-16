@extends('frontend.layouts.appmb')
@section('content') 
@push('style')

    <style>

     .box01 img{
        width: 220px;
        height: 220px !important;
    }  
    .owl-carousel .owl-item.active img{
        width:auto !important;
        
    }

   
    .share-button{
        width: 100%;
        display: flex;
    }
    /*.scrolling_inner, #carousel{
        display: none !important;
    }*/
    .tygh-top-panel{
        height: 130px;
    }
    .owl-stage-outer{
        display: inline;
    }

    

    .box_pro-benefit{
        max-width: 768px !important;
       
    }

    /*.nav-search, .scroll-box{
        display: inline;
    }*/

  /*  .scrolling, .box01 .owl-carousel .item{
        text-align: center !important;
    } */
    

    .share-button .redirectCart{
        width: 49%;
        border: 0;
        margin: 0;
    } 

     .view-all-salient_fratured{
            width: 100%;
            height: 24px;
        }

    .share-button .right-cart{
        margin-left: 10px;
        background: #ffde00;
        color: #000;
        border: 0;
    }

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

    .redirectCart{
        height: 54px;
        padding: 0;
        width: 100%;
        
        font-size: 12px;
        font-weight: normal;

    }

    .box-cart{
        height: 108px;
    }

    .breadcrumb li a{
        font-size: 12px !important;
        width: 100%;
        height: 100%;
        padding: 0;
        display: inline !important;
    }

    .box_pro-benefit{
        height: 288px;
        width: 100%;
    }

    .pdetail-price{
        height: 62px;
    }


    .box01{
        height: 278px;
    }



    body{
        display: inline;
        
        width: 100%;
        height: auto;
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


    .pdetail-price-box span{
        font-size: 30px !important;
        font-weight: 600 !important;
        color: #c5232b;
        
    }

    .breadcrumb{
                
        margin: 0;
        height:34px;
        width: 100%;
        padding: 0;
        
    }

    .pdetail-add-to-cart{
        width: 100%;
        margin:0;
    }

    .li-home {
        width: 34px;
    }

    .li-child{
        width: 270px;
    }

   
    .pay{
        width: 373px;

/*        margin: 0 auto;*/
        height: 309px;
    }


     .pdetail-stockavailable, .scroll-box{
                
                display: block;
            }    
    
    .items-h{
        max-width: 600px !important;
    }

    .show-price-mobile{
        height: 100%;
        width: 100%;
    }
    

    .share-button{
        height: 50%;
    }
    .scrolling_inner{

        max-width: 768px;
        width: 100%;
        height: 110px !important;
    }

    
     @media (min-width: 1200px) {
        .container {
            max-width: 1270px !important;
        }


    }

     .breadcrumb li{
            height: 100%;
        }

    .box01{
        
      
       
    }

    .carts-on{
        
        margin: 0;

    }

     #img-main{
        display: inline !important;
        width: 220px;
        height: 220px;
     }

   
        

        #carousel{
            margin: 0 auto;

        }

        #carousel, .box01 .owl-carousel .owl-item, .box01 .owl-carousel .owl-item img:not(.monopoly-label) {
            
            display: none !important;
            
        }
        
         .image-container {
            position: relative;
            width: 300px;
            height: 200px;
            background-color: #f0f0f0; /* Placeholder color */
            overflow: hidden;
        }
        .pdetail-stockavailable{
            height: 8%;
        }

        /* Loading spinner */
        .image-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 40px;
            height: 40px;
            border: 5px solid #ccc;
            border-top-color: #333;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            transform: translate(-50%, -50%);
        }

        /* Image styles */
        .lazy-image {
            opacity: 0;
            transition: opacity 1s ease-in;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Image fade-in effect when loaded */
        .lazy-image.loaded {
            opacity: 1;
        }

        /* Hide the spinner after the image loads */
        .image-container.loaded::before {
            display: none;
        }

        /* Keyframes for the spinner animation */
        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }


        /*.items-h{
            width: 220px !important;       
            height: 220px !important;
        }*/
        .nk-menu{
            display: none;
        }

        .nk-header ._nk_main, .span16 .row-fluid {
            height: 100%;
        }
        
        .inline{
            height: 100%;
        }

        .owl-stage{
            height: 100%;
        }

       
        

        .scrolling{
            height: 100%;
        }
       
       
       
        .content{
            height: 27% !important;
        }

        .show-more{
            height: 2% ;
        }

        .show-more span{
            height: 83%;
        }
        .related__ttl{
            height: 7%;
        }

        .listproduct {
            height: 93%;
        }

        .monopoly_item ul {
            display: block;
            flex-wrap: wrap;
        }

        .owl-stage-outer{
            height: 100%;
        }

        .pdp-box{
            height: 100%;
        }
        .nk-title{
            height: 7%;
        }
        .post-sidebar-list {
            height: 93%;
        }

        .title-mb h2{
            width: 80%;
            margin: 0 auto;
        }
        .monopoly_item ul li {
                width: 100%;
                padding: 11px 0;
            }




        .img-main{
           
            
/*            max-height: 300px;*/
            padding: 0 !important;
        }

       
       
        .detail h1{
            padding: 0 !important;
            margin: 0 !important;
            height: 43px !important;

        }

        .title-mb{
            height: 48px;
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


    <link rel="stylesheet" type="text/css" href="{{ asset('css/detail1fe.css') }}">
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

        


      

            .monopoly_item ul li .icon_change, .monopoly_item ul li .icon_genuine {
                width: 30px;
                height: 25px;
                display: inline-block;
                vertical-align: middle;
                background-image: url(//cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/FE/img/detail-product/icon_detail-2.png);
                margin-right: 6px;
                background-size: 330px 330px;
            }

            .scroll-box, .pdetail-price,.tygh-top-panel, .box_main, .box_left, .scrolling_inner, .box01, .view-more-related, .box_pro-benefit{
                width: 100%;
            }

            .img-main a{
                display: block;
                height: 100%;
                max-width: 335px;
            }

          

            .box_left{
                height: 86%;
            }

            .box_right{
                height: 14%;
            }
           
            .scrolling_inner{
                height: 107px;
            }
            .view-all-salient_fratured{
                height: 24px;
            }

            
            
            .view-end{
                height: 445px;
            }

            section.detail{
                height: 96%;
            }

            .pdetail-info{
                height: 64px; 
/*                display: none;   */
            }

           
            

            .box_main{
                height: 3000px;
                margin: 0;
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
                height: 100%;
            } 

            .pdetail-status{
                height: 74%;
                width: 100%;
                
            }

            .box-select-price{
                height: 79px;
                margin-left: 96px;
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



<?php

    $gift_Price = pricesPromotion($data->Price, $data->id);
?>


<section data-id="235791" data-cate-id="1942" class="detail ">


    <?php 

   
    $mobile = 0;

    if(!empty($_SERVER['HTTP_USER_AGENT'])){
        
        $useragent=$_SERVER['HTTP_USER_AGENT'];

        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
            $mobile =1;
        }
    
    }

    ?>

    


    

    <ul class="breadcrumb">
        
        <li class="li-home">
            <a href="{{route('homeFe')}}">Trang chủ</a>
           
        </li>
      
        @if(!empty($ar_groups_info) && !empty($ar_groups_info[0]))    
       
        <li class="li-child">
            <span>›</span>
            <a href="{{ route('details',$data->Link) }}">{{ $data->Name }}</a>
            
        </li>
        @endif
    </ul>
   

    

    
   
            
    <div class="owl-carousel detail-slider" id="carousel">

            <?php 
                $image_product = strstr(basename($data->Image), '_');
            ?>
            <div class="item">

                <img src="{{ asset('uploads/product/1731128406_may-giat-invert_main_371_1020.png_with_bgc.png') }}" alt="{{ @$data->Name }}" width="220px" height="220px">
                
                @if($data->id>4720)

                @if(!empty($logoSaker->maker))

                <div class="saker">
                        <img src="{{ asset('images/saker/'.strtolower($logoSaker->maker).'.png') }}"  data-src ="{{ asset('uploads/product/1731128406_may-giat-invert_main_371_1020.png_with_bgc.png') }}" loading="lazyload" width="220px" height="220px"  >
                </div>
                @endif
                @endif

              

            </div>

            <?php 
                $images_products = Cache::rememberForever('image_product'.$data->id, function() use ($data) {

                    $images = App\Models\image::where('product_id', $data->id)->where('active', 1)->select('image')->get()??'';

                    return $images;
                
                });
            
            ?>

            @if(isset($images_products))
           
            @foreach( $images_products as $image)

          

            @if(!empty($image->image) && '_'.basename($image->image) != $image_product)

            @if( basename($image->image) != basename($data->Image) )

            
          
            @endif

          
            @endif


            @endforeach

            @endif
    </div>       
   
    <div class="scrolling_inner">
        <div class="box01__tab scrolling">
            <div id="thumb-featured-images-gallery-0" class="item itemTab active " data-gallery-id="featured-images-gallery" data-color-id="0" data-is-full-spec="False" data-color-order-id="0" data-isfeatureimage="True" data-toggle="modal" data-target="#Salient_Features" class="read-full" data-gallery-id="featured-images-gallery">
                <div class="item-border">
                    <i class="icondetail-noibat"></i>
                </div>
                <p>Điểm nổi bật</p>
            </div>
            <div id="thumb-specification-gallery-0" class="item itemTab  is-show-popup" data-gallery-id="specification-gallery" data-color-id="0" data-is-full-spec="True" data-color-order-id="0" data-isfeatureimage="True">
                <div class="item-border">
                    <i class="icondetail-thongso" data-toggle="modal" data-target="#specifications"></i>
                </div>
                <p data-toggle="modal" data-target="#specifications">Thông số kỹ thuật</p>
            </div>

          

            <div id="thumb-article-gallery-0" class="item itemTab  is-show-popup scroll-content" data-color-id="0" data-is-full-spec="False" data-color-order-id="0" data-isfeatureimage="True">
                <div class="item-border">
                    <i class="icondetail-danhgia"></i>
                </div>
                <p>Thông tin sản phẩm</p>
            </div>
        </div>
    </div>


   
        <div class="pay">
        
            <span >{{ $data->Name }}</span>
            
            
            <div class="pdetail-info">
                <p class="p1">Thương hiệu: <b>{{ @$ar_groups_info[0]['name'] }}</b></p>

                <p>Model: <b>{{ @$data->ProductSku  }}</b></p>
               
            </div>

            <div class="pdetail-stockavailable">
                <span>  @if($status==="CÒN HÀNG") <img src="{{ asset('images/template/icon-tick.png') }}" width="18px" height="18px" > @endif {{ $status }}</span>
            </div>
            <div class="scroll-box">
                <div class="pdetail-price">
                    @if($data->Quantily>-1)
                    <div class="pdetail-price-box show-price-mobile">
                        {!! @$text !!}
                        <span> {{ str_replace(',' ,'.', number_format($data->Price)) }} ₫</span>
                    </div>


                    @endif
                </div>
                <!-- <div class="discount"><p class="installment">Trả góp 0%</p></div> -->
               

                    @if(!empty($data->promotion))

                    <div class="gift_pro">

                        <span class="ttl"><i class="fa-solid fa-gift"></i> Ưu đãi tặng kèm  @if(!empty($data->GiftPrice)) trị giá {{ str_replace(',' ,'.', number_format($data->GiftPrice)) }}  @endif</span>
                       
                        <div class="gift_item">
                            <ul>
                                <li>
                                    
                                    <div class="gift_info">
                                       {!! @$data->promotion !!}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                            
                    
                    @endif

                    

                   <!--  @if($data_cate==4)

                    <div class="gift_pro">
                        <span class="ttl"><i class="fa-solid fa-hand-point-right"></i> Bảng giá lắp đặt điều hòa</span> 
                        <div class="gift_item">
                            <ul>
                                <li>
                                    <div class="gift_info">
                                        <p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:16px">(<a href="https://dienmaynguoiviet.vn/bang-gia-vat-tu-lap-dat" target="_blank">Xem chi tiết</a>)</span></span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                    @endif -->

                    @if($checkSharp>-1)
                    <div class="gift_pro">
                        <span class="ttl"><i class="fa-solid fa-hand-point-right"></i> Hướng dẫn kích hoạt</span> 
                        <div class="gift_item">
                            <ul>
                                <li>
                                    <div class="gift_info">
                                        <p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:16px">Hướng dẫn khách hàng tự kích hoạt bảo hành sản phẩm Sharp (<a href="https://dienmaynguoiviet.vn/huong-dan-khach-hang-tu-kich-hoat-bao-hanh-san-pham-sharp" target="_blank">Xem chi tiết</a>)</span></span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endif

                    @if($checkDaikin===true)

                     <div class="gift_pro">
                        <span class="ttl"><i class="fa-solid fa-hand-point-right"></i> Hướng dẫn kích hoạt</span> 
                        <div class="gift_item">
                            <ul>
                                <li>
                                    <div class="gift_info">
                                        <p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:16px">Hướng dẫn khách hàng tự kích hoạt bảo hành sản phẩm Daikin (<a href="https://dienmaynguoiviet.vn/huong-dan-tu-kich-hoat-bao-hanh-dieu-hoa-daikin" target="_blank">Xem chi tiết</a>)</span></span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @endif

                    <!-- nếu tồn tại gift_price thì hiển thị -->

                    @if(!empty($gift_Price) && $data_cate !=8 && $data->Quantily>-1)

                    <?php 

                        $image_gift_promotion = definePrice($gift_Price);
                    ?>
                    
                    <div class="gift_pro">
                        
                        <span class="ttl"><i class="fa-solid fa-gift"></i> Quà tặng giảm ngay {{ $gift_Price }} đ <img src="{{ asset($image_gift_promotion) }}" height="30px" width="30px"></span>

                    </div>

                    @endif


                    @if(!empty($gift) &&  $data->Quantily>0 &&  $data['Price']>0)

                    <fieldset class="p-gift">
                        <legend id="data-pricetotal" style="color: #ff0000;font-size: 18px; font-weight: bold" data-pricetotal="0">
                            Khuyến mãi kèm theo
                        </legend>

                      
                        <!---->
                        <div class="detail-offer">
                           
                            {{ $gifts->type ==1?'Lựa chọn 1 trong 2 sản phẩm sau':'' }}
                            @foreach($gift as $key => $valuegift)
                            <div class="select-gift">
                                

                                <input type="checkbox" name="gift" value="{{ $valuegift->name }}" class="gift-check">
                                
                                <img data-src="{{ asset($valuegift->image) }}" height="30px" width="30px" class="lazyload">

                                @if($valuegift->id ==5)
                                <a href="https://dienmaynguoiviet.vn/khau-trang-loc-khi-lg-puricare-the-he-2-ap551awfa-ajp-may-trang"><h4>{{ $valuegift->name }}</h4></a>
                                @else
                                <h4>{{ $valuegift->name }}</h4>
                                @endif
                            </div>
                            @endforeach
                           
                        </div>
                        <div class="img-gift clearfix">
                        </div>
                    </fieldset>

                     @endif    

                  
                    <!-- mobile -->
                    @if($data->Quantily>0)

                    @if(!empty($data_price_show))

                    @foreach($data_price_show as $key=> $val)
                         <input type="radio" id="age{{ $val->id }}" name="price-add-mobile" class="price-add-mobile" value="{{ $val->id }}" {{ $key===0?'checked':'' }}>
                        <label for="age1" > {{  $val->name }} : {{str_replace(',' ,'.', number_format($val->price))  }}đ</label><br>
                    @endforeach

                    @endif

                    <!-- <a href="tel:02473036336"><div class="buy-button-hotline nhapnhay btn">Gọi 0123.456.789 để được giảm thêm</div></a> -->


                    <div class="pdetail-add-to-cart add-to-cart box-cart">
                       
                        <input type="hidden" name="productId" value="{{ $data->id }}">
                        <input type="hidden" name="gift_checked"  id="gift_checked" value="">
                        <!-- <div class="product-quantity">
                            <input type="text" class="quantity-field" readonly="readonly" name="qty" value="1">
                            </div> -->
                        <div class="redirectCart div-carts-on">
                            <div type="button" class="btn-add-cart carts-on" onclick="addToCart({{ $data->id }})">MUA NGAY <br>
                                </div>
                        </div>    
                        

                        <div class="share-button">
                             <button type="button" class="btn-add-cart redirectCart cartSP" onclick="addToSuport(2221)">GỌI LẠI CHO TÔI <br>(Tư vấn tận tình)</button>

                            <button type="button" class="btn-add-cart  redirectCart cartSP right-cart" onclick="addToSuport(2221)">TRẢ GÓP QUA THẺ <br></button>
                        </div>
                           
                        
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                            </button> -->
                    </div>
                    
                    @if((int)$data['Price']>=3000000)
                    <!-- <div class="installment-purchase pdetail-installment">
                       
                        <a target="_blank"  href="{{ route('details', $data->Link)  }}?show=tra-gop" admicro-data-event="101725" admicro-data-auto="1" admicro-data-order="false" class="but-1-gop">
                        <strong>TRẢ GÓP QUA THẺ</strong>
                        <br>
                        (Visa, Master, JCB)
                        </a>
                    </div>  -->
                    @endif

                    @else

                    <div class="pdetail-add-to-cart add-to-cart">
                        <div class="inline">
                            <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart">Liên hệ</button>
                        </div>
                       
                    </div>
                    @endif
            
            </div>
                    
            
        </div>
    
    

    
    <div class="view-all-salient_fratured">
        
        <b>Chính sách mua hàng tại MuaSamTaiKho.vn</b>

    </div>
    <div class="box_pro-benefit">
        <div class="monopoly">
            <!-- <span class="ttl"> Độc quyền tại Siêu Thị Điện Máy - Nội Thất Chợ Lớn</span> -->
            <div class="monopoly_item">
                <ul>
                    <?php 

                        $data_cs = DB::table('chinh_sach')->where('id', 1)->get()->first();
                    ?>
                    <li>
                        <i class="icon_genuine"></i>
                        <div class="monopoly-title">{{  $data_cs->input1 }}</div>
                    </li>
                    <li>
                        <i class="icon_change"></i>
                        <div class="monopoly-title">{{  $data_cs->input2 }} </div>
                    </li>
                    <li>
                        <i class="icon_refund"></i>
                        <div class="monopoly-title">{{  $data_cs->input3 }}</div>
                    </li>
                    <li>
                        <i class="icon_guarantee_mb"></i>
                        <div class="monopoly-title">{{  $data_cs->input4 }} </div>
                    </li>
                    <li>
                        <i class="icon_delivery"></i>
                        <div class="monopoly-title">{{  $data_cs->input5 }}</div>
                    </li>
                    <li>
                        <i class="icon_thung"></i>
                        <div class="monopoly-title">{{  $data_cs->input6 }}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        
    
    <!--#endregion-->
    <!--#region BreadcrumbList-->
    <!--#endregion-->
    <!--#region Organization-->
    <!--#endregion-->

</section>
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
            height: 100%;
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




@push('script')




<script>

    $('.content img').attr('loading', 'lazy');

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

    document.addEventListener("DOMContentLoaded", function() {
        const lazyImages = document.querySelectorAll("img.lazyload");

        const imageObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const img = entry.target;
              // Thay thế ảnh placeholder bằng ảnh thật từ data-src
              img.src = img.getAttribute("data-src");
              img.onload = () => {
                img.classList.remove("blur"); // Xóa hiệu ứng blur sau khi ảnh thật tải xong
              };
              observer.unobserve(img);
            }
          });
        });

        lazyImages.forEach(img => {
          imageObserver.observe(img);
        });
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
        autoplay:false,
        dots:false,
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

    


    function lazyLoadImage() {
            const containers = document.querySelectorAll('.image-container');

            containers.forEach(container => {
                const img = container.querySelector('.lazy-image');
                const src = img.getAttribute('data-src');
                
                if (src) {
                    img.src = src; // Start loading the actual image

                    // Add loaded class to image and container once the image is fully loaded
                    img.onload = () => {
                        img.classList.add('loaded');
                        container.classList.add('loaded'); // Hide loading spinner
                    };

                    img.removeAttribute('data-src'); // Remove data-src after setting src
                }
            });
        }

        // Set delay (e.g., 3 seconds) before lazy loading
        setTimeout(lazyLoadImage, 3000);
    
</script>
@endpush


@endsection