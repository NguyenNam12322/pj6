@extends('frontend.layouts.appsss')

@section('content') 
    @push('style')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}?ver=14"> 
    <style type="text/css">
        .banner_home__ .banner-left{
            padding-left: 0 !important;
        }

        .banner_home__.container {
            padding: 0 80px !important;
        }

        .nk-menu #nk-danh-muc-san-pham-left>ul{
            display: none !important;
        }

        #nk-banner-home .owl-loaded .owl-drag .main-banner{
            width: 100% !important;
        }

        .product{
            margin-right: 7.2px;
            margin-bottom: 7.2px;
        }

        .filter-mobile {
            display: none;
        }


    </style>
    

    @endpush   
    
    <div class="row-fluid">
        <div class="span16 container outstanding">
            <div class="row-fluid">
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

                        <div class="product-item" data-uid="4133_3386">
                            <div class="nk-product-cate-style-grid nk-product-collection nk-product- clearfix">
                                <div id="pagination_contents" class="nk-product nks-fs-sync index-index" data-fs-type="0">

                                    @if(isset($data))
                                    <?php $arr_id_pro = []; $activeDeal = 0;?>
                                    
                                    @foreach($data as $value)
                                    <a
                                        class=""
                                        data-product_id="131995"
                                        product-id="131995"
                                        name="{{ $value->Name }}"
                                        href="{{ route('details', $value->Link ) }}"
                                        link="{{ route('details', $value->Link ) }}"
                                    >
                                        <div class="product-slide">
                                            <div class="product">
                                                <div class="product-header" href="{{ route('details', $value->Link ) }}">
                                                    <div class="top-right">
                                                        <div class="product-feature-badge-item installment"><span>Trả góp 0%</span></div>
                                                    </div>
                                                    <div class="product-image">
                                                        <a href="{{ route('details', $value->Link ) }}">
                                                            <img
                                                                class="ls-is-cached lazyloaded"
                                                                
                                                                width="180px"
                                                                height="180px"
                                                                src="{{ asset($value->Image) }}"
                                                            />
                                                        </a>
                                                    </div>
                                                   
                                                </div>
                                                <div class="product-body">
                                                    <div class="product-feature-badge"></div>
                                                        <div class="product-title"><a href="{{ route('details', $value->Link ) }}">{{ $value->Name }}</a></div>
                                                    <div class="product-price">
                                                        <p class="final-price">{{ @str_replace(',' ,'.', number_format($value->Price)) }}đ</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product-footer"></div>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach

                                    @endif
                                    


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    
@endsection 

        
