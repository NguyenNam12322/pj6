<?php 

    $page = '404';

   

   
?>

@extends('frontend.layouts.apps')

@section('content') 



 @push('style')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}?ver=11"> 

        <link rel="stylesheet" type="text/css" href="{{ asset('css/categories.css') }}"> 
      

        <style type="text/css">
            
            .box-filter .form-control{
                width: 100%;
            }
            .block-manu{
                width: 150px;
            }
            @media screen and (min-width:776px) {

                .container-productbox{

                    height: 540px;
                }
            }
            .footer_list-link{
                font-size: 14px;
            }    
        </style>

    
    @endpush

<section id="categoryPage" class="desktops" data-id="1942" data-name="Tivi" data-template="cate">

    <div class="container-productbox">

    	<div style="margin-left: 20px;" class="mt-3">
            <h2><b>Không tìm thấy link</b></h2>
        </div>
        <hr>

    </div>


  
    <div class="errorcompare" style="display:none;"></div>
   <!--  <div class="block__banner banner__topzone">
        <a data-cate="0" data-place="1919" href="https://www.topzone.vn/" onclick="jQuery.ajax({ url: '/bannertracking?bid=48557&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2021/12/banner/Frame4879-1200x120.jpg" alt="Promote Topzone" width="1200" height="120"></a>
    </div> -->
    <div class="watched"></div>
    <div class="overlay"></div>

   
   
</section>

@endsection