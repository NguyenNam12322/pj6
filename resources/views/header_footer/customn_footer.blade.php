@extends('layouts.app')

 <?php 

        $page = !empty($_GET['page'])?$_GET['page']:1;

        $info = DB::table('footer_customn')->where('id',$page)->get()->first();
    ?>

<style type="text/css">
    .position{
        position: static !important;
    }

    tr input{
        width: 100%;
    }
</style>

@section('content')
<div class="paddings">
    <div id="theme-edit-announcement" class="announcement box2 c">
        <p><b style="color:#F00">Chú ý</b>: Chức năng này chỉ áp dụng với các giao diện đã được cài đặt cho phép thay đổi 1 số thành phần của giao diện. Biến template sử dụng $settings (global)</p>
    </div>
    <style type="text/css">
        ul#tabnav {	text-align:left; margin:1em 0 1em 0;border-bottom:1px solid #999;list-style-type: none; padding: 4px 10px 5px 10px;	}
        ul#tabnav li {display:inline; margin:0}
        ul#tabnav li a {padding: 5px 6px; border:1px solid #999;background-color:#DDD;color:#000;margin-right:0px;text-decoration: none; border-bottom:none}
        ul#tabnav a:hover {background: #fff; color:#333}
        ul#tabnav li.tab-select {border-bottom: 1px solid #fff;	background-color:#fff;}
        ul#tabnav li.tab-select a {	background-color:#CF9;	color: #000;position:relative;top:1px; padding-top:6px;}
        .sub-section-header { font-weight:bold; margin-bottom:10px; padding:3px; background-color:#CFC}
        .tb-setup td{ padding:4px}
    </style>
    <!-- tabs -->
    <!-- <ul id="tabnav">
        <li id="tab_1"><a href="?opt=system&amp;view=store-design&amp;section=header">Phần header</a></li>
        <li id="tab_2"><a href="?opt=system&amp;view=store-design&amp;section=popup">Banner Pop-Up</a></li>
        <li id="tab_3" class="tab-select"><a href="?opt=system&amp;view=store-design&amp;section=background">Hình nền website</a></li>
        <li id="tab_4"><a href="?opt=system&amp;view=store-design&amp;section=other">Thông tin khác</a></li>
    </ul> -->
    <p class="sub-section-header"> <?= $page==1?'Muasamtaikho.vn':'Chính sách và quy định'  ?> </p>

    @if($page==1)

    <a href="{{ route('get custom footer') }}?page=2">tab Chính sách và quy định</a>
    @else

    <a href="{{ route('get custom footer') }}?page=1">tab Muasamtaikho.vn</a>
    @endif
   
   
    <form method="post"  action="{{ route('custom footer') }}">
        @csrf
        <table style="width: 400px;">
            <tbody>

                <tr>
                  
                    <td>
                        <input type="text" class="color" name="input1" value="{{ @$info->input1 }}" >
                    </td>

                    <td>
                        <input type="text" class="color" name="link1" value="{{ @$info->link1 }}" >
                    </td>
                </tr>

                <tr>
                  
                    <td>
                       
                        <input type="text" class="color" name="input2" value="{{ @$info->input2 }}" >
                    </td>
                    <td>
                       
                        <input type="text" class="color" name="link2" value="{{ @$info->link2 }}" >
                    </td>
                </tr>

                <tr>
                   
                    <td>
                       
                        <input type="text" class="color" name="input3" value="{{ @$info->input3 }}" >
                    </td>

                    <td>
                       
                        <input type="text" class="color" name="link3" value="{{ @$info->link3 }}" >
                    </td>
                </tr>

                <tr>
                   
                    <td>
                       
                        <input type="text" class="color" name="input4" value="{{ @$info->input4 }}" >
                    </td>

                    <td>
                       
                        <input type="text" class="color" name="link4" value="{{ @$info->link4 }}" >
                    </td>
                </tr>

                <tr>
                  
                    <td>
                       
                        <input type="text" class="color" name="input5" value="{{ @$info->input5 }}">
                    </td>

                    <td>
                       
                        <input type="text" class="color" name="link5" value="{{ @$info->link5 }}">
                    </td>
                </tr>

                <tr>
                    
                    <td>
                       
                        <input type="text" class="color" name="input6" value="{{ @$info->input6 }}">
                    </td>
                    <td>
                       
                        <input type="text" class="color" name="link6" value="{{ @$info->link6 }}">
                    </td>
                </tr>
                
            </tbody>
        </table>

        <input type="hidden" name="page" value="{{ $page }}">
        
        <button type="submit">submit</button>
       
    </form>
   
</div>
@endsection
