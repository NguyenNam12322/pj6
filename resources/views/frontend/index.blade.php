@extends('frontend.layouts.appsss')

@section('content')

<?php 

    if(!empty($deal)){
        $convert_ar_deal = json_decode($deal, true);
       
        $key_first = array_key_first($convert_ar_deal);

        $time_deal_end = $deal[$key_first]->end;

        $timestamp = $now->diffInSeconds($time_deal_end);
        $hour =  floor($timestamp/3600);
        $timestamp = floor($timestamp % 3600);
        $minutes =floor($timestamp/60);
        $timestamp = floor($timestamp % 60);
        $seconds =floor($timestamp);

    }    

   
?>

<style type="text/css">
    .icons-2022 {

            display: block;
            vertical-align: middle;
            background: url({{ asset('images/template/sprite-2022.png')  }}) no-repeat;
            width: 36px;
            height: 40px;
            background-position: -2px -2px;
            margin-right: 10px;
        }
        
</style>


<style type="text/css">

     #new-flash-sale_3621{
            margin: 10px !important;
        }

        .first-render{
            padding: 0 !important;
        }
   
    @media screen and (min-width: 768px) {
        .nk_houseware_best_selling_2020_wrapper .product, .product-slide{
            width: 20% !important;
            margin-top: 6px;
        }   

        #new-flash-sale_3621{

            border: 1px solid #D7BA6C;
            
        } 

        

        .delivery-free{
                margin-left: 40px;
            }
        
        .title-dhn {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 60px;
            margin-bottom: 5px;
            padding: 0 10px;
        }



        .payday-header{
            height: 60px;
            background: linear-gradient(0deg,#d1a94e,#fdf5a1,#cfac54);
        }
        #nk-banner-home img{
            width: 102% !important;
/*            height: 388px !important;*/
        } 

        .banner_home__.container{
            padding: 0;
        }

        .outstanding{
            padding: 0;
        }

        .left-menu p{
            margin: 0 !important;
        }

        .nk-header ._nk_main{
            height: 100%;
        }

        .endtime{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 70%;
        }
    }

    .view-all-desk span{
        padding: 10px;  
        border-radius: 5px;
        background: linear-gradient(0deg,#d1a94e,#fdf5a1,#cfac54);
        color: #000;

    }
    .view-all-desk{
        margin: 10px;
    }

    .gift-info {
        position: absolute;
        top: 0;
        left: 100%;
        width: 350px;
        z-index: 999;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 3px;
        display: block;
        color: #111;
        max-height: 350px;
        padding: 10px;
    }

    .view-all-desk span{
        cursor: pointer;
    }

    .view-all-desk{
        text-align: center;
        padding: 10px;
    }

    .product-price .price {
        color: #D82A20 !important;
        display: block;
        font-size: 22px;
        font-weight: bold;
        line-height: 18px;
        margin-bottom: 5px;
    }



    .gift-info .title {
        background: linear-gradient(to right,#F6E4DB,#D09E8A);
        padding: 10px 10px;
        font-size: 16px;
        color: #414042;
    }

    

    
    .hinh_giamgia{
        position: relative;

/*        display: none;*/
    }

    .product{
       /* margin-right: 7.2px;
        margin-bottom: 7.2px;*/
    }

    #countdown{
        position: absolute;
         top: 50%;
        transform: translateY(-50%);
    }
    

    #countdown li {
      display: inline-block;
      font-size: 1em;
      list-style-type: none;
      padding: 10px 5px;
      text-transform: uppercase;
      color: blue;
    }

    #countdown li span {
      
      font-size: 2.5rem;
    }  

    .outstanding  .row-fluid {
        width: 100% !important;
    }

    #countdown img{
        width: 100% !important;
    }

    .header-block{
        height: 65px !important;
    } 

    .div-group{
        width: 100%;
        height: auto;
        position: sticky;
    }

    @media all and (max-width: 768px) {
        
        #countdown li {
            font-size: calc(1.125rem * var(--smaller));
        }

        #new-flash-sale_3621{
            border:1px solid #D7BA6C
        }

        .product .product-title{
            margin-top: 0 !important;
        }

        .block_render_falshsale .content .product-body{
            padding: 0 !important;
        }

        .banner-left{
            padding: 0 !important;
        }

        .payday-header{
            padding: 10px 0;

             background: linear-gradient(0deg,#d1a94e,#fdf5a1,#cfac54);
        }

        .gvdshock{
            height: 40px;
            display: flex;
        }

        .search-head{
            height: 130px;
        }
        .gvdshock .txt{
            line-height: 40px;
            font-weight: bold;
        }

        #new-flash-sale_3621{
            margin-bottom: 10px !important;
        }    

        .nav1-search{
            height: 100%;
        }



        .deal-mb{
            display: flex;
        }

        .title-end{
            display: none;
        }

        .deal-mb{
            width: 50%;
        }
        .endtime{
            text-align: right;
            width: 50%;
        }
       

       /* #nk-banner-home .main-banner{
            height: 100% !important;
        }*/
          
        #countdown li span {
            font-size: calc(3.375rem * var(--smaller));
        }
       /* .nk-banner-homes{
            display: none;
        }*/
        #nk-danh-muc-san-pham-left{
            display: none;
        }

        .hinh_giamgia{
            height: 40px !important;
        }

        .show-mobile-product{
            height: 728px;
            overflow: hidden;
        }

        .banner_home__.container{
            padding: 0 !important;
        }

    }    

   
    .countdown-timer label {
        background-color: #000;
        color: #ffea00;
        border: 1px solid #fff;
    }

    .countdown-timer label {
        font-size: 22px;
        line-height: 27px;
        border-radius: 9px;
/*                                color: #fff;*/
        color: #ffcc18;
        min-width: 36px;

        padding: 5px;
        margin: 0 5px;
     /*   color: #fff;
        background: #000;*/
        border-radius: 8px;
/*                                min-width: 30px;*/
        display: inline-block;
        text-align: center;
        position: relative;
    }

    label#hours::after, label#minutes::after{
        content: ":";
        position: absolute;
        right: -9px;
        font-size: 18px;
        color: #fff;
        font-weight: bold
    }
    
    .title-end {
        font-size: 20px;
        line-height: 24px;
        color: #000;
    }
    .hinh_giamgia{
        height: 100%;
    }

    .tt-dhn-l{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        display: flex;
    }

    .tt-dhn-l .txt {
        font-size: 20px;
        font-weight: 700;
        color: #010101;
        text-transform: uppercase;
        line-height: 40px;
    }

    

