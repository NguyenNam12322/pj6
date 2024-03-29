@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/colorbox') }}">
<style type="text/css">

    .div-box {
        border: 1px solid #a0a0a0;
    }

    #tabMenuDmPro {
        border-bottom: 0 solid #999;
        width: 100%;
    }

    .text_arrow {
        color: #000039;
        font-weight: 700;
        margin-bottom: 6px;
        margin-top: 6px;
    }

    #tabMenuDmPro a:hover span, #tabMenuDmPro .curent a span {
        background-position: 100% -29px;
        color: #000;
        text-decoration: none;
    }

    #tabMenuDmPro a:hover, #tabMenuDmPro .curent a {
        background-position: 0 -29px;
    }

    .div-box {
        border: 1px solid #a0a0a0;
    }

    #tabMenuDmPro .bgg {
        background: url(../images/bgg_tk.gif);
        height: 29px;
        width: 100%;
        border-left: 0 solid #b1b1b1;
        border-right: 0 solid #b1b1b1;
    }

    #tabMenuDmPro a span {
        background: url({{ asset('images/template/bgg_tk_right.jpg')  }}) right top no-repeat;
        display: block;
        color: #000;
        text-decoration: none;
        float: none;
        padding: 10px 7px 4px 6px;
    }

    #tabMenuDmPro a {
        float: left;
        background: url({{ asset('images/template/bgg_tk_left.jpg')  }}) left top no-repeat;
        text-decoration: none;
        padding: 0 0 0 8px;
    }

    td{
        font-size: 12px;
    }

    span{
        font-size: 12px;
    }

    ul, ol {
        list-style: none;
    }

    #feedback1{
        height: 100px;
        width: 300px;
    }


</style>

<?php 
    $rate = App\Models\rate::Orderby('id', 'desc')->paginate(10);


?>

