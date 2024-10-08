@extends('layouts.app')

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
    <p class="sub-section-header">Chính sách mua hàng</p>

    <?php 

        $info = DB::table('chinh_sach')->where('id',1)->get()->first();
    ?>
   
    <form method="post"  action="{{ route('add-chinh-sach') }}" enctype="multipart/form-data">
        @csrf
        <table style="width: 400px;">
            <tbody>

                <tr>
                  
                    <td>
                       
                        <input type="text" class="color" name="input1" value="{{ @$info->input1 }}" >
                    </td>
                </tr>

                <tr>
                  
                    <td>
                       
                        <input type="text" class="color" name="input2" value="{{ @$info->input2 }}" >
                    </td>
                </tr>

                <tr>
                   
                    <td>
                       
                        <input type="text" class="color" name="input3" value="{{ @$info->input3 }}" >
                    </td>
                </tr>

                <tr>
                   
                    <td>
                       
                        <input type="text" class="color" name="input4" value="{{ @$info->input4 }}" >
                    </td>
                </tr>

                <tr>
                  
                    <td>
                       
                        <input type="text" class="color" name="input5" value="{{ @$info->input5 }}" >
                    </td>
                </tr>

                <tr>
                    
                    <td>
                       
                        <input type="text" class="color" name="input6" value="{{ @$info->input6 }}" >
                    </td>
                </tr>
                
            </tbody>
        </table>
        
        <button type="submit">submit</button>
       
    </form>
   
</div>
@endsection
