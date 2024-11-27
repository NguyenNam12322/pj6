

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
                                        <?php 
                                            $dempd1 = 0;

                                            if(!empty(json_decode($val->product_id))){
                                                $dempd1 = count(json_decode($val->product_id));
                                            }
                                        ?>
                                        
                                        @if($val->id !=7 && $val->id !=71  && $dempd1>0)


                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <i class="{{ $icon_define[$dem] }}"></i>
                                                </div>

                                                 <?php 

                                                    $dem++;
                                                ?>

                                                

                                                <p>
                                                    <a href="{{route('details', $val->link)}}"  data-id="{{ @count(json_decode($val-> product_id)) }}">{{ $val->name??'' }}</a>
                                                    
                                                </p>
                                            </div>

                                            <?php 

                                                $menu_level_2 = $menu->where('active', 1)->where('parent_id', $val->id);

                                            ?>
                                            @if(!empty($menu_level_2)  && $menu_level_2->count()>0)

                                                



                                             <div class="sub-menu tivi-loa-amthanh" style="display: none;">
                                                <div class=" menu-tivi children_sort">
                                                     @foreach($menu_level_2 as $val2) 

                                                    <?php

                                                        $dempd2 = 0;

                                                        if(!empty(json_decode($val2->product_id))){
                                                            $dempd2 = count(json_decode($val2->product_id));
                                                        }
                                                    ?>
                                                    
                                                    <div class="item row2 bg-white">
                                                       
                                                        <?php 

                                                            $menu_level_3 = $menu->where('active', 1)->where('parent_id', $val2->id);

                                                        ?>
                                                        <div class="links">
                                                            <h5 title="Thương hiệu">

                                                                <a class="a-links" href="{{ route('details', $val2->link) }}" >{{ $val2->name??'' }} <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                            
                                                            <ul>

                                                                
                                                                @if(!empty($menu_level_3)  && $menu_level_3->count()>0)
                                                                @foreach($menu_level_3 as $val_3)

                                                                <?php

                                                                    $dempd3 = 0;

                                                                    if(!empty(json_decode($val3->product_id))){
                                                                        $dempd3 = count(json_decode($val3->product_id));
                                                                    }
                                                                ?>

                                                                @if($dempd3>0)
                                                                <li>
                                                                    <p style="">
                                                                        <a title="{{ $val_3->name??'' }}" class="a-links" href="{{ route('details', $val_3->link) }}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span>{{ $val_3->name??'' }} </a>
                                                                    </p>
                                                                </li>

                                                                @endif
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
                                                    <img src="{{ asset('images/template/hoptac.png') }}" width="18px" height="18px" alt="Gia dụng">
                                                </div>
                                                <p>
                                                    <a href="/gia-dung">Gia dụng</a>
                                                  
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