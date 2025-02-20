<?php
    $info = DB::table('show_info_header_footer')->where('id',1)->get()->first();

 ?>
<div class="container p-0 show-footer">
    <div class="phone_hotline"> 
        <a href="tel:0987874334" title="Bảo Hành: 0243.687.9145" class="p_hotline_item"> <i class="icon_security"></i> 
            <span><strong>Bảo Hành: {{ @$info->kn }}</strong> (8h00 - 17h00)</span> 
        </a> 
        <a href="tel:{{ @$info->tdht }}" title="Mua hàng:#" class="p_hotline_item"> <i class="icon_purchase"></i> <span><strong>Mua hàng: {{ @$info->tdht }}</strong> (8h00 - 17h00)</span> </a> 
        <a href="tel:{{ @$info->tdht }}" title="Khiếu nại:0916917949" class="p_hotline_item"> <i class="icon_complain"></i> <span><strong>Khiếu nại:{{ @$info->tdht }}</strong> (8h00 - 17h00)</span> </a>
    </div>
</div>

<style type="text/css">

     .ring-phone {
            float: left;
            position: fixed;
            right: 150px;
            bottom: 10px;
            z-index: 99999;
        }

        h1,h2,h3,h4,h5,h6{
            font-weight: bold;
        }

        .to-top{
            background: #ddd;
            cursor: pointer;
        }



        .coccoc-alo-phone {
            background-color: transparent;
            width: 100px;
            height: 100px;
            cursor: pointer;
            z-index: 200000 !important;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            -webkit-transition: visibility .5s;
            -moz-transition: visibility .5s;
            -o-transition: visibility .5s;
            transition: visibility .5s;
            position: relative;
            z-index: 10;
        }

        .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-circle {
            background: linear-gradient(90deg, #d1a94e, #fdf5a1, #cfac54);
            opacity: .5;
        }

        .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-circle-fill {
            background: linear-gradient(90deg, #d1a94e, #fdf5a1, #cfac54);
            opacity: .75 !important;
        }

        .coccoc-alo-ph-img-circle {
            width: 50px;
            height: 50px;
            top: 25px;
            left: 25px;
            position: absolute;
            background: rgba(30, 30, 30, 0.1) url(https://digicity.vn/template/default/images/phone-fix.png) no-repeat center center;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            background-size: cover;
        }

        .coccoc-alo-ph-circle {
            width: 100px;
            height: 100px;
            top: 0;
            left: 0;
            position: absolute;
            background-color: transparent;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid rgba(30, 30, 30, 0.4);
            opacity: .1;
            -webkit-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            -moz-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            -ms-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            -o-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
            z-index: 10;
        }

        .ring-phone:hover .list-phone {
            width: 160px;
            transition: .5s;
            opacity: 1;
        }

        .list-phone {
            position: absolute;
            left: 50%;
            top: 50%;
            float: left;
            transform: translateY(-50%);
            z-index: 1;
            width: 1px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            transition: .5s;
            overflow: hidden;
            opacity: 0;
        }

        .list-phone a {
            float: right;
            line-height: 30px;
            margin: 3px 0;
            border-radius: 15px;
            padding: 0 10px;
            text-decoration: none;
            color: #000;
            font-size: 16px;
            font-weight: 700;
            background: linear-gradient(0deg, #d1a94e, #fdf5a1, #cfac54);
        }

        .coccoc-alo-ph-circle-fill {
            width: 70px;
            height: 70px;
            top: 15px;
            left: 15px;
            position: absolute;
            background-color: #000;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: .1;
            -webkit-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -moz-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -ms-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -o-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .coccoc-alo-ph-img-circle {
            width: 50px;
            height: 50px;
            top: 25px;
            left: 25px;
            position: absolute;
            background: rgba(30, 30, 30, 0.1) url(https://digicity.vn/template/default/images/phone-fix.png) no-repeat center center;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            background-size: cover;
        }
        .footer-new * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        @keyframes coccoc-alo-circle-anim {
            0% {
                transform: rotate(0) scale(.5) skew(1deg);
                opacity: .1;
            }
            30% {
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .5;
            }

            100% {
                transform: rotate(0) scale(1) skew(1deg);
                opacity: .1;
            }
        }    

        @keyframes coccoc-alo-circle-fill-anim {

            0% {
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .2;
            }
            50% {
                transform: rotate(0) scale(1) skew(1deg);
                opacity: .2;
            }
            100% {
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .2;
            }
        }    

        @keyframes coccoc-alo-circle-img-anim {
            0% {
                transform: rotate(0) scale(1) skew(1deg);
            }
            10% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
                transform: rotate(0) scale(1) skew(1deg);
            }
            100% {
                transform: rotate(0) scale(1) skew(1deg);
            }
        }    

    @media only screen and (min-width: 601px) {
        /*.div-foot{
            margin-left: 330px;
        }*/

        .to-top{
            right: 110px !important;
            bottom: 54px;
        }


        .banner-ads-text .header-menu__navs{
            height: 40px;
        }


        .ft-dmca img{
            width: 100%;
        }
       /* .nk-menu .span16{
            padding: 0;
        }*/

       
    } 

    @media only screen and (max-width: 601px) {
        .ft-dmca img{
            width: 100%;
        }

        .show-footer{
            margin-bottom: 20px;
        }

        .ring-phone{
            left: 0;
        }
        .div-foot .row{
            margin: 0;
        }

        .ft-new-info p:last-child {
            border: none;
            padding-bottom: 0;
        }

        .ft-new-info p {
            width: 100%;
            float: left;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: dashed 2px #f1f1f1;
            font-size: 13px;
            color: #000;
            line-height: 1.5;
        }

        .ft-new-info .title-if {
            width: 100%;
            float: left;
            margin-bottom: 10px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            color: #000;
        }

        .policy-ft {
            width: 100%;
            float: left;
            margin-bottom: 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .policy-ft .item {
            width: calc(20% - 8px);
            float: left;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            background: #000;
            border-radius: 5px;
            padding: 10px 5px;
        }
        .policy-ft .item .icons-2022 {
            width: 31px;
            height: 36px !important;
            float: left;
            background-position: -2px -46px;
            margin-bottom: 5px;
        }
        .policy-ft .item .txt {
            width: 100%;
            float: left;
            font-size: 10px;
            color: #fff;
            text-align: center;
        }

        .ft-new-menu {
            width: 100%;
            float: left;
            margin-bottom: 15px;
        }

        .ft-new-menu .item-n {
            width: 100%;
            float: left;
            margin-bottom: 5px;
        }

        .ft-new-menu .item-n .title {
            width: 100%;
            float: left;
            padding: 0 10px;
            border-radius: 5px;
            font-size: 13px;
            background: #f1f1f1;
            line-height: 40px;
        }

        .ft-new-menu .item-n .title i {
            float: right;
            line-height: 40px;
        }

        .ft-new-info p {
            width: 100%;
            float: left;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: dashed 2px #f1f1f1;
            font-size: 13px;
            color: #000;
            line-height: 1.5;
        }

        .ft-new-info .title-if {
            width: 100%;
            float: left;
            margin-bottom: 10px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            color: #000;
        }

        .ft-new-menu .item-n .title {
            width: 100%;
            float: left;
            padding: 0 10px;
            border-radius: 5px;
            font-size: 13px;
            background: #f1f1f1;
            line-height: 40px;
        }

        .ft-new-menu .item-n .list a {
            width: 100%;
            float: left;
            padding: 10px;
            font-size: 13px;
            border-bottom: solid 1px #fff;
        }

        .ft-new-menu .item-n .list {
            width: 100%;
            float: left;
            background: #f1f1f1;
            display: none;
        }


    } 

    @media only screen and (min-width: 601px) {
       
        .div-foot{
            height: 400px;
        }

        .footer{
            height: 587px;
        }

        .title-if{
            margin-bottom: 10px;
        }

        .ft-new-info{
            padding: 0;
        }
        .footer{
            background: #000;
        }
    } 

    .ft-dmca ul li a, .ft-dmca .title{
        color: #FFFB9C;
    }

     
    

    .ft-new-content {
        width: 100%;
        float: left;
        padding: 0 12px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .ft-new-content .ft-new-info {
        width: 392px;
        float: left;
        padding-right: 12px;
        color: #fff;
    }

    .ft-new-content .ft-new-menu {
        width: calc(100% - 392px);
        float: left;
    }

    .ft-new-content .ft-new-menu .item-n {
        width: 254px;
        float: left;
        padding-right: 12px;
    }

    .ft-new-content .ft-new-menu .item-n:last-child {
        width: 178px;
        padding-right: 0;
    }

    .ft-new-content .ft-new-menu .item-n .title {
        width: 100%;
        float: left;
        margin-bottom: 10px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        color: #ddcb64;
    }

    .ft-new-content .ft-new-menu .item-n a {
        width: 100%;
        float: left;
        margin-bottom: 10px;
        font-size: 13px;
        color: #fff;
        line-height: 1.5;
    }

    .cp-r {
        width: 100%;
        float: left;
        padding: 20px 12px;
       
        box-sizing: border-box;
        background: #121212;
        margin-top: 20px;
    }

    .cp-r .cpr-ct {
        width: 100%;
        float: left;
        margin-bottom: 10px;
        line-height: 26px;
        font-size: 12px;
        color: #fff;
        text-align: center;
    }

    .cp-r table {
        width: 100%;
        float: left;
        color: #fff;
        margin-bottom: 10px;
    }
</style>

<?php 

    $csqd = DB::table('footer_customn')->where('id',2)->get()->first();

    $hdmh = DB::table('footer_customn')->where('id',1)->get()->first();
?>


<footer class="footer container mobile">
    <div class="footer-new n-n">
        <div class="policy-ft">
            <div class="item">
                <span class="icons-2022"></span>
                <span class="txt">Sản phẩm chính hãng</span>
            </div>
            <div class="item">
                <span class="icons-2022"></span>
                <span class="txt">Miễn phí vận chuyển</span>
            </div>
            <div class="item">
                <span class="icons-2022"></span>
                <span class="txt">Bảo dưỡng trọn đời</span>
            </div>
            <div class="item">
                <span class="icons-2022"></span>
                <span class="txt">Liên hệ thanh toán</span>
            </div>
            <div class="item">
                <span class="icons-2022"></span>
                <span class="txt">Trả góp<br>với Insta</span>
            </div>
        </div>
        <div class="ft-new-menu">
            <div class="item-n item-st">
                <div class="title">Thông tin chung <i class="fa fa-caret-right" aria-hidden="true"></i></div>
                <div class="list">
                    
                    <a href="/tin-tuc">Tin tức</a>
                    <a href="/huong-dan-mua-hang">Hướng dẫn mua hàng</a>
                    <a href="/quy-dinh-thanh-toan">Quy định thanh toán</a>
                </div>
            </div>
            
        </div>
        
       
    </div>
    <div class="ring-phone">
        <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show">
            <div class="coccoc-alo-ph-circle"></div>
            <div class="coccoc-alo-ph-circle-fill"></div>
            <div class="coccoc-alo-ph-img-circle"></div>
            <div class="list-phone"> <a href="tel:{{ @$info->tdht }}">{{ @$info->tdht }}</a> <a href="tel:0942496226">{{ @$info->tdht }}</a> <a href="tel:{{ @$info->tdht }}">{{ @$info->tdht }}</a> </div>
        </div>
    </div>
   

</footer>
<footer class="footer container desktop">
    
    <div class="div-foot">
        <div class="ft-dmca">
           
            <img src="{{ asset('images/template/banner-foot.jpg') }}" alt="bg">
        </div>

     

        <div class="ft-new-content">
            <div class="ft-new-info">
                <div class="title-if">ĐỊA CHỈ MUA HÀNG</div>
                <p>
                    <b>Văn phòng đại diện: </b><br>
                    HCM: {{ @$info->vpdd }}.
                   
                </p>
                <p>
                    <b>Kho hàng</b><br>
                    HCM: {{ @$info->kho }}.
                 
                </p>
               
            </div>




            <div class="ft-new-menu">
                <div class="item-n item-st" id="footer-show1">
                    <div class="title">Muasamtaikho.vn</div>
                    <div class="list">
                        @if(!empty($hdmh->input1))
                        <a href="{{ $hdmh->link1 }}">{{ $hdmh->input1 }}</a>
                        @endif
                        @if(!empty($hdmh->input2))
                        <a href="{{ $hdmh->link2 }}">{{ $hdmh->input2 }}</a>
                        @endif

                         @if(!empty($hdmh->input3))
                        <a href="{{ $hdmh->link3 }}">{{ $hdmh->input3 }}</a>
                        @endif

                        @if(!empty($hdmh->input4))
                        <a rel="nofollow" href="{{ $hdmh->link4 }}">{{ $hdmh->input4 }}</a>

                        @endif

                        @if(!empty($hdmh->input5))
                        <a rel="nofollow" href="{{ $hdmh->link5 }}">{{ $hdmh->input5 }}</a>
                        @endif

                        @if(!empty($hdmh->input6))
                        <a rel="nofollow" href="{{ $hdmh->link6 }}" target="_blank">{{ $hdmh->input6 }}</a>
                        @endif
                    </div>
                </div>
                <div class="item-n item-st" id="footer-show2">
                    <div class="title">Chính sách và quy định</div>
                    <div class="list">
                        <a rel="nofollow" href="{{ $csqd->link1 }}"> {{ $csqd->input1 }} </a>
                        <a rel="nofollow" href="{{ $csqd->link2 }}"> {{ $csqd->input2 }} </a>
                        <a rel="nofollow" href="{{ $csqd->link3 }}"> {{ $csqd->input3 }} </a>
                        <a rel="nofollow" href="{{ $csqd->link4 }}"> {{ $csqd->input4 }} </a>
                    </div>
                </div>
                <div class="item-n item-st" id="footer-show3">
                    <div class="title">Tổng đài hỗ trợ</div>
                    <div class="list">
                        <a href="tel:{{ @$info->tdht }}" rel="nofollow">Hotline: {{ @$info->tdht }}</a>
                        <a href="tel:{{ @$info->tdht }}" rel="nofollow">Gọi mua: {{ @$info->tdht }}</a>
                        <a href="tel:{{ @$info->tdht }}" rel="nofollow">Kỹ thuật: {{ @$info->tdht }}</a>
                        <a href="tel:{{ @$info->kn }}" rel="nofollow">Khiếu nại: {{ @$info->kn }}</a>
                    </div>
                </div>
            </div>
        </div>





        <!-- <div class="footer-bottom"> <div class="container"> <p> <b>© 2018. Công ty TNHH Thương Mại Phú Tiến. Địa chỉ: : Kho Đóng Tàu, Ngõ 683 Đường Nguyễn Khoái, Quận Hoàng
            Mai, TP HN. GPKD số : 0102011440 do Sở Kế Hoạch và Đầu Tư TP. Hà Nội, cấp ngày 25/02/2004 </b> </p> </div> </div> --> 
    </div>

    <div class="cp-r">
        <div class="cpr-ct">
            <b>{{ @$info->endtext }}
        </div>
        <!-- <table border="0">
            <tbody>
                <tr>
                   
                    <td style="text-align:left;">Website đã đăng ký với <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=28506" style="color:#FFC200;" rel="nofollow">Cục thương mại điện tử, cục công nghệ thông tin - Bộ Công Thương</a>
                    </td>
                </tr>
            </tbody>
        </table> -->
       
    </div>

    <div class="ring-phone">
        <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show">
            <div class="coccoc-alo-ph-circle"></div>
            <div class="coccoc-alo-ph-circle-fill"></div>
            <div class="coccoc-alo-ph-img-circle"></div>
            <div class="list-phone">
                <a href="tel:0904196226">{{ @$info->tdht }}</a>
                
            </div>
        </div>
    </div>

     <div id="scrollToTopBtn" class="ring-phone to-top" style="display:none"  >
        <img src="{{ asset('images/template/back-top-25.png') }}?ver=1">
    </div>    

</footer>

<script type="text/javascript">
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
scrollToTopBtn.addEventListener("click", function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

$(".item-n.item-st").click(function() {
    $(this).children(".list").slideToggle(); // Use slideToggle for smooth animation
  });


</script>