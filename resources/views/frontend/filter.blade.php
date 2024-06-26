@extends('frontend.layouts.apps')

@section('content') 
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}?ver=90"> 

       

        <link rel="stylesheet" type="text/css" href="{{ asset('css/categories.css') }}">  

        <style type="text/css">
            

            .item-img_1942{
                height: 290px;
                line-height: 290px;
            }
            .breadcrumb{
                padding: 0;
            }
            .list-pro h3{
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                font-size: 14px;
                line-height: 20px;
                overflow: hidden;
                text-overflow: ellipsis;
                margin-bottom: 5px;

            }
            .list-pro h2{
                margin-left:20px ;
            }
            select, option{
                font-size: 15px !important;
            }


            .list-pro .item-compare span{
                border: 1px solid #e0e0e0;
                border-radius: 2px;
                color: #333;
                display: inline-block;
                font-size: 12px;
                line-height: 12px;
                margin-right: 5px;
                padding: 4px 5px;
                white-space: nowrap;
            }
            .list-pro .lists{
                padding: 10px 15px 20px;
                border-bottom: 1px solid #f3f3f3 !important;
                border-right: 1px solid #f3f3f3 !important;
            }
            .list-pro{
                border-left: 1px solid #f1f1f1;
                border-top: 1px solid #f1f1f1;
            }

            .items-title{
                margin: 10px 0 0 10px;
               
            }

            .lists-id{
                display: none;
            }

            .quatang {
                height: 40px;
                width: 100%;
                /* padding-left: 65px; */
                background-repeat: no-repeat;
                background-color: #e3f5ff;
                background-position-x: left;
                border-radius: 4px;
                text-align: left;
            }

            .option-gift{
                display: flex;
            }

            .quatang img {
                height: 36px;
                margin-top: 2px;
                max-width: 50px;
                padding: 2px;
                border-radius: 3px;
                box-shadow: 0 0 0px 1px #fff;
                width: auto !important;
            }

            .icons-tra-gops{
                background-color: #ddd;
                color: #000;
                border: none; 
            }

            .arrow-filter{
                display: none;
            }

            .filter-show{
                flex-wrap: wrap;
            }

            .c-btnbox img {
               width:59px;
            }


            @media screen and (max-width: 776px){
                .listproduct{
                    display: block;
                }
                .listproduct .item-img.item-img_1942 {
                    height: auto;
                }
                .listproduct img {
                   
                    width: 100%;
                }

                .box-filter{
                    display: flex;
                    overflow: auto;

                }
                .box-filter .form-control {
                    width: 117px !important;
                }

                .filter-show{
                    display: static !important;
                }

                 .filter-desktop{
                    display: none;
                }

                .nk-menu{
                    display: none;
                }
            }  

             @media screen and (min-width:777px) {

                .filter-mobile{
                    display: none;
                }

            }     


            
            .box-filter .form-control{
                width: 100%;
            }
            .block-manu{
                width: 150px;
            }
        
            
        </style>
    @endpush


        <div class="locationbox__overlay"></div>
        <!-- <div class="locationbox">
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
        <div class="locationbox__popup new-popup hide" id="lc_pop--sugg">
            <div class="locationbox__popup--cnt locationbox__popup--suggestion new-locale">
                <div class="flex-block">
                    <i class="icon-location"></i>
                    <p>Hãy chọn <b>địa chỉ cụ thể</b> để chúng tôi cung cấp <b>chính xác</b> th&#x1EDD;i gian giao h&#xE0;ng v&#xE0; t&#xEC;nh tr&#x1EA1;ng h&#xE0;ng.</p>
                </div>
                <div class="btn-block">
                    <a href="javascript:;" class="btn-location" onclick="OpenLocation()"><b>Chọn địa chỉ</b></a>
                    <a href="javascript:;" class="btn-location gray" onclick="SkipLocation()"><b>Đóng</b></a>
                </div>
            </div>
        </div>



        <?php  

            $propery_url = $_GET['property']??'';

            $filter_url  = $_GET['filter']??'';

            $propery_url_id = explode(',',$propery_url);

            $filter_url_id  = explode(',',$filter_url);

            $filter_url_id  = array_unique($filter_url_id);


            // xóa phần tử rỗng trong mảng

            $filter_url_id = array_filter($filter_url_id, function ($value) {
              return !empty($value);
            });



             $propery_url_id = array_filter($propery_url_id, function ($value) {
              return !empty($value);
            });

            $filter_url_show = implode(',', $filter_url_id);

          $manu = ['lg'=>'/images/saker/lg.png', 'tcl'=>'/images/saker/tcl.png', 'samsung'=>'/images/saker/samsung.png', 'sharp'=>'/images/saker/sharp.png', 'sony'=>'/images/saker/sony.png', 'panasonic'=>'/images/saker/panasonic.png', 'electrolux'=>'/images/saker/electrolux.png', 'philips'=>'/images/saker/philips.png', 'funiki'=>'/images/saker/funiki.png', 'hitachi'=>'/images/saker/hitachi.png', 'sanaky'=>'/images/saker/sanaky.png', 'nagakawa'=>'/images/saker/nagakawa.png', 'daikin'=>'/images/saker/daikin.png', 'mitsubishi electric'=>'/images/saker/mitsubishi.png', 'kangaroo'=>'/images/saker/kangaroo.png', 'midea'=>'/images/saker/midea.png', 'mitsubishi'=>'/images/saker/mitsubishi.png'];
            
        ?>
        
        <div class="bsc-block">
            <section>
                <ul class="breadcrumb">
                     <li><a href="{{ route('homeFe') }}">Trang chủ</a></li>
                    @if(isset($ar_list))
                    @foreach($ar_list as $val)


                    <li>
                        <a href="{{ route('details', @$val['link']) }}">{{ @$val['name'] }}</a>
                    </li>

                   
                    @endforeach
                    @endif
                </ul>
            </section>
        </div>
        <div class="top-banner">
            <section>
                <div class="slider-bannertop owl-carousel owl-theme">
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537"><img width=800  src="{{ asset('images/template/banner-category.jpg') }}" alt="tivi chung"  ></a>
                    </div>
                    
                </div>
                <!-- <div class="promote-banner ">
                    <a href="/Banner C&#x1ED1; &#x110;&#x1ECB;nh" class="promote-item">
                    <a aria-label="slide" data-cate="1942" data-place="1538" href="#" onclick="jQuery.ajax({ url: '/bannertracking?bid=43621&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2021/07/banner/TraGop390-97-390x97-1.png" alt="Banner Cố Định"  ></a>
                    </a>
                    <a href="/tivi tr&#x1B0;ng b&#xE0;y" class="promote-item">
                    <a aria-label="slide" data-cate="1942" data-place="1538" href="https://www.dienmayxanh.com/may-doi-tra/tivi?type=7#" onclick="jQuery.ajax({ url: '/bannertracking?bid=45610&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2021/08/banner/390-97-390x97-4.png" alt="tivi trưng bày"  ></a>
                    </a>
                </div> -->
            </section>

        </div>
       
 
        <div class="box-filter top-box  block-scroll-main cate-1942">



            <section>
                <div class="jsfix scrolling_inner scroll-right">
                    <div><h4>Điện máy nguời việt là địa chỉ bán tivi chính hãng uy tín tại Hà Nội. Chúng tôi cam kết tất cả sản phẩm đều là hàng chính hãng, nguyên đai, nguyên kiện, mới 100%.</h4></div>
                    <div class="box-filter block-scroll-main scrolling">

                        @if(!is_array($filter))

                        @if(!empty($filter) && $filter->count()>0)

                        
                        @foreach($filter as $number_key => $filters)
                        <?php
                            $show_filter = $filters->id;
                            // không cho thêm filter đã tồn tại trên url

                            $filter_id_convert = (string)$filters->id;

                            if(in_array($filter_id_convert, $filter_url_id)){

                                $show_filter = '';

                            }

                            $propertyId = cache()->remember('filterId_'.$filters->id, 1000, function () use($filters){

                                $propertyId =  App\Models\property::where('filterId', $filters->id)->get()??'';
                                return $propertyId;
                            });

                            $ar_index_key[$number_key] = [];
                           
                        ?>

                        <div class="filter-item isShowing filter-desktop" propertyid="{{ $filters->id }}">


                            <div class="filter-item__title jsTitle noselecttext showing" data-textorg="Kích cỡ màn hình">
                                <div class="arrow-filter"></div>

                                <?php 

                                    $name_filter = $filters->name;

                                    $data_filter_url = $_GET['property'];

                                    $ar_data_filter_url = explode(',', $data_filter_url);

                                   
                                    foreach($propertyId as $key => $property){

                                        if( in_array($property->id, $ar_data_filter_url) ){

                                            $name_filter = $property->name;

                                            array_push($ar_index_key[$number_key], (string)$property->id);

                                            
                                        }
                                       
                                    }

                                ?>
                                <span>{{ $name_filter }}</span>

                                
                            </div>


                            <?php 

                                // xóa phần tử rỗng trong mảng $ar_data_filter_url

                                $ar_data_filter_url = array_filter($ar_data_filter_url, function ($value) {

                                  return !empty($value);

                                });

                            
                            ?>

                            @if(isset($propertyId))


                               
                            <div class="filter-show" data-groupid="">
                                @foreach($propertyId as $keys => $property)

                                <?php

                                    // $data_filter_url = str_replace($ar_index_key[$number_key], '', $data_filter_url);

                                    // $data_filter_url =  explode(',', $data_filter_url);

                                    $filter_ar = $ar_index_key[$number_key];

                                    $data_filter_url = array_filter($ar_data_filter_url, function ($value) use ($filter_ar){

                                        if(!in_array($value, $filter_ar) &&  !empty($value)){
                                             return $value;
                                        }

                                    });



                                  
                                    $data_filter_url = implode(',', $data_filter_url);


                                ?>
                                
                                <div class="filter-list  props" data-propid="40562">
                                    @if(!empty($manu[strtolower($property->name)]))


                                        <a href="{{ route('details',$link) }}?filter=,{{ $filter_url_show }},{{ $show_filter }}&group_id={{ @$id_cate  }}&property={{ $data_filter_url }},{{ $property->id }}&link={{$link  }}" data-value="{{ $property->id}}" data-value="{{ $property->id}}" data-id="{{ $filters->id }}" class="c-btnbox">
                                            <img src="{{ $manu[strtolower($property->name)] }}" width="68" height="30" alt="{{ $property->name }}">  
                                        </a>

                                        
                                    @else
                                        
                                        <a href="{{ route('details',$link) }}?filter=,{{ $filter_url_show }},{{ $show_filter }}&group_id={{ @$id_cate  }}&property={{ $data_filter_url }},{{ $property->id }}&link={{$link  }}" data-value="{{ $property->id}}" data-value="{{ $property->id}}" data-id="{{ $filters->id }}" class="c-btnbox">
                                            {{ trim($property->name) }}          
                                        </a>
                                       

                                    @endif
                                </div>
                              
                                @endforeach
                                

                                <div class="filter-button filter-button-sticky">
                                    <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                    <a href="javascript:filterPros();" class="btn-filter-readmore">Xem <b class="total-reloading">284</b> kết quả</a>
                                </div>
                            </div>

                            @endif

                        </div>


                        <div class="filter-item block-manu filter-mobile">
                            <select class="form-control" id="selectfilter{{ $filters->id }}" name="selectfilter" onchange='mySelectHandler("{{ $filters->id }}")'>
                                <option value="0">{{ $filters->name }}</option>
                                @if(isset($propertyId))
                                @foreach($propertyId as $property)
                                <option value="{{ $property->id}}"> {{ $property->name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>

                        
                        @endforeach
                        @endif

                        @endif
                    </div>    
                </div>       
            </section>
        </div>

        <?php 

            $get_sort = !empty($_GET['sort'])?$_GET['sort']:'';

            
        ?>
        <section id="categoryPage" class="desktops" data-id="1942" data-name="Tivi" data-template="cate">

            
            
            <div class="box-sort ">
                @if(isset($product_search))
                <p class="sort-total"><b>{{ count($product_search) }}</b> Sản phẩm <strong class="manu-sort"></strong></p>

                @endif
                <div class="sort-select ">
                    <label for="standard-select">Xếp theo</label>
                    <div class="select">
                      <select id="sort-by-option">
                        <option value="id" {{ empty($get_sort)?'selected':'' }}>Nổi bật</option>
                        <option value="asc" {{ $get_sort==='asc'?'selected':'' }}>Giá tăng dần</option>
                        <option value="desc" {{ $get_sort==='desc'?'selected':'' }}>Giá giảm dần</option>
                      </select>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container-productbox">
                <!-- <div id="preloader">
                    <div id="loader"></div>
                </div> -->
                <div class="row list-pro">


                    @if(isset($product_search))
                    <?php $arr_id_pro = []; ?>
                   
                    @foreach($product_search as $value)

                            <?php   

                                $id_product = $value->id;
                                array_push($arr_id_pro, $id_product);

                                $check_deal = App\Models\deal::select('deal_price','start', 'end', 'active')->where('product_id', $value->id)->where('active', 1)->first();

                                $deal_check_add = false;

                                $checkActiveDeal = '';

                                
                                if(!empty($check_deal) && !empty($check_deal->deal_price)){
                                     $now  = Carbon\Carbon::now();
                                    $timeDeal_star = $check_deal->start;
                                    $timeDeal_star =  \Carbon\Carbon::create($timeDeal_star);
                                    $timeDeal_end = $check_deal->end;
                                    $timeDeal_end =  \Carbon\Carbon::create($timeDeal_end);
                                    $timestamp = $now->diffInSeconds($timeDeal_end);

                                    if($now->between($check_deal->start, $check_deal->end)){
                                       
                                        $value->Price = $check_deal->deal_price;
                                        $checkActiveDeal = 1;
                                        $checkActivePd = $check_deal->active??'';
                                        
                                    }
                                    
                                }

                            ?>

                            
                        <div class="col-md-3 col-6 lists">
                            <div class="item  __cate_1942">
                                <a href='{{ route("details", $value->Link ) }}' data-box="BoxCate" class="main-contain">
                                     <span class="icon_tragop icons-tra-gops">Trả góp <i>0%</i></span>
                                    <div class="item-img item-img_1942">
                                        <img class="lazyload thumb" data-src="{{ asset($value->Image) }}" alt="{{ asset($value->Name) }}" style="width:100%"> 
                                    </div>
                                    <div style="height: 38px;">
                                    @if(!empty($checkActiveDeal) && $checkActiveDeal ===1 )
                                        <button type="button" class="btn btn-danger">Flash Deal </button>
                                    @endif
                                    </div>

                                    <div class="items-title">
                                       
                                        <h3 >
                                            {{ $value->Name  }}
                                        </h3>

                                        
                                       <!--  <div class="item-compare">
                                            <span>55 inch</span>
                                            <span>4K</span>
                                        </div> -->
                                        <!-- <div class="box-p">
                                            <p class="price-old black">20.900.000&#x20AB;</p>
                                        </div> -->
                                        
                                        <strong class="price">{{ $value->Price==0?'Liên hệ':number_format(str_replace("\xc2\xa0",'',$value->Price) , 0, ',', '.')}}{{ $value->Price!=0?'đ':''   }}</strong>

                                
                                        <div class="item-rating">
                                            <p>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </p>
                                           
                                        </div>

                                        <?php  

                                            if(!Cache::has('gifts_Fe_'.$value->id)){

                                                        $gifts = gift($value->id);
                        

                                                        if(empty($gifts)){
                                                            $gifts = groupGift($id_cate);
                                                            
                                                            if(empty($gifts)|| empty($id_cate)){

                                                                $gifts =[];
                                                            }
                                                        }
                                                        Cache::put('gifts_Fe_'.$value->id, $gifts,10000000);

                                                    
                                                    }
                                                   
                                                    $gift = Cache::get('gifts_Fe_'.$value->id);


                                                ?>


                                        @if(!empty($gift))

                                            <?php 
                                                $gifts = $gift['gifts'];
                                                $gift = $gift['gift']; 

                                            ?>

                                            {{ $gifts->type ==1?'k/m chọn 1 trong 2':'' }}
                                            <div class="option-gift">

                                                 @foreach($gift as $gifts)

                                                <div class="quatang"><img src="{{ asset($gifts->image) }}"></div>
                                                @endforeach

                                                @if(!empty($gifts->price))

                                                    <?php 

                                                        $id_checkpromotion = $value->promotion_box==1?'':$value->id;

                                                        $price_gift = pricesPromotion($value->Price, $id_checkpromotion)===''?str_replace(',' ,'.', number_format($gifts->price)):pricesPromotion($value->Price, $id_checkpromotion)

                                            
                                                    ?>

                                                    <span> Quà tặng trị giá <strong>{{  $price_gift }}  <sup>đ</sup></strong> </span>
                                                @endif  
                                            </div>
                                           
                                        @endif

                                    </div>
                                    
                                </a>
                                <div class="item-bottom">
                                    <a href="#" class="shiping"></a>
                                </div>
                               <!--  <a href="javascript:void(0)" class="item-ss">
                                    <i></i>
                                    So sánh
                                </a> -->
                            </div>
                        </div>
                        
                    @endforeach


                     <span class="lists-id">{{ json_encode($arr_id_pro) }}</span>
                      
                   
                   @else   

                    <div style="margin-left: 20px;">
                        <h2>Không tìm thấy sản phẩm</h2>
                    </div>
                    
                    @endif


                </div>
                <!-- <div class="view-more ">
                    <a href="javascript:;">Xem thêm <span class="remain">133</span> Tivi</a>
                </div> -->
            </div>


          
            <div class="errorcompare" style="display:none;"></div>
           <!--  <div class="block__banner banner__topzone">
                <a data-cate="0" data-place="1919" href="https://www.topzone.vn/" onclick="jQuery.ajax({ url: '/bannertracking?bid=48557&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2021/12/banner/Frame4879-1200x120.jpg" alt="Promote Topzone" width="1200" height="120"></a>
            </div> -->
            <div class="watched"></div>
            <div class="overlay"></div>
        </section>

        <?php  
            $propery_url = $_GET['property']??'';

            // $propery_url_id = explode(',',$propery_url);

             if(!empty($_GET['filter'])){
                $id_cate = $_GET['group_id']??'';
            }
            
        ?>

       
        @push('script')
        <script type="text/javascript">
            function demo(filters) {

                filers_url = "{{ $_GET['filter'] }}";

                filers_url = filers_url.split(',');

                var propertys =    "{{ $_GET['property']??'' }}";
                propertys = propertys.split(',');

                property = $('#selectfilter'+filters).val();
            
                //Xóa phần tử giống nhau trong mảng
                if(property !=0){
                    
                    if(filers_url.indexOf(filters)>-1){

                        filers_url.splice(filers_url.indexOf(filters));

                        propertys.splice(filers_url.indexOf(filters));

                    }

                    filers_url.push(filters);
                        
                    propertys.push(property);

                }

                
                else{
                    filers_url.splice(filers_url.indexOf(filters));

                    propertys.splice(filers_url.indexOf(filters));

                }

             
                if(filers_url.length>0){
                    propertys = propertys.join(',');

                    filter = filers_url.join(',');

                   @if(!empty($link))

                        
                        filter = filter.replace(",", "");
                        propertys = propertys.replace(",", "");
                        
                        if(filter==''){
                            window.location.href = '{{ route('details',$link) }}';
                        }
                        else{
                            window.location.href = '{{ route('details',$link) }}?filter=,'+filter+'&group_id={{ @$id_cate }}&property=,'+propertys+'&link={{ $link }}';
                        }
                        
                    @endif
                }


             }


            function mySelectHandler(filters){

                property = $('#selectfilter'+filters).val();


                // kiểm tra filter có bị trùng không xóa filter trước + xóa property cùng filter

                if(filter.indexOf(filters)>-1){
                    filter.splice(filter.indexOf(filters),1);
                    propertys.splice(filter.indexOf(filters),1);
                }

                //chỉ lấy giá trị 
                if(property !=0){

                    filter.push(filters);

                    propertys.push(property);

                }
                
                // var filterss['code'] = property; 

                // khi người dùng select option thì gọi hàm
                if(filter.length>0){

                    filter = JSON.stringify(filter);

                    propertys = JSON.stringify(propertys);

                    window.location.href = '{{ route('details',$link) }}?filter=,'+filter+'&group_id={{ @$id_cate }}&property='+propertys+'&link={{ $link }}';

                }

            }

          
                
                $( "#sort-by-option" ).bind( "change", function() {

                    option = $(this).val()==='id'?'':'&sort='+$(this).val();

                    

                    $replace_link = window.location.href;

                    $replace_link= $replace_link.replace('&sort=desc','');

                    $replace_link= $replace_link.replace('&sort=asc','');

                    window.location.href = $replace_link+option;
                    

                });


       


            property_click = [];

            $('.filter-item__title').click(function(){

                property = $(this).parent().attr('propertyid');

                property_click.push(property);

                // trường hợp bấm 2 lần button thì ẩn thuộc tính đi

                if(property_click.pop() ===property){
                    // nếu đang bật thì tắt 

                    if($(this).hasClass('active')){
                        $(this).removeClass('active');
                        $(this).find('.arrow-filter').hide();
                        $(this).parent().find('.filter-show').hide();
                    }
                    else{
                         $('.box-filter .filter-item__title').removeClass('active');
                        $('.box-filter .arrow-filter').hide();
                        $('.box-filter .filter-show').hide();

                        $(this).addClass('active');
                        $(this).find('.arrow-filter').show();
                        $(this).parent().find('.filter-show').css('display', 'flex');
                    }
                    
        
                }
                else{

                    $('.box-filter .filter-item__title').removeClass('active');
                    $('.box-filter .arrow-filter').hide();
                    $('.box-filter .filter-show').hide();

                    $(this).addClass('active');
                    $(this).find('.arrow-filter').show();
                    $(this).parent().find('.filter-show').css('display', 'flex');
                }

            });

             filter = [];

            propertys = [];



            function mySelectHandler(filters){

                property = $('#selectfilter'+filters).val();


                // kiểm tra filter có bị trùng không xóa filter trước + xóa property cùng filter

                if(filter.indexOf(filters)>-1){
                    filter.splice(filter.indexOf(filters),1);
                    propertys.splice(filter.indexOf(filters),1);
                }

                //chỉ lấy giá trị 
                if(property !=0){

                    filter.push(filters);

                    propertys.push(property);

                }
                
                // var filterss['code'] = property; 


                // khi người dùng select option thì gọi hàm
                if(filter.length>0){

                    filter = filter.join(',');

                    propertys = propertys.join(',');
                    
                    @if(!empty($link))
                      
                            window.location.href = '{{ route('details',$link) }}?filter=,'+filter+'&group_id={{ @$id_cate  }}&property=,'+propertys+'&link={{$link  }}';
                            
                    @endif

                }
            }

             $('.filter-list a').click(function() {

                filters  = $(this).attr('data-id'); 

                property = $(this).attr('data-value');

                // kiểm tra filter có bị trùng không xóa filter trước + xóa property cùng filter

                if(filter.indexOf(filters)>-1){
                    filter.splice(filter.indexOf(filters),1);
                    propertys.splice(filter.indexOf(filters),1);
                }

                //chỉ lấy giá trị 
                if(property !=0){

                    filter.push(filters);

                    propertys.push(property);

                }
                
                // var filterss['code'] = property; 


                // khi người dùng select option thì gọi hàm
                if(filter.length>0){

                    filter = filter.join(',');

                    propertys = propertys.join(',');
                    
                    @if(!empty($link))
                      
                            window.location.href = '{{ route('details',$link) }}?filter=,'+filter+'&group_id={{ @$id_cate  }}&property=,'+propertys+'&link={{$link  }}';
                            
                    @endif

                }
                 
             })


            
        </script>
        @endpush
@endsection 

        