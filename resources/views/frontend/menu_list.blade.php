<style type="text/css">
    #nk-danh-muc-san-pham-left ul{

        background: linear-gradient(0deg,#d1a94e,#fdf5a1,#cfac54);

    }

    .sub-menu ul{
        background: #fff !important;
    }

    .delivery-free{
        margin-left: 40px;
    }
    .buy-project{
        width: 159px;
    }

    .nk-danh-muc-trang-chu h3{
        color: #000 !important;
    }

     .nk-menu #nk-danh-muc-san-pham-left>h3 b{
        font-weight: 700;
     }



    @media all and (max-width: 768px) {

         .lst-quickfilter p{
            width: 91px;
        }

        .nk-menu #nk-danh-muc-san-pham-left>h3{
            color: #000;
        }

        .fa-navicon:before, .fa-reorder:before, .fa-bars:before{
            color: #000;
        }

        .show-bar{
            background: linear-gradient(0deg,#d1a94e,#fdf5a1,#cfac54);
        }

    }    

</style>

<?php 

    $icon_define = ['nki-menu-television', 'nki-menu-fridge', 'nki-menu-air-conditioner icon-new', 'nki-menu-washer', 'nki-menu-television','nki-menu-television','nki-menu-television','nki-menu-television','nki-menu-television'];
?>
<div class="row-fluid ">
    <div class="span16 nk-menu">
        <div class="row-fluid ">
            <div class="span16 container">
                <div class="row-fluid ">
                    <div class="span16">
                        <div class="row-fluid ">
                            <div class="span4 wrap-grid-menu">
                                <div id="nk-danh-muc-san-pham-left" class="nk-danh-muc-trang-chu">
                                    <h3>
                                        <i class="nki-menu list-show"></i>
                                        <b>DANH MỤC SẢN PHẨM</b>
                                    </h3>
                                    <ul>
                                        <?php 

                                            $menu = DB::table('group_product')->get();
                                            $dem = 0;
                                        ?>
                                        @if(!empty($menu)  && $menu->count()>0)

                                        <?php 

                                            $menu_lv_1 = $menu->where('level', 0)->where('active', 1)->where('parent_id', 0);
                                        ?>

                                        @foreach($menu_lv_1 as $val)
                                        @if($val->id !=7 && $val->id !=71)
                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <i class="{{ $icon_define[$dem] }}"></i>
                                                </div>

                                                 <?php 

                                                    $dem++;
                                                ?>

                                                <!-- level1 -->

                                                <p>
                                                    <a href="{{route('details', $val->link)}}">{{ $val->name??'' }}</a>
                                                    
                                                </p>
                                            </div>

                                            <?php 

                                                $menu_level_2 = $menu->where('active', 1)->where('parent_id', $val->id);

                                            ?>
                                            @if(!empty($menu_level_2)  && $menu_level_2->count()>0)

                                             <div class="sub-menu tivi-loa-amthanh" style="display: none;">
                                                <div class=" menu-tivi children_sort">
                                                     @foreach($menu_level_2 as $val2) 
                                                    <div class="item row2 bg-white">
                                                       
                                                        <!-- level2 -->

                                                        

                                                        <?php 

                                                            $menu_level_3 = $menu->where('active', 1)->where('parent_id', $val2->id);

                                                        ?>
                                                        <div class="links">
                                                            <h5 title="Thương hiệu">

                                                                <a class="a-links" href="{{ route('details', $val2->link) }}">{{ $val2->name??'' }} <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                            
                                                            <ul>

                                                                <!-- level3 -->
                                                                 @if(!empty($menu_level_3)  && $menu_level_3->count()>0)
                                                                @foreach($menu_level_3 as $val_3)
                                                                <li>
                                                                    <p style="">
                                                                        <a title="{{ $val_3->name??'' }}" class="a-links" href="{{ route('details', $val_3->link) }}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span>{{ $val_3->name??'' }} </a>
                                                                    </p>
                                                                </li>
                                                                @endforeach
                                                                @endif
                                                               
                                                               
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                    @endforeach

                                                   
                                                    
                                                </div>
                                            </div> 
                                            @endif
                                                
                                        </li>
                                        @endif

                                        

                                        @endforeach

                                        @endif
                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <img src="{{ asset('images/template/tuvan.png') }}" width="18px" height="18px" alt="may-loc-nuoc">
                                                </div>
                                                <p>
                                                    <a href="#">Dịch vụ, hỗ trợ</a>
                                                  
                                                </p>
                                            </div>
                                           
                                        </li>

                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <img src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/may-loc-nuoc.webp" width="18px" height="18px" alt="may-loc-nuoc">
                                                </div>
                                                <p>
                                                    <a href="#">Thông tin hữu ích</a>
                                                  
                                                </p>
                                            </div>
                                           
                                        </li>

                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <img src="{{ asset('images/template/hoptac.png') }}" width="18px" height="18px" alt="Cộng tác viên Affiate">
                                                </div>
                                                <p>
                                                    <a href="#">Cộng tác viên Affiate</a>
                                                  
                                                </p>
                                            </div>
                                           
                                        </li>

                                    </ul>
                                </div>

                               
                            </div>
                            <div class="span12 wrap-grid-menu-right banner-ads-text">
                                <div class="" data-block="2864">
                                    <div class="header-menu head-menu">
                                        <div class="header-menu__navs">
                                            <a class="navs-item-link delivery-free" href="javascript:void(0)">
                                                Giao lắp chuyên nghiệp </a>
                                            <div class="hr-vertical">|</div>
                                            <a class="navs-item-link" href="javascript:void(0)">
                                               Bảo hành nhanh gọn </a>
                                            <div class="hr-vertical">|</div>
                                            <a class="navs-item-link" href="javascript:void(0)">
                                               Tổng hợp khuyến mãi </a>
                                            <div class="hr-vertical">|</div>
                                            <a class="navs-item-link buy-project" href="javascript:void(0)">
                                                Mua hàng Dự Án </a>
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