</style>

<link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}?ver=25">

<div class="gift-info"></div>
<div class="row-fluid ">
    <div class="span16 container outstanding">
        <div class="row-fluid ">
            <div class="span16 ">

                @if(!empty($deal))
                
                <div class="payday-header desktop">
                    <div class="hinh_giamgia"> 

                        <div class="gvdshock">

                            <div class="tt-dhn-l">
                                <i class="icons-2022"></i>
                                <span class="txt">Deal hot hôm nay</span>
                            </div>
                            <div class="endtime" data-countdown="" data-begin="">
                                <span class="title-end">Kết thúc sau</span>
                                <span class="countdown-timer">
                                    
                                    <label id="hours">{{ $hour }}</label>
                                    <label id="minutes">{{  intval($minutes)<10?'0'.$minutes:$minutes }}</label>
                                    <label id="seconds">{{  intval($seconds)<10?'0'.$seconds:$seconds }}</label>
                                </span>
                            </div>


                        </div>

                    </div>

                </div>

                <div class="payday-header mobile">
                    <div class="hinh_giamgia"> 

                        <div class="gvdshock">

                            <div class="deal-mb">
                                <i class="icons-2022"></i>
                                <span class="txt">Deal hot hôm nay</span>
                            </div>
                            <div class="endtime" data-countdown="" data-begin="">
                                <span class="title-end">Kết thúc sau</span>
                                <span class="countdown-timer">
                                    
                                    <label id="hourss">{{ $hour }}</label>
                                    <label id="minutess">{{  intval($minutes)<10?'0'.$minutes:$minutes }}</label>
                                    <label id="secondss">{{  intval($seconds)<10?'0'.$seconds:$seconds }}</label>
                                </span>
                            </div>


                        </div>

                    </div>

                </div>

                @endif



                <div id="new-flash-sale_3621" class="block_render_falshsale mouse-mover" style="" data-layout="layout_5">
                    <div class="content first-render owl-carousel owl-loaded owl-drag" data-layout="layout_5" data-items_start="0" data-items_limit="50" data-big_bang="N" data-layout_type_config="Y" data-promotion_ids="" data-not_promotion_ids="">


                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="payday-blockss">



                            @foreach($deal as $key => $value)
                               
                            @if( !empty($value->active) &&  $value->active ==1 && $now->between($value->start, $value->end))

                           
                            <?php
                                $discount_deal = 0;
                                if($value->price!=0){
                                    $discount_deal =  round(((intval($value->price) - intval($value->deal_price))/intval($value->price))*100);
                                }    

                                $count_pd  =  Cache::rememberForever('count_pd_'.$value->product_id , function() use($value){

                                    return   App\Models\product::find($value->product_id);
                                });

                            ?>
                           
                            <div class="product-slide item" id="items-{{ $value->id }}">                         
                                <div class="product">
                                    <div class="product-header" href="{{ route('details', $value->link) }}">
                                        <div class="top-right">
                                            <div class="product-feature-badge-item installment">
                                                <span>Trả góp 0%</span>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="{{ route('details', $value->link) }}">
                                                <img class="lazyload" loading="lazy" width="180px" height="180px" src="{{ $value->image }}" alt="{{ $value->name }}">
                                            </a>
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="product-body">
                                        <div class="product-feature-badge"></div>
                                        <div class="product-title">
                                            <a href="{{ route('details', $value->link) }}">{{ $value->name }}</a>
                                        </div>
                                        <div class="product-price">
                                            <p class="final-price">{{ @str_replace(',' ,'.', number_format($value->deal_price)) }}đ</p>
                                            <div class="saved">
                                                <span class="amount">{{ @str_replace(',' ,'.', number_format($value->price)) }}đ</span>
                                                <!-- <div class="discount-percent">
                                                    <span>-31%</span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-footer"></div>
                                    <a class="promotion" href="{{ route('details', $value->link) }}">

                                        @if($value->order>0)

                                        <span class="note">Đã bán {{ $value->order }}</span>

                                        <?php 

                                            if($value->order>10){

                                                $percent = 100;

                                            }
                                            else{
                                                $percent = intval($value->order)*10;
                                            }
                                        ?>
                                        <input style="background-size: {{ $percent  }}% 100%" type="range" value="4" max="10">

                                        @endif
                                    </a>
                                </div>

                           
                                 
                            @include('frontend/layouts/more-info', ['value'=>$count_pd, 'deal_price'=>$value->deal_price])
                            </div>


                            @endif

                            @endforeach


                        </div>    


                    </div>
                    <div class="view-all-desk"><a href="{{ route('dealFe') }}"><span>Xem toàn bộ sản phẩm</span></a></div>                             
                </div>

                


                @if(!empty($product_sale)&&$product_sale->count()>0)

                <?php 

                    $product_sale_chunk = $product_sale->chunk(2);
                ?>

                @if(!empty($product_sale)&&$product_sale->count()>0)

                <!-- tắt tạm sản phẩm sale -->
                
                <div class="payday-container" id="payday-block-container" style="display:none;">


                    <!-- banner under sale -->
                    @if(!empty($bannerUnderSale[0]['image']))
                   
                   <!--  <div class="payday-header">
                        <div class="hinh_giamgia">
                            <a href="#" title="Chương trình khuyến mãi giá sốc">
                                <img src="{{ $bannerUnderSale[0]['image'] }}" width="1200px" height="45px" alt="Chương trình khuyến mãi giá số">
                            </a> 
                        </div>
                    </div> -->
                    @endif

                    <div class="payday-new-wrap">
                        <div style="display: none" id="getTimeDay">08/31/2</div>
                        <div style="display: none" id="getTimeHours">23:59:59</div>
                        <div class="new-carousel owl-carousel owl-theme owl-loaded owl-drag" id="payday-block">



                            @foreach($product_sale_chunk as $value)
                            <div class="owl-item-col">
                                @foreach($value as $key => $vals)

                                
                                <div class="item-{{ $key }}">
                                    <a class="product-render rd" data-product_id="115481" product-id="115481" name="{{ $vals->Name  }}" href="{{ route('details', $vals->Link) }}" ></a>
                                    <div class="product-slide">
                                        <a class="product-render rd" data-product_id="115481" product-id="115481" name="{{ $vals->Name  }}" href="" ></a>
                                        <div class="product">

                                            <a class="product-render rd" data-product_id="{{  $vals->id }}" product-id="115481" name="{{ $vals->Name  }}" href="{{ route('details', $vals->Link) }}"></a>
                                            <div class="product-header">
                                                <a class="product-render rd" data-product_id="{{  $vals->id }}" product-id="115481" name="{{ $vals->Name  }}">
                                                    <div class="top-right">
                                                        <div class="product-feature-badge-item installment">
                                                            <span>Trả góp 0%</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="product-image">
                                                    <a class="product-render rd" data-product_id="115481" product-id="115481" name="{{ $vals->Name  }}"></a>
                                                    <a href="{{ route('details', $vals->Link) }}">
                                                        <img class="lazyload" loading="lazy" width="180px" height="180px" src="{{ asset($vals->Image) }}" alt="{{ $vals->Name  }}">
                                                    </a>
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="product-body">
                                               
                                                <div class="product-title">
                                                    <a href="{{ route('details', $vals->Link) }}">{{ $vals->Name }}</a>
                                                </div>
                                                <div class="product-price">
                                                    <p class="final-price">{{ @str_replace(',' ,'.', number_format($vals->Price)) }} </p>
                                                    
                                                </div>
                                            </div>
                                            <div class="product-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                @endif

                @endif


                <div class="lst-cate-title header-block"> <span>ƯU ĐÃI NỔI BẬT</span> </div>

                <div class="div-group">
                     <div class="w100p show-group-data  desktop">
                        <div class="span16 nk_houseware_best_selling_2020_wrapper nk_homepage_houseware_best_selling_2020_wrapper js_done ">
                            <div class="menu-wrap0" style="height: 35px;">
                                <div class="menu-wrap">

                                    <?php 
                                        $define = ['Ao Smith','Tivi', 'Máy giặt', 'Tủ lạnh','Điều hòa' ];

                                    ?>

                                    @foreach($define as $key => $value)
                                    <div class="menu-item {{ $key===0?'active':''  }}" data-id="{{ $key }}" data-uid=""><span>{{ $value }}</span></div>
                                    @endforeach

                                    
                                   
                                </div>
                            </div>


                            <div class="product-item show-data-group mouse-mover" data-uid="4133_3386">
                                <div class="nk-product-cate-style-grid nk-product-collection nk-product- clearfix">
                                    <div id="pagination_contents" class="nk-product nks-fs-sync index-index" data-fs-type="0">

                                        <?php 

                                            $hot = DB::table('hot')->select('product_id')->where('group_id', 9)->orderBy('orders', 'asc')->get()->pluck('product_id');

                                            $data = App\Models\product::whereIn('id', $hot->toArray())->Orderby('orders_hot', 'desc')->get();

                                            $dems = 0;

                                        ?>

                                        @foreach($data as $key =>$datas)

                                            <?php 

                                                $dems++;
                                                if($dems>8){

                                                    break;

                                                }
                                            ?>
                                            <div class="product col-md-3 col-xs-6 view-show-hide item" id="item_feature-{{ $datas->id }}">
                                                <div class="product-header" href="{{ route('details', $datas->Link) }}">
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
                                                @include('frontend.layouts.more-info', ['value'=>$datas])
                                            </div>
                                          
                                      

                                        @endforeach


                                        @foreach($data as $key =>$datas)

                                           
                                            <div class="product col-md-3 col-xs-6 view-show-all" >
                                                <div class="product-header" href="{{ route('details', $datas->Link) }}">
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
                                          
                                      

                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="view-all-desk desktop"><span>Xem toàn bộ sản phẩm</span></div>
                                 
                                 
                        </div>
                    </div>

                    <div class="w100p show-group-data mobiles-view mobile">
                        <div class="span16 nk_houseware_best_selling_2020_wrapper nk_homepage_houseware_best_selling_2020_wrapper js_done ">
                            <div class="menu-wrap0" style="height: 35px;">
                                <div class="menu-wrap">

                                    <?php 
                                        $dem = 0;


                                    ?>

                                    @foreach($define as $key => $value)
                                    <div class="menu-item {{ $key===0?'active':''  }}" data-id="{{ $key }}" data-uid=""><span>{{ $value }}</span></div>
                                    @endforeach

                                    
                                   
                                </div>
                            </div>


                            <div class="product-item show-data-group" data-uid="4133_3386">
                                <div class="nk-product-cate-style-grid nk-product-collection nk-product- clearfix">
                                    <div id="pagination_contents" class="nk-product nks-fs-sync index-index" data-fs-type="0">

                                        @foreach($data as $key =>$datas)

                                            <?php 

                                                $dem++;
                                                if($dem>4){

                                                    break;

                                                }
                                            ?>
                                            <div class="product col-md-3 col-xs-6">
                                                <div class="product-header" href="{{ route('details', $datas->Link) }}">
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
                                          
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="view-all-desk"><span>Xem toàn bộ sản phẩm</span></div>
                                 
                        </div>
                    </div>
                </div>
            
                   

            </div>    
        </div>    
            
    </div>    
