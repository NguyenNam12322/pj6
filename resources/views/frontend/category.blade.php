@extends('frontend.layouts.appsss')

@section('content') 
    @push('style')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}?ver=15"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/detail1fe.css') }}?ver=12">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}?ver=22">
    <style type="text/css">

        @media only screen and (max-width: 600px) {

            .nk-menu{
                display: none;
            }
            .box-links{
                display: block;
            }

            .nk_homepage_houseware_best_selling_2020_wrapper{
                z-index: 0;
            }

            .lst-quickfilter {
                display: flex;
                flex-wrap: unset;
                overflow-x: auto;
            }


        }   

        .not-found{
/*            font-size: 25px;*/
            font-weight: bold;
            color: red;
        }

        .nk-header .container{
            height: 100% !important;
        }


        .box-links img{
            height: 13px !important;

        }     
        .banner_home__ .banner-left{
            padding-left: 0 !important;
        }

        .banner_home__.container {
            padding: 0 80px !important;
        }

        .nk-menu #nk-danh-muc-san-pham-left>ul{
            display: none;
        }

        #nk-banner-home .owl-loaded .owl-drag .main-banner{
            width: 100% !important;
        }

        .nk-banner-homes{
            display: none;
        }
/*
        .product{
            margin-right: 7.2px;
            margin-bottom: 7.2px;
        }*/

        .filter-show{
            z-index: 9999 !important;
        }

        .filter-mobile {
            display: none;
        }

        .nk-menu #nk-danh-muc-san-pham-left:hover>ul {
            display: block;
        }


    </style>
    

    @endpush   

    <?php 

         $manu = ['lg'=>'/images/saker/lg.png', 'tcl'=>'/images/saker/tcl.png', 'samsung'=>'/images/saker/samsung.png', 'sharp'=>'/images/saker/sharp.png', 'sony'=>'/images/saker/sony.png', 'panasonic'=>'/images/saker/panasonic.png', 'electrolux'=>'/images/saker/electrolux.png', 'philips'=>'/images/saker/philips.png', 'funiki'=>'/images/saker/funiki.png', 'hitachi'=>'/images/saker/hitachi.png', 'sanaky'=>'/images/saker/sanaky.png', 'nagakawa'=>'/images/saker/nagakawa.png', 'daikin'=>'/images/saker/daikin.png', 'mitsubishi electric'=>'/images/saker/mitsubishi.png', 'kangaroo'=>'/images/saker/kangaroo.png', 'midea'=>'/images/saker/midea.png', 'mitsubishi'=>'/images/saker/mitsubishi.png', 'hisense'=>'/uploads/icon/431.png'];
    ?>

    <div class="row-fluid">
        <div class="span16 container outstanding">
            <div class="row-fluid">
                @if(count($data) ==0)
        
                    <span class="not-found">Không tìm thấy sản phẩm đã chọn</span>

                @endif
                <div class="w100p">
                    <div class="span16 nk_houseware_best_selling_2020_wrapper nk_homepage_houseware_best_selling_2020_wrapper js_done">
                        <!-- <div class="menu-wrap0" style="height: 35px;">
                            <div class="menu-wrap">
                                <div class="menu-item active" id="menu_item_4133_3386" data-uid="4133_3386"><span>Nổi bật</span></div>
                                <div class="menu-item" id="menu_item_4133_3395" data-uid="4133_3395"><span>Máy lạnh</span></div>
                                <div class="menu-item" id="menu_item_4133_3400" data-uid="4133_3400"><span>Tủ lạnh</span></div>
                                <div class="menu-item" id="menu_item_4133_3405" data-uid="4133_3405"><span>Máy giặt</span></div>
                                <div class="menu-item" id="menu_item_4133_3410" data-uid="4133_3410"><span>Gia dụng</span></div>
                                <div class="menu-item" id="menu_item_4133_3430" data-uid="4133_3430"><span>Máy xay sinh tố</span></div>
                                <div class="menu-item" id="menu_item_4133_3425" data-uid="4133_3425"><span>Máy lọc nước</span></div>
                                <div class="menu-item" id="menu_item_4133_3390" data-uid="4133_3390"><span>Tivi</span></div>
                                <div class="menu-item" id="menu_item_4133_3411" data-uid="4133_3411"><span>Điện thoại</span></div>
                                <div class="menu-item" id="menu_item_4133_3420" data-uid="4133_3420"><span>Laptop</span></div>
                            </div>
                        </div> -->

                        <?php 

                            $filtername = '';

                            if(!empty($ar_list[1]['name'])){

                                $convert = ['Thương hiệu'=>'Hãng Sản Xuất', 'Kích cỡ tivi'=>'Kích Thước', 'Loại tivi'=>'Loại Tivi', 'Kiểu giặt'=>'Loại Máy Giặt', 'Khối lượng giặt'=>'Khối lượng giặt', 'Dung tích' => 'Dung tích', 'Loại tủ'=>'Kiểu tủ','Công suất'=>'Công suất làm lạnh'];

                                $filtername = $convert[$ar_list[1]['name']]??'';

                                
                            }
            
                        ?>


                        @if(isset($filter))
                        @foreach($filter as $filters)
                        <?php

                            $propertyId = cache()->remember('filterId_'.$filters->id, 1000, function () use($filters){

                                $propertyId =  App\Models\property::where('filterId', $filters->id)->get()??'';
                                return $propertyId;
                            });
                           
                        ?>

                        @if(!empty($filters->name) && $filters->name !=  $filtername) 

                        <div class="filter-item isShowing filter-desktop" propertyid="{{ $filters->id }}">

                            <div class="filter-item__title jsTitle noselecttext showing">
                                <div class="arrow-filter"></div>
                                <span>{{ $filters->name }} </span>
                            </div>



                            @if(isset($propertyId))
                               
                            <div class="filter-show" data-groupid="">
                                @foreach($propertyId as $property)
                                @if(isset($propertyId))
                                <div class="filter-list  props" data-propid="40562">
                                    @if(!empty($manu[strtolower($property->name)]))


                                        <?php 

                                            $link_cate = App\Models\groupProduct::where('name', 'like', '%'.$name_cate_show.' '.$property->name)->first();

                                            $linkss = $link_cate->link??'';

                                        ?>

                                        @if(!empty($linkss))
                                       
                                        <a href="{{ route('details', $linkss)  }}" data-value="{{ $property->id}}" data-id="{{ $filters->id }}" class="c-btnbox">
                                            <img src="{{ $manu[strtolower($property->name)] }}" width="68" height="30" alt="{{ $property->name }}">          
                                        </a>
                                        @endif

                                    @else

                                    <a href="{{ route('details',$link) }}?filter=,{{ $filters->id }}&group_id={{ @$id_cate  }}&property=,{{ $property->id }}&link={{$link  }}" data-value="{{ $property->id}}" data-value="{{ $property->id}}" data-id="{{ $filters->id }}" class="c-btnbox">
                                        
                                        {{ trim($property->name)  }}   
                                               
                                    </a>
                                    @endif
                                </div>
                                @endif
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



                        @endif
                        
                        @endforeach
                        @endif

                         <?php 
                             $arr_info_filter[1] = [14,24];
                            $arr_info_filter[3] = [22,20];
                            $arr_info_filter[2] = [17,15];
                            $arr_info_filter[4] = [34,30];

                        ?>    

                           
                            


                        @if(!empty($id_cate) && !empty($arr_info_filter[$id_cate]))  

                        <?php 

                            $property_show = Cache::get('filterId_'.$arr_info_filter[$id_cate][0]);

                            $saker_show  = Cache::get('filterId_'.$arr_info_filter[$id_cate][1])
                        ?>


                        <div class="box-quicklink block-scroll-main filter-desktop box-links">
                            <p class="quick-filter-title">Chọn  theo loại {{ $name_cate_show }}</p>

                           
                            
                            <div class="lst-quickfilter has-image">

                                @if(!empty($property_show) && $property_show->count()>0)


                                @foreach($property_show as $value)

                                <?php 

                                    $link_cate = App\Models\groupProduct::where('name', 'like', '%'.$name_cate_show.' '.$value->name)->first();

                                    $linkss = $link_cate->link??'';

                                ?>

                              
                                <a href="{{ route('details', $linkss)  }}"  data-index="4" class="box-quicklink__item bd-radius quicklink-logo">
                                    <img src="{{ asset('uploads/icon/'.$value->id.'.png') }}" width="30" alt="{{ $value->name }}" />

                                    @if($id_cate != 1)

                                    <p>{{ $value->name }}</p>
                                    
                                    @endif

                                </a>
                              

                                @endforeach

                                @endif
                            </div>
                            <div class="clearfix"></div>

                            <div class="lst-quicklink">

                                <p class="quick-link-title">Tìm kiếm nhiều:</p>


                               

                                @if(!empty($saker_show) && $saker_show->count()>0)


                                @foreach($saker_show as $value)



                                @if(!empty($manu[strtolower($value->name)] ))


                                <a href="{{ route('details',$link) }}?filter=,{{ $arr_info_filter[$id_cate][1] }}&group_id={{ @$id_cate  }}&property=,{{ $value->id }}&link={{$link  }}"  data-index="1" class="box-quicklink__item bd-radius quicklink-logo">
                                    <img src="{{ $manu[strtolower($value->name)] }}" width="30" class="no-text" />
                                </a>

                                @else

                                <a href="{{ route('details',$link) }}?filter=,{{ $arr_info_filter[$id_cate][1] }}&group_id={{ @$id_cate  }}&property=,{{ $value->id }}&link={{$link  }}"class="c-btnbox">
                                        {{ trim($value->name)}}            
                                    </a>
                                @endif
                                @endforeach
                                @endif
                               
                            </div>
                        </div>

                        @endif

                        @if(isset($data))

                        <div class="product-item" >
                            <div class="nk-product-cate-style-grid nk-product-collection nk-product- clearfix">
                                <div id="pagination_contents" class="nk-product nks-fs-sync index-index" data-fs-type="0">

                                   
                                    <?php $arr_id_pro = []; $activeDeal = 0;?>
                                    
                                    @foreach($data as $datas)
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
                                                <p class="final-price">{{  @convert_price($datas->Price) }} </p>
                                                
                                            </div>
                                        </div>
                                        <div class="product-footer"></div>
                                    </div>
                                    @endforeach

                                   
                                    


                                </div>
                            </div>
                        </div>

                         @else

                        <h3>Không tìm thấy sản phẩm ở mục đã chọn</h3>

                        @endif
                    </div>
                </div>
            </div>
        </div>        
    </div>
    
@endsection 

@push('js')

<script type="text/javascript">

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
</script>

@endpush

        
