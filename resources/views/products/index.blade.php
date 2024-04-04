@extends('layouts.app')

@section('content')

<style type="text/css">
    
    .btn-red{
        background: yellow;
    }
</style>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showmodal">
    Sản phẩm show trang chủ
    </button>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showPromotionPrice">
    
        Danh sách sản phẩm đang khuyến mãi theo chương trình

    </button>

     <!-- Button trigger modal -->
   

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                     <div class="btn btn-red"><a href="{{ route('deal') }}">deal sản phẩm</a></div>
                    
                </div>
                <div class="col-sm-6">

                   
                        <a class="btn btn-primary float-right"
                           href="{{ route('products.create') }}">
                            Add New
                        </a>
                  
                        &nbsp;
                    
                        <a class="btn btn-primary float-right" href="{{ route('products.index') }}?promotion=1" style="margin-right:20px">
                            sản phẩm đang khuyến mãi text
                        </a>

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#priceShowProduct">
    
                        Chính sách giá cho sản phẩm

                    </button>
                    
                </div>

                
                <div class="bthongbao"></div>
            </div>
        </div>

        

    </section>
                      
    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('products.table')

               
                        @include('adminlte-templates::common.paginate', ['records' => $products])
                   
            </div>

        </div>
    </div>


   
    <!-- Modal -->
    <div class="modal fade" id="showmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div><a href="{{ route('host-list') }}?page=1">Sản phẩm show trang chủ nhóm Tivi</a></div>
                        <div><a href="{{ route('host-list') }}?page=2">Sản phẩm show trang chủ nhóm Máy giặt</a></div>
                        <div><a href="{{ route('host-list') }}?page=3">Sản phẩm show trang chủ nhóm Tủ lạnh</a></div>
                        <div><a href="{{ route('host-list') }}?page=4">Sản phẩm show trang chủ nhóm Điều hòa</a></div>
                        <div><a href="{{ route('host-list') }}?page=8">Sản phẩm show trang chủ nhóm Gia dụng</a></div>
                        <div><a href="{{ route('host-list') }}?page=9">Sản phẩm show trang chủ nhóm Máy lọc nước</a></div>
                        <div><a href="{{ route('host-list') }}?page=71">Sản phẩm show trang chủ nhóm Máy sấy quần áo</a></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        
        .hidden{
            display: none;
        }
    </style>


    <!-- Modal -->
    <div class="modal fade" id="priceShowProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Danh sách chính sách giá</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <ul>

                            <?php 

                            $data_price_show = DB::table('show_price_address')->get();


                            ?>
                            @if(!empty($data_price_show))
                            @foreach($data_price_show as $val)
                            <li>{{ $val->name }} : {{ @str_replace(',' ,'.', number_format($value->price)) }}đ -- tình trạng: {{ $val->active==0?'Đang tắt':'Đang bật' }}  <a href="#" onclick="changePriceAddress('{{ $val->id }}')">sửa</a></li> 


                            <li class="repaird_{{ $val->id }} hidden" >
                                <form method="POST" action="{{ route('update-price-address', $val->id) }}">
                                    @csrf
                                    <input type="text" name="name" value="{{ $val->name }}">
                                    <input type="text" name="price" value="{{ $val->price }}">
                                    <select name="active">

                                        @for($i=0; $i<2;$i++)
                                            <option value="{{ $i }}"  {{ $val->active ==$i?'selected':'' }}>{{ $i==0?'Đang tắt':'Đang bật' }}</option>
                                        @endfor
                                        
                                        
                                    </select>

                                    <button type="submit">update</button>

                                </form>
                                

                            </li>
                            @endforeach
                            @endif
                        </ul>

                        <script type="text/javascript">
                            function changePriceAddress(id){
                                $('.repaird_'+id).removeClass('hidden');

                            }
                        </script>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                </div>
            </div>
        </div>
    </div>



    <?php 

        $promotion = App\Models\promotion::where('start', '>', \Carbon\Carbon::now()->toDateString())->OrderBy('id', 'desc')->get();
    ?>

    <!-- Modal -->
    <div class="modal fade" id="showmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                </div>
            </div>
        </div>
    </div>

@endsection

