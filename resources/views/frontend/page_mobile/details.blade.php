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

            .tygh-content{
                margin-top: 64px;
            }


        }   

        .not-found{
/*            font-size: 25px;*/
            font-weight: bold;
            color: red;
        }

        .breadcrumb li::before {
            border-top: 1px solid #666;
            border-right: 1px solid #666;
            content: '';
            height: 6px;
            position: absolute;
            right: 2px;
            transform: rotate(45deg);
            top: 13px;
            width: 6px;
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
        

        <h2>page mobile</h2>

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

        
