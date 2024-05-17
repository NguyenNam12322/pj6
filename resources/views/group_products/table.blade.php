<style type="text/css">
    
    .paren1 span{
        cursor: pointer;
    }
    .position{
        position: static;
    }
    .card-footer{
      display: none;
    }
</style>

<div class="table-responsive">
    <div>
        <button class="groupProducts" data-id="1">Xem toàn bộ danh mục</button>

        <button class="groupProducts" data-id="2">Xem toàn bộ danh mục (loại trừ danh mục ẩn)</button>

         <button class="groupProducts" data-id="3">Xem toàn bộ danh mục ẩn</button>

    </div>

    <?php  

         $groupProductss = App\Models\groupProduct::get();


        function recursiveMenus($data, $parent_id=0, $sub=true, $level=0)
        {
            echo $sub ? '<ul>': '<ul class="sub-menus">';
            foreach ($data as $key => $item) {
                 if($item['group_product_id'] == $parent_id){
                    unset($data[$key]);
                  ?>    
             <li>
              <a href="<?php echo $item['slug']?>"><?php echo $item['name']?></a> 
              
              <?php recursiveMenu($data, $item['id'], false); ?>
             </li>
                <?php }} 
             echo "</ul>";
        }

        function recursiveMenu($data, $parent_id=0, $sub=true, $level=0){


            if($level==0||$level==1||$level==2){
                 $levelcheck = $parent_id;

            }
            else{
                 $levelcheck ='';
            }
            echo $sub ? '<ul>':'<ul class="sub-menu sub'.$levelcheck.'">';
            foreach ($data as $key => $item) {
                 if($item['group_product_id'] == $parent_id){
                    unset($data[$key]);
                  ?>    
             <li class="paren1 {{ $item['active']==0?'list-hide':'' }}">
              <a href="javascript:void(0)"  class="click1" data-id="{{ $item['id'] }}" data-show="{{ $item['active'] }}"><?php echo $item['name']?></a>   @if($item['level']==0|| $item['level']==1|| $item['level']==2)<span class="clicks{{ $item['id'] }}" onclick="showChild('sub{{ $item['id'] }}', 'clicks{{ $item['id'] }}')">+</span>@endif {{ $item['active']==0?'Danh mục đang ẩn':'' }} &nbsp; &nbsp; &nbsp; <a href="javascript:void(0)" onclick="copy_link('https://dienmayhg.vn/{{ $item['link'] }}')"><i class="fa fa-clone" aria-hidden="true"></i>
</a> 
              
              <?php recursiveMenu($data, $item['id'], false, $item['level']); ?>
             </li>
                <?php }} 
             echo "</ul>";
        }

        
        

    ?>
   <!--  <table class="table" id="groupProducts-table">
        <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groupProducts as $groupProduct)
            <tr>
                <td>{{ $groupProduct->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['groupProducts.destroy', $groupProduct->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('groupProducts.show', [$groupProduct->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('groupProducts.edit', [$groupProduct->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                         <a href="{{ route('filters.create') }}?groupid={{ $groupProduct->id }}"
                           class='btn btn-default btn-xs'>
                            <i class="fa fa-filter"></i>
                        </a>
                       


                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> -->

    <?php recursiveMenu($groupProductss);  ?>

    <div class="modal fade" id="modals-product" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nhóm danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                     <?php   

                       $groupProductss = App\Models\groupProduct::get();

                        recursiveMenus($groupProductss); 

                     ?>

                </div>
                
            </div>
        </div>
    </div>



    <div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                     <a href="" class="sua">Sửa</a>
                     <br>

                     <a href="#" class="an">Ẩn danh mục</a>   
                     <br>

                      <a href="#" class="xoa">Xóa danh mục</a>   
                     <br>
                     <!-- <a href="" class="xoa">Xóa</a> -->

                </div>
                
            </div>
        </div>
    </div>



    <script type="text/javascript">
        $('.groupProduct').click(function () {
           
           $('#modals-product').modal('show');

        });

        


        $('.groupProducts').click(function () {
          value = $(this).attr('data-id');
          if(value==1){

            if(!$('.paren1').is(':visible'))
            {
              $('.paren1').show();
            }

            if(!$('.list-hide').is(':visible'))
            {
              $('.list-hide').show();
            }

             if(!$('.sub-menu').is(':visible'))
            {
              $('.sub-menu').show();
            }



            if(!$('.list-hide').hasClass('paren1')){
              $('.list-hide').addClass(paren1);
            }
            $('.sub-menu').show();
          }
          else if(value==2){

            if(!$('.paren1').is(':visible'))
            {
              $('.paren1').show();
            }
            // $('.list-hide').removeClass('sub-menu');
            // $('.sub-menu').show();
            $('.list-hide').hide();
          }
          else{
            $('.list-hide').removeClass('paren1');
            $('.paren1').hide();
            $('.list-hide').show();
          }

        });  

        $('.sub-menu').hide();

        // $('.parent').click(function () {
           
        //     parent = $(this).parents().find('li').attr('class');

        //     alert(parent);
        // })

        $('.click1').dblclick(function(){


            dataId = $(this).attr('data-id');

            show   = $(this).attr('data-show');

            text = show==1?'Ẩn danh mục':'Hiện danh mục';

            $('.sua').attr('href', '{{env("APP_URL")}}/admins/groupProducts/'+dataId+'/edit');

            $('.an').attr('href', '{{ route("showGroupProduct") }}?id='+dataId+'');

            $('.an').text(text);

            
            $('.xoa').attr('href', '{{ route("deleteGroupProduct") }}?id='+dataId+'');


            $('#info-modal').modal('show');


        })

        function showChild(id, classs) {

            if($('.'+id).is(":visible") ){
                 $('.'+id).hide();
                 $('.'+classs).text('+');
            }
            else{
                $('.'+id).show();
                $('.'+classs).text('-');
            }

        
        }

        function copy_link(link) {

            navigator.clipboard.writeText(link);
            
            alert('thành công');
        }

    </script>
</div>
