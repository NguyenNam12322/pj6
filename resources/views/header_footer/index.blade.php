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
    <ul id="tabnav">
        <li id="tab_1"><a href="?opt=system&amp;view=store-design&amp;section=header">Phần header</a></li>
        <li id="tab_2"><a href="?opt=system&amp;view=store-design&amp;section=popup">Banner Pop-Up</a></li>
        <li id="tab_3" class="tab-select"><a href="?opt=system&amp;view=store-design&amp;section=background">Hình nền website</a></li>
        <li id="tab_4"><a href="?opt=system&amp;view=store-design&amp;section=other">Thông tin khác</a></li>
    </ul>
    <p class="sub-section-header">Thay Ảnh nền</p>
    <p style="color:#F00; margin-bottom:20px">Bạn có thể thay nền website bằng màu hoặc hình ảnh. Với file ảnh, yêu cầu là  .jpg, .gif, hoặc .png và dung lượng tối đa 300KB.</p>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tbody>

                <tr>
                    <td>Logo</td>
                    <td>
                        <input type="file" name="logo" size="50"> 
                    </td>
                </tr>

                <tr>
                    <td>Văn phòng đại diện: </td>
                    <td>
                       
                        <input type="text" class="color" name="vpdd" value="">
                    </td>
                </tr>

                <tr>
                    <td>Kho hàng: </td>
                    <td>
                       
                        <input type="text" class="color" name="kho" value="">
                    </td>
                </tr>

                <tr>
                    <td>Tổng đài hỗ trợ: </td>
                    <td>
                       
                        <input type="text" class="color" name="tdht" value="">
                    </td>
                </tr>

                <tr>
                    <td>Khiếu nại: </td>
                    <td>
                       
                        <input type="text" class="color" name="kn" value="">
                    </td>
                </tr>
                
            </tbody>
        </table>
        
        <button type="submit">submit</button>
       
    </form>
    <script>
        function add_form_setting(){
        	var the_form = "";
        	the_form += "<table>";
        	the_form += "<tr><td>Tên biến : <td><td><input type=text size=40 name='setting_name'> (* yêu cầu: viết thường, không dấu và viết liền, chỉ gồm ký tự a->z 1->9 hoặc _ . Ví dụ: mau_sac_banner) </td></tr>";
        	the_form += "<tr><td>Giá trị của biến : <td><td><textarea cols=60 rows=5 name='setting_value'></textarea> (* Hỗ trợ nhập các thẻ html)</td></tr>";
        	the_form += "</table>";
        	$("#other_setting_add").html(the_form);
        }
        
        function delete_this_setting(id){
        	if(confirm("Bạn chắc chắn muốn xóa bỏ ?")) {
        		$.post("ajax/manage_setting.php", {action : 'delete', id : id}, function(data){ $("#block_other_"+id).fadeOut(); } );	
        	}
        }
    </script>	
</div>
@endsection