<div class="paddings">
    <style type="text/css">
        .div-box table { width:100%;}
    </style>
    <table width="100%">
        <tbody>
            <h1>Đánh giá sản phẩm của khách hàng</h1>
            <tr>
                <!--start cot trai-->
                <td valign="top" width="55%">
                    <!--Start don hang-->
                    <div class="pic icon_arrow left"></div>
                    
                    <div class="clear"></div>
                    <div style="border:1px solid #6a8ab9 ">
                        <table width="100%" class="table_public" border="1" bordercolor="#e0e0e0">
                            <tbody>
                                <tr class="table_public_tr">
                                    <td width="40">STT</td>
                                    <td width="190">Tên khách hàng</td>
                                    <td width="130">Email</td>
                                    <td  width="130">Đánh giá (sao)</td>
                                     <td  width="130">Content</td>
                                    <td width="120">Sản phẩm</td>
                                    <td width="120">Active</td>
                                    <td width="120">Phản hồi lại</td>
                                    <td width="120">Xóa</td>
                                </tr>
                               
                                @if(isset($rate))
                                @foreach($rate as $key => $rates)
                                <?php  $link = App\Models\product::find($rates->product_id)  ?>

                                @isset($link)
                                <tr id="rates_{{ $rates->id }}">
                                    <td>{{$key}}</td>
                                    <td width="40">{{$rates->name}}</td>
                                    <td width="190">{{$rates->email}}</td>
                                    <td width="130">{{@$rates->star}}</td>
                                    <td>{!! @$rates->content !!}</td>
                                    <td><a href="{{ route('details', $link->Link) }}" target="_blank">{{ $link->Name??'' }}</a></td>
                                    
                                    <td width="120"><a href="javascript:void(0)" onclick="accept({{ $rates->id }})" data-id="{{ $rates->id }}" class="accept{{ $rates->id}}">{{ $rates->active==1?'Đã duyệt':'duyệt' }}</a></td>
                                    <input type="hidden" name="active" id="active" value="{{ $rates->active }}">
                                    <td> 
                                        @if(empty($rates->id_feed_back))
                                        <a href="javascript:void(0)" onclick="feedback({{ $rates->id }}, {{  $rates->product_id }})">Phản hồi</a> 
                                        @endif
                                    </td>
                                    <td><a href="javascript:void(0)" onclick="removeRate({{ $rates->id }})">Xóa</a></td>
                                    
                                </tr>
                                @endisset
                                @endforeach
                                @endif

                               
                            </tbody>
                        </table>
                    </div>
                    <!--End don hang-->
                    <!--Start don hang tra gop-->
                    <!--<div>&nbsp;</div>
                        <div class="pic icon_arrow left"></div>
                        <div class="text_arrow left">Đơn hàng trả góp:  (<a href="?opt=payinstall&view=order">Xem toàn bộ danh sách</a>)</div>
                        <div class="clear"></div>
                        <div style="border:1px solid #6a8ab9 ">
                        
                            <table width="100%" class="table_public" border="1" bordercolor="#e0e0e0">
                                <tr bgcolor=#EEEEEE>
                                    <td width=20px>STT</td>
                                    <td width=160px>Thời gian</td>
                                    <td width=160px>Loại hình</td>
                                    <td>Sản phẩm</td>
                                    <td width=100px>xem chi tiết</td>
                                </tr>
                        
                                
                            </table>
                        
                        </div>-->
                    <!--End don hang tra gop-->
                    <!--Start khach hang-->
                    <div>&nbsp;</div>
                    <div class="pic icon_arrow left"></div>
                   <!--  <div class="text_arrow left">Khách hàng liên hệ qua website (<a href="?opt=customer&amp;view=customer-contact">Xem toàn bộ danh sách</a>)</div> -->
                    <div class="clear"></div>
                   
                    <!--End khach hang-->
                    <!--Start khach hang đánh giá-->
                    <div>&nbsp;</div>
                    <div class="pic icon_arrow left"></div>
                    {{ $rate->links() }}
                    <div class="clear"></div>
                    
                    <!--End khach hang đánh giá-->
                </td>
                <!--end cot trai-->
                
            </tr>
        </tbody>
    </table>


    <div class="modal fade" id="modal-feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Phản hồi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="{{ route('admin-rate-feedback-form') }}">
                        @csrf
                        <input type="hidden" name="id_feedback" id="id_feedback">
                        <input type="hidden" name="product_id_feedback" id="product_id_feedback">
                        <textarea name="content" id="feedback1" required></textarea>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Phản hồi</button>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>


    <script type="text/javascript">


        function feedback(id, productId) {
            
            $('#modal-feedback').modal('show');
            $('#product_id_feedback').val(productId);
            $('#id_feedback').val(id);

        }

        function removeRate(id) {
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('remote-rate') }}",
                data: {
                    id: id,
                   
                },
                success: function(result){
                    if(result ==='xóa thành công'){

                        $('#rates_'+id).remove();

                    }

                    alert(result);
                }
            });
        }

        function accept(id) {
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

             $.ajax({
                type: 'POST',
                url: "{{ route('accept-rate') }}",
                data: {
                    id: id,
                    active:$('#active').val()
                       
                },
                success: function(result){

                    let status = result[1]==0?'duyệt':'Đã duyệt';

                    if(result[1] ==0){

                        status =='duyệt';
                        $('#active').val(0)
                    }
                    else{
                        status =='Đã duyệt';
                        $('#active').val(1);
                    }

                   
                   $('.accept'+result).html(status);
                   
                }
            });
        }
         
        
          
        
        $(function(){
        	$('.thickbox').colorbox({
        	    iframe: true,
                   fixed : true,
                   width:'70%',
                   height:'80%'
        	});
        });
    </script>   
    <input type="hidden" id="current_use1" value="1">
    <script>
        function ajax_cate(idmau) {
          var current_use = document.getElementById('current_use1').value;
          document.getElementById('select_'+current_use).className = '';
          document.getElementById('current_use1').value = idmau;
          document.getElementById('select_'+idmau).className = 'curent';
          document.getElementById('content_'+current_use).style.display = 'none';
          //document.getElementById('content_'+idmau).style.display = 'block';
          $("#content_"+idmau).fadeIn("slow");
        
          if(idmau == 6) {
             report_top_article('visit','mo', 'top_article_visit', 10);
          }
        }
    </script>
</div>
@endsection