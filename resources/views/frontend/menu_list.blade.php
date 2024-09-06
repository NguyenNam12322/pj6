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
<div class="row-fluid ">
    <div class="span16 nk-menu">
        <div class="row-fluid ">
            <div class="span16 container">
                <div class="row-fluid ">
                    <div class="span16 row">
                        <div class="row-fluid ">
                            <div class="span4 wrap-grid-menu">
                                <div id="nk-danh-muc-san-pham-left" class="nk-danh-muc-trang-chu">
                                    <h3>
                                        <i class="nki-menu list-show"></i>
                                        <b>DANH MỤC SẢN PHẨM</b>
                                    </h3>
                                    <ul>
                                        <a href="">
                                            <li class="left-menu">
                                                <div class="menu-item">
                                                    <div class="icon">
                                                        <i class="nki-menu-television"></i>
                                                    </div>
                                                    <p>
                                                        <a href="{{route('details','ti-vi')}}">Tivi</a>
                                                        
                                                    </p>
                                                </div>
                                                 <div class="sub-menu tivi-loa-amthanh" style="display: none;">
                                                    <div class=" menu-tivi children_sort">
                                                        <div class="item row2 bg-white">
                                                            <!-- <div class="links">
                                                                <h5 title="Tivi">
                                                                    <a class="a-links" href="{{route('details','ti-vi')}}">Tivi <span class="nk-sticker">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </span>
                                                                    </a>
                                                                </h5>
                                                            </div> -->
                                                            <div class="links">
                                                                <h5 title="Thương hiệu">

                                                                    <a class="a-links" href="{{ route('details', 'thuong-hieu-tivi') }}">Thương hiệu <span class="nk-sticker">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </span>
                                                                    </a>
                                                                </h5>
                                                                <ul>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Samsung" class="a-links" href="{{route('details','tivi-samsung')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Samsung </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Sony" class="a-links" href="{{route('details','tivi-sony')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Sony </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="LG" class="a-links" href="{{route('details','tivi-lg')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> LG </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="TCL" class="a-links" href="{{route('details','tivi-tcl')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> TCL </a>
                                                                        </p>
                                                                    </li>
                                                                   
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Philips" class="a-links" href="{{route('details','tivi-philips')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Philips </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Sharp" class="a-links" href="{{route('details','tivi-sharp')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Sharp </a>
                                                                        </p>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item row2 bg-gray">
                                                            <!-- <div class="links">
                                                                <h5 title="Kích thước">
                                                                    <a class="a-links" href="#">Kích thước <span class="nk-sticker">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </span>
                                                                    </a>
                                                                </h5>
                                                                <ul>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Từ 27&quot; - 43&quot;" class="a-links" href="">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Từ 27" - 43" </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Từ 44&quot; - 55&quot; " class="a-links" href="">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Từ 44" - 55" </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Từ 56&quot; - 65&quot;" class="a-links" href="">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Từ 56" - 65" </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Từ 66&quot; - 75&quot;" class="a-links" href="">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Từ 66" - 75" </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Trên 75&quot;" class="a-links" href="">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Trên 75" </a>
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div> -->
                                                            <div class="links">
                                                                <h5 title="Loại Tivi">
                                                                    <a class="a-links" href="/tivi">Loại Tivi <span class="nk-sticker">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </span>
                                                                    </a>
                                                                </h5>
                                                                <ul>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Tivi QLED" class="a-links" href="{{route('details','tivi-qled')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Tivi QLED </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Tivi OLED" class="a-links" href="{{route('details','tivi-oled')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Tivi OLED </a>
                                                                        </p>
                                                                    </li>
                                                                    
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Tivi 8K" class="a-links" rel="nofollow" href="{{route('details','8k')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Tivi 8K </a>
                                                                        </p>
                                                                    </li>
                                                                   
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Smart Tivi" class="a-links" href="{{route('details','smart-tivi')}}">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Smart Tivi </a>
                                                                        </p>
                                                                    </li>
                                                                   
                                                                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div> 
                                            </li>
                                        </a>
                                            

                                       
                                        

                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <i class="nki-menu-fridge"></i>
                                                </div>
                                                <p>
                                                    <a href="/tu-lanh">Tủ lạnh</a>
                                                    
                                                </p>
                                            </div>

                                            <div class="sub-menu tivi-loa-amthanh" style="display: none;">
                                                <div class=" menu-tivi children_sort">
                                                    <div class="item row2 bg-white">
                                                        <div class="links">
                                                            <h5 title="Tivi">
                                                                <a class="a-links" href="{{route('details','tu-lanh')}}">Tủ lạnh <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div class="links">
                                                            <h5 title="Thương hiệu">

                                                                <a class="a-links" href="{{ route('details', 'thuong-hieu-tivi') }}">Thương hiệu <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>

                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Tủ lạnh Hitachi" class="a-links" href="{{route('details','tu-lanh-hitachi')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh Hitachi </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Tủ lạnh Panasonic" class="a-links" href="{{route('details','tu-lanh-panasonic')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh Panasonic </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Tủ lạnh Samsung" class="a-links" href="{{route('details','tu-lanh-samsung')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh Samsung </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Tủ lạnh Sharp" class="a-links" href="{{route('details','tu-lanh-sharp')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh Sharp </a>
                                                                    </p>
                                                                </li>
                                                               
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Philips" class="a-links" href="{{route('details','tu-lanh-lg')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh LG </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sharp" class="a-links" href="{{route('details','tivi-sharp')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Sharp </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sharp" class="a-links" href="{{route('details','tu-lanh-funiki')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh Funiki </a>
                                                                    </p>
                                                                </li>

                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sharp" class="a-links" href="{{route('details','tu-lanh-mitsubishi')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh Mitsubishi </a>
                                                                    </p>
                                                                </li>

                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sharp" class="a-links" href="{{route('details','tu-lanh-hitachi')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh Hitachi </a>
                                                                    </p>
                                                                </li>
                                                               
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="item row2 bg-gray">
                                                        <div class="links">
                                                            <h5 title="Kích thước">
                                                                <a class="a-links" href="#">Dung tích <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>

                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Từ 27&quot; - 43&quot;" class="a-links" href="{{route('details','duoi-150-lit')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Dưới 150 lít </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Từ 44&quot; - 55&quot; " class="a-links" href="{{route('details','tu-150-200-lit')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Từ 150-200 lít </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Từ 56&quot; - 65&quot;" class="a-links" href="{{route('details','tu-300-400-lit')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Từ 300-400 lít</a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Từ 66&quot; - 75&quot;" class="a-links" href="{{route('details','tu-400-500-lit')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Từ 400-500 lít </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Trên 75&quot;" class="a-links" href="{{route('details','tu-500-600-lit')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Từ 500-600 lít </a>
                                                                    </p>
                                                                </li>

                                                                <li>
                                                                    <p style="">
                                                                        <a title="Trên 75&quot;" class="a-links" href="{{route('details','tren-600-lit')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Trên 600 lít </a>
                                                                    </p>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                        <div class="links">
                                                            <h5 title="Loại Tivi">
                                                                <a class="a-links" href="/tivi">Loại Tủ <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>

                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Tivi QLED" class="a-links" href="{{route('details','tu-lanh-mini')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh mini </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Tivi OLED" class="a-links" href="{{route('details','tu-lanh-ngan-da-tren')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh ngăn đá trên </a>
                                                                    </p>
                                                                </li>
                                                                
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Tivi 8K" class="a-links" rel="nofollow" href="{{route('details','tu-lanh-ngan-da-duoi')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh ngăn đá dưới </a>
                                                                    </p>
                                                                </li>
                                                               
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Smart Tivi" class="a-links" href="{{route('details','tu-lanh-side-by-side')}}">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ lạnh side by side </a>
                                                                    </p>
                                                                </li>
                                                               
                                                            
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div> 
                                           
                                        </li>

                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <i class="nki-menu-air-conditioner icon-new"></i>
                                                </div>
                                                <p>
                                                    <a href="/may-lanh">Máy lạnh</a>
                                                    <!-- <a href="/quat">Quạt</a> -->
                                                   
                                                </p>
                                            </div>
                                            <div class="sub-menu may-lanh" style="display: none;">
                                                <div class=" menu-maylanh children_sort">
                                                    <div class="item row2 bg-white">
                                                        <div class="links">
                                                            <h5 title="Máy lạnh">
                                                                <a class="a-links" href="/may-lanh/">Máy lạnh <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                        </div>

                                                         


                                                        <div class="links">
                                                            <h5 title="Thương hiệu">
                                                                <span class="js_hidden_link" data-url="L21heS1sYW5oLw==">Thương hiệu 
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </span>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Panasonic" class="a-links" href="/may-lanh-panasonic/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lạnh Daikin </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Daikin" class="a-links" href="/may-lanh-mitsubishi">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lạnh Mitsubishi </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Toshiba" class="a-links" href="/may-lanh-lg">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lạnh LG </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Casper" class="a-links" href="/may-lanh-sharp">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lạnh Sharp </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="LG" class="a-links" href="/may-lanh-samsung/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lạnh Samsung </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Samsung" class="a-links" href="/may-lanh-nagakawa/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lạnh Nagakawa </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sharp" class="a-links" href="/may-lanh-midea/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lạnh Midea </a>
                                                                    </p>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="item row2 bg-gray">
                                                        <div class="links">
                                                            <h5 title="Công suất làm lạnh">
                                                                <span class="js_hidden_link" data-url="L21heS1sYW5oLw==">Công suất làm lạnh
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </span>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="1 HP" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> 1 HP </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="1.5 HP" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> 1.5 HP </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="2 HP" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> 2 HP </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="2.5 HP" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> 2.5 HP </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="links">
                                                            <div class="links">
                                                                <h5 title="Quạt - sưởi">
                                                                    <span class="js_hidden_link" data-url="L3F1YXQtdmkv">Tiết kiệm điện <span class="nk-sticker">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </span>
                                                                    </span>
                                                                </h5>
                                                                <ul>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Quạt điều hòa" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/quat-vi/?features_hash=65-148987-148986-5954">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Có tiết kiệm điện </a>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p style="">
                                                                            <a title="Quạt đứng" class="a-links" rel="nofollow">
                                                                                <span class="nki-sort-next ">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </span> Không tiết kiệm </a>
                                                                        </p>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </li>

                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <i class="nki-menu-washer"></i>
                                                </div>
                                                <p>
                                                    <a href="/may-giat">Máy giặt</a>
                                                    <!-- <a href="/may-say-quan-ao">Máy sấy</a>
                                                    <a href="/binh-nong-lanh">Máy nước nóng</a> -->
                                                </p>
                                            </div>
                                            <div class="sub-menu may-giat-may-say" style="display: none;">
                                                <div class=" menu-maygiat children_sort">
                                                    <div class="item row2 bg-white">
                                                        <div class="links">
                                                            <h5 title="Máy giặt">
                                                                <a class="a-links" href="/may-giat">Máy giặt <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div class="links">
                                                            <h5 title="Thương hiệu">
                                                                <a class="a-links" href="#">Thương hiệu <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="LG" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> LG </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Electrolux" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Electrolux </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Samsung" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Samsung </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Toshiba" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Toshiba </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Panasonic" class="a-links" href="/may-giat-panasonic/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Panasonic </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="AQUA" class="a-links" href="/may-giat-aqua/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> AQUA </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Whirlpool" class="a-links" href="/may-giat-whirlpool/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Whirlpool </a>
                                                                    </p>
                                                                </li>
                                                                
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sharp" class="a-links" href="/may-giat-sharp/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Sharp </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="item row2 bg-gray">
                                                        <div class="links">
                                                            <h5 title="Loại máy giặt">
                                                                <a class="a-links" href="">Loại máy giặt <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Cửa trước" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Cửa trước </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Cửa trên" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Cửa trên </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Lồng đôi" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Lồng đôi </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Tủ chăm sóc quần áo" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Tủ chăm sóc quần áo </a>
                                                                    </p>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                        <div class="links">
                                                            <h5 title="Khối lượng">
                                                                <a class="a-links" href="#">Khối lượng <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Trên 10kg" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Trên 10kg </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Từ 9kg đến 10kg" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Từ 9kg đến 10kg </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Từ 8kg đến 9kg" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Từ 8kg đến 9kg </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Dưới 8kg" class="a-links" href="">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Dưới 8kg </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="item row1 bg-white">
                                                        <div class="links">
                                                            <h5 title="Máy sấy">
                                                                <a class="a-links" href="/may-say-quan-ao/">Máy sấy <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Electrolux" class="a-links" href="/may-say-quan-ao-electrolux/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Electrolux </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Samsung" class="a-links" rel="nofollow" href="/may-say-quan-ao-samsung/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Samsung </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="LG" class="a-links" rel="nofollow" href="/may-say-quan-ao-lg/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> LG </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="AQUA" class="a-links" rel="nofollow" href="/may-say-quan-ao-aqua/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> AQUA </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Casper" class="a-links" rel="nofollow" href="/may-say-quan-ao-casper/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Casper </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Candy" class="a-links" href="/may-say-quan-ao-candy/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Candy </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Whirlpool" class="a-links" href="/may-say-quan-ao-whirlpool/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Whirlpool </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy sấy 8-10kg" class="a-links" href=""> Máy sấy 8-10kg </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy sấy trên 10kg" class="a-links" href=""> Máy sấy trên 10kg </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy sấy dưới 10 triệu" class="a-links" href=""> Máy sấy dưới 10 triệu </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy sấy trên 10 triệu" class="a-links" href=""> Máy sấy trên 10 triệu </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="item row2 bg-gray">
                                                        <div class="links">
                                                            <h5 title="Máy nước nóng">
                                                                <a class="a-links" href="/may-nuoc-nong/">Máy nước nóng <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Ariston" class="a-links" href="/may-nuoc-nong-ariston/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Ariston </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Panasonic" class="a-links" href="/may-nuoc-nong-panasonic/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Panasonic </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Ferroli" class="a-links" href="/may-nuoc-nong-ferroli/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Ferroli </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Centon" class="a-links" href="/may-nuoc-nong-centon/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Centon </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Electrolux" class="a-links" href="/may-nuoc-nong-electrolux/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Electrolux </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Legend" class="a-links" href="/may-nuoc-nong-legend/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Legend </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Anpha" class="a-links" href="/may-nuoc-nong-alpha/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Anpha </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Casper" class="a-links" href="/may-nuoc-nong-casper/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Casper </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Trực tiếp không bơm tăng áp" class="a-links" href="/may-nuoc-nong/?features_hash=103-6010_104-6159"> Trực tiếp không bơm tăng áp </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Trực tiếp có bơm tăng áp" class="a-links" href="/may-nuoc-nong/?features_hash=103-6010_104-6011"> Trực tiếp có bơm tăng áp </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Gián tiếp" class="a-links" href="/may-nuoc-nong/?features_hash=103-6047"> Gián tiếp </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        

                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <img src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/noi chien-01.webp" width="17px" height="17px" alt="noi chien">
                                                </div>
                                                <p>
                                                    <a href="/gia-dung/">Điện gia dụng</a>
                                                    <!-- <a href="/may-hut-bui/">Hút bụi</a>
                                                    <a href="/noi-chien-khong-dau/">Nồi chiên</a> -->
                                                </p>
                                            </div>

                                            
                                        </li>
                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <img src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/noi com-01.webp" width="17px" height="17px" alt="noi com">
                                                </div>
                                                <p>
                                                    <a href="/gia-dung/">Đồ nhà bếp</a>
                                                   
                                                </p>
                                            </div>
                                            <!-- <div class="sub-menu gia-dung" style="display: none;">
                                                <div class=" menu-giadung children_sort">
                                                    <div class="item row1 bg-white">
                                                        <div class="links">
                                                            <h5 title="Đồ dùng nhà bếp"> Đồ dùng nhà bếp </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Nồi cơm điện" class="a-links" href="/noi-com-dien/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Nồi cơm điện </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Lò vi sóng" class="a-links" href="/lo-vi-song-microwave/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Lò vi sóng </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Nồi chiên không dầu" class="a-links" href="/noi-chien/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Nồi chiên không dầu </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Bếp từ" class="a-links" href="/bep-dien/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Bếp từ </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Bếp hồng ngoại" class="a-links" href="/bep-tu-hong-ngoai">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Bếp hồng ngoại </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Bếp gas" class="a-links" href="/bep-gas/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Bếp gas </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <span title="Máy hút khói" class="js_hidden_link" data-url="L21heS1odXQtbXVpLw==">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy hút khói </span>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Nồi áp suất" class="a-links" href="/noi-ap-suat/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Nồi áp suất </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Thiết bị nướng" class="a-links" href="/lo-nuong-vi-nuong/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Thiết bị nướng </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Nồi chức năng" class="a-links" href="/noi-da-nang/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Nồi chức năng </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Lẩu điện" class="a-links" href="/lau-dien-da-nang/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Lẩu điện </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Bình đun siêu tốc" class="a-links" href="/am-nuoc-binh-nuoc/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Bình đun siêu tốc </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="item row2 bg-gray">
                                                        <div class="links">
                                                            <h5 title="Đồ dùng nhà bếp">
                                                                <span class="js_hidden_link" data-url="L2dpYS1kdW5nLw==">Đồ dùng nhà bếp <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </span>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <span title="Bình thủy điện" class="js_hidden_link" rel="nofollow" data-url="L2JpbmgtdGh1eS1kaWVuLw==">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Bình thủy điện </span>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy rửa chén" class="a-links" href="/may-rua-chen/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy rửa chén </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <span title="Máy sấy chén" class="js_hidden_link" rel="nofollow" data-url="L21heS1zYXktY2hlbi8=">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy sấy chén </span>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="links">
                                                            <h5 title="Dụng cụ nhà bếp">
                                                                <a class="a-links" href="/gia-dung/">Dụng cụ nhà bếp <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Bộ nồi, nồi" class="a-links" href="/bo-noi-nau-an/"> Bộ nồi, nồi </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Chảo chống dính" class="a-links" rel="nofollow" href="/chao-chong-dinh/"> Chảo chống dính </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Bình giữ nhiệt, Cà men" class="a-links" rel="nofollow" href="/binh-luong-tinh/"> Bình giữ nhiệt, Cà men </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Dụng cụ ăn" class="a-links" rel="nofollow" href="/dung-cu-nha-bep/"> Dụng cụ ăn </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </li>

                                        <li class="left-menu">
                                            <div class="menu-item">
                                                <div class="icon">
                                                    <img src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/may-loc-nuoc.webp" width="18px" height="18px" alt="may-loc-nuoc">
                                                </div>
                                                <p>
                                                    <a href="/may-loc-nuoc/">Lọc nước</a>
                                                  
                                                </p>
                                            </div>
                                           
                                        </li>

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

                                <!-- <div class="menu-thuong-hieu children_sort">
                                    <div class="links sub-item-1 cl2">
                                        <h3 title="Thương hiệu">
                                            <a class="a-links" href="javascript:void(0)">Thương hiệu <span class="nk-sticker">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </span>
                                            </a>
                                        </h3>
                                        <ul>
                                            <li>
                                                <p style="">
                                                    <a title="Samsung" class="a-links" href="/thuong-hieu/samsung">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Samsung </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Panasonic" class="a-links" href="/thuong-hieu/panasonic">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Panasonic </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Sony" class="a-links" href="/thuong-hieu/sony">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Sony </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Apple" class="a-links" href="/thuong-hieu/apple">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Apple </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Electrolux" class="a-links" href="/thuong-hieu/electrolux">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Electrolux </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="LG" class="a-links" href="/thuong-hieu/lg">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> LG </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Daikin" class="a-links" href="/thuong-hieu/daikin">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Daikin </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Sunhouse" class="a-links" href="/thuong-hieu/sunhouse">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Sunhouse </a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="links sub-item-1 cl1">
                                        <ul>
                                            <li>
                                                <p style="">
                                                    <a title="Toshiba" class="a-links" href="/thuong-hieu/toshiba">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Toshiba </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Elecom" class="a-links" href="/thuong-hieu/elecom">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Elecom </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Sharp" class="a-links" href="/thuong-hieu/sharp">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Sharp </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Philips" class="a-links" href="/thuong-hieu/philips">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Philips </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Hitachi" class="a-links" href="/thuong-hieu/hitachi">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Hitachi </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Kangaroo" class="a-links" href="/thuong-hieu/kangaroo">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Kangaroo </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Logitech" class="a-links" href="/thuong-hieu/logitech">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Logitech </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="AQUA" class="a-links" href="/thuong-hieu/aqua">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> AQUA </a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=" menu-sap-xep children_sort"></div>
                                <div class="menu-sap-xep bg-white menu-tin-tuc-sap-xep style-tin-tuc" style="display: block;">
                                    <h3></h3>
                                </div>
                                <div class=" menu-mayanh children_sort">
                                    <div class="links ">
                                        <h5 title="Lọc nước">
                                            <span class="js_hidden_link" data-url="L21heS1sb2MtbnVvYy8=">Lọc nước <span class="nk-sticker">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </span>
                                            </span>
                                        </h5>
                                        <ul>
                                            <li>
                                                <p style="">
                                                    <a title="Bình lọc nước" class="a-links" rel="nofollow" href="/binh-loc-nuoc/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Bình lọc nước </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy lọc nước" class="a-links" rel="nofollow" href="/may-loc-nuoc/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy lọc nước </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy lọc nước thường" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-233364">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy lọc nước thường </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy lọc nước nóng lạnh" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-233176">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy lọc nước nóng lạnh </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy lọc nước để bàn" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-232779">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy lọc nước để bàn </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Cây nước nóng lạnh" class="a-links" rel="nofollow" href="/may-nuoc-nong-lanh/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Cây nước nóng lạnh </a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="links ">
                                        <h5 title="Sinh tố - Xay ép"> Sinh tố - Xay ép </h5>
                                        <ul>
                                            <li>
                                                <p style="">
                                                    <a title="Máy xay sinh tố" class="a-links" rel="nofollow" href="/may-xay-sinh-to/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy xay sinh tố </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy ép trái cây" class="a-links" rel="nofollow" href="/may-ep-trai-cay/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy ép trái cây </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy vắt cam" class="a-links" rel="nofollow" href="/may-vat-cam/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy vắt cam </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy pha cà phê" class="a-links" rel="nofollow" href="/may-pha-ca-phe/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy pha cà phê </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy xay đa năng" class="a-links" rel="nofollow">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy xay đa năng </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy đánh trứng" class="a-links" rel="nofollow" href="/may-danh-trung/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy đánh trứng </a>
                                                </p>
                                            </li>
                                            <li>
                                                <p style="">
                                                    <a title="Máy xay thịt" class="a-links" rel="nofollow" href="/may-xay-thit/">
                                                        <span class="nki-sort-next ">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </span> Máy xay thịt </a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=" menu-mayin children_sort"></div> -->
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