</div>

<script type="text/javascript">


    // setInterval(run, 1000);

    run();
    function run() {
        var hour =   $('#hours').text();
        var minutes =  $('#minutes').text();
        var second =  $('#seconds').text();


        h =  parseInt(hour);
        m = parseInt(minutes);
        s = parseInt(second);
        s--;
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

        if (h < 0){
            $('.time'+key).remove();

            priceSet =  $('.desc-deal'+key+' .price-old').text();

            $('.desc-deal'+key+' .price-old').css('text-decoration','none');

            $('.desc-deal'+key+' .price-new').text(priceSet);

        }  

        // days = parseInt(h)>=24?h/24:0;

        hours = h;

        // $('#days').text(days);

        $('#hours').text(hours<10?'0'+hours:hours);

        $('#minutes').text(m<10?'0'+m:m);

        $('#seconds').text(s<10?'0'+s:s);

        $('#hourss').text(hours<10?'0'+hours:hours);

        $('#minutess').text(m<10?'0'+m:m);

        $('#secondss').text(s<10?'0'+s:s);



        // hour =  h.toString();

        // minutes =  m.toString();
        
        // seconds =  s.toString();


        // $('.time'+key+' .hourss').text(h<10?'0'+hour:''+hour);
        // $('.time'+key+' .secondss').text(s<10?'0'+seconds:''+seconds);
        // $('.time'+key+' .minutess').text(m<10?'0'+minutes:''+minutes); 

       

        // $('.countdown-timer #hour').text(h<10?'0'+hour:''+hour);
        // $('.countdown-timer #second').text(s<10?'0'+seconds:''+seconds);
        // $('.countdown-timer #minute').text(m<10?'0'+minutes:''+minutes); 


        

        // // nhảy time bản mobile khi tắt set giờ riêng
        // $('.mobiles .time .hourss').text(h<10?'0'+hour:''+hour);
        // $('.mobiles .time .secondss').text(s<10?'0'+seconds:''+seconds);
        // $('.mobiles .time .minutess').text(m<10?'0'+minutes:''+minutes); 

        setTimeout(function() {
            run();
        }, 1000);
    }


    // show details khi hover chuot vao san pham tắt tạm trên trang chủ


    // var movingText = $(".gift-info");

    // movingText.hide();

    //   // Xử lý sự kiện khi chuột di chuyển
    // $(".mouse-mover .item").on("mousemove", function(event) {
    //     movingText.show();

    //     var id = $(this).attr("id");

    //     var data = $("#"+id+" .gifts-info").html();

    //     // nếu text dài thì add thêm height để chống tràn

    //     number_text_promotion =  parseInt($("#"+id+" .gifts-info").attr('data-text'));

    //     if(number_text_promotion >300){
    //         $(".gift-info").addClass('max-height');
    //     }

    //     if(number_text_promotion <300 && $(".gift-info").hasClass('max-height')){
    //         $(".gift-info").removeClass('max-height');
    //     }
        
    //     // end check


    //     $(".gift-info").html('');
    //     $(".gift-info").html(data);

    //     var x = event.pageX+15;
    //     var y = event.pageY+15;

    //     // Cập nhật vị trí của chữ theo vị trí của chuột
    //     movingText.css({
    //       "left": x,
    //       "top": y,
    //     });
    //   })
    //   .on("mouseout", function(event) {
    //     // Fade out element when mouse leaves
    //     movingText.hide();
    //   });

    $('.view-show-all').hide();  


    $('.view-all-desk span').click(function () {
        $(this).remove();
        $('.view-show-hide').remove();
        $('.view-show-all').show();  


    })  

    


    
    $('.menu-wrap0 .menu-item').click(function () {
        
        $('.menu-wrap0 .menu-item').removeClass('active');

        $(this).addClass('active');

        var id = $(this).attr('data-id')

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('showGroupData') }}",
            data: {

                id:id
               
            },

           
            success: function(result){

              
               // numberCart = result.find("#number-product-cart").text();

                $('.div-group').html(''); 

                $('.div-group').append(result);
                
            }
        });


    });
</script>

@endsection