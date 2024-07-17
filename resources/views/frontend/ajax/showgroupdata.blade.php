<div class="gift-info"></div>
<div class="w100p show-group-data  desktop">
    <div class="span16 nk_houseware_best_selling_2020_wrapper nk_homepage_houseware_best_selling_2020_wrapper js_done ">
        <div class="menu-wrap0" style="height: 35px;">
            <div class="menu-wrap">

                <?php 
                    $define = ['Ao Smith','Tivi', 'Máy giặt', 'Tủ lạnh','Điều hòa' ];

                ?>

                @foreach($define as $key => $value)
                <div class="menu-item {{ $key==$id?'active':''  }}" data-id="{{ $key }}" data-uid=""><span>{{ $value }}</span></div>
                @endforeach

                
               
            </div>
        </div>


        <div class="product-item show-data-group mouse-mover" data-uid="4133_3386">
            <div class="nk-product-cate-style-grid nk-product-collection nk-product- clearfix">
                <div id="pagination_contents" class="nk-product nks-fs-sync index-index" data-fs-type="0">

                   
                    @foreach($data as $key =>$datas)

                   
                        <div class="product col-md-3 col-xs-6 item">
                            <div class="product-header" href="{{ route('details', $datas->Link) }}">
                                <div class="top-right">
                                    <div class="product-feature-badge-item installment"><span>Trả góp 0%</span></div>
                                </div>
                                <div class="product-image">
                                    <a href="{{ route('details', $datas->Link) }}">
                                        <img
                                            class="ls-is-cached lazyloaded"
                                            
                                            src="{{ asset($datas->Image) }}"
                                            
                                        />
                                    </a>
                                </div>
                                
                            </div>
                            <div class="product-body">
                                <div class="product-feature-badge"></div>
                                <div class="product-title"><a href="{{ route('details', $datas->Link) }}">{{ $datas->Name }}</a></div>
                                <div class="product-price">
                                    <p class="final-price">{{ @str_replace(',' ,'.', number_format($datas->Price)) }}đ   </p>
                                    
                                </div>
                            </div>
                            <div class="product-footer"></div>
                             @include('frontend.layouts.more-info', ['value'=>$datas])
                        </div>
                      
                  

                    @endforeach

                </div>
            </div>
        </div>

        <div class="view-all-desk desktop"><span>Xem toàn bộ sản phẩm</span></div>
             
    </div>
</div>

<div class="w100p show-group-data mobiles-view mobile">
    <div class="span16 nk_houseware_best_selling_2020_wrapper nk_homepage_houseware_best_selling_2020_wrapper js_done ">
        <div class="menu-wrap0" style="height: 35px;">
            <div class="menu-wrap">

                <?php 
                    $dem = 0;


                ?>

                @foreach($define as $key => $value)
                <div class="menu-item {{ $key==$id?'active':''  }}" data-id="{{ $key }}" data-uid=""><span>{{ $value }}</span></div>
                @endforeach

                
               
            </div>

        </div>


        <div class="product-item show-data-group" data-uid="4133_3386">
            <div class="nk-product-cate-style-grid nk-product-collection nk-product- clearfix">
                <div id="pagination_contents" class="nk-product nks-fs-sync index-index" data-fs-type="0">

                    @foreach($data as $key =>$datas)

                        <?php 

                            $dem++;
                            if($dem>4){

                                break;

                            }
                        ?>
                        <div class="product col-md-3 col-xs-6">
                            <div class="product-header" href="{{ route('details', $datas->Link) }}">
                                <div class="top-right">
                                    <div class="product-feature-badge-item installment"><span>Trả góp 0%</span></div>
                                </div>
                                <div class="product-image">
                                    <a href="{{ route('details', $datas->Link) }}">
                                        <img
                                            class="ls-is-cached lazyloaded"
                                            
                                            src="{{ asset($datas->Image) }}"
                                            
                                        />
                                    </a>
                                </div>
                                
                            </div>
                            <div class="product-body">
                                <div class="product-feature-badge"></div>
                                <div class="product-title"><a href="{{ route('details', $datas->Link) }}">{{ $datas->Name }}</a></div>
                                <div class="product-price">
                                    <p class="final-price">{{ @str_replace(',' ,'.', number_format($datas->Price)) }}đ   </p>
                                    
                                </div>
                            </div>
                            <div class="product-footer"></div>
                        </div>
                      
                    @endforeach

                </div>
            </div>
        </div>
        <div class="view-all"><span>xem tất cả</span></div>
             
    </div>

    
</div>

<script type="text/javascript">
     $('.view-all span').click(function(){

        $('.mobiles-view').remove();
        $('.show-group-data').removeClass('desktop');
    })

    $('.menu-wrap0 .menu-item').click(function () {
        
        $('.menu-wrap0 .menu-item').removeClass('active');

        $(this).addClass('active');

        var id = $(this).attr('data-id')

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('showGroupData') }}",
            data: {

                id:id
               
            },

           
            success: function(result){

              
               // numberCart = result.find("#number-product-cart").text();

                $('.div-group').html(''); 

                $('.div-group').append(result);
                
            }
        });


    }); 

     var movingText = $(".gift-info");

    movingText.hide();

    if(window.innerWidth>768){

      // Xử lý sự kiện khi chuột di chuyển
        $(".mouse-mover .item").on("mousemove", function(event) {
            movingText.show();

            var id = $(this).attr("id");

            var data = $("#"+id+" .gifts-info").html();

            // nếu text dài thì add thêm height để chống tràn

            number_text_promotion =  parseInt($("#"+id+" .gifts-info").attr('data-text'));

            if(number_text_promotion >300){
                $(".gift-info").addClass('max-height');
            }

            if(number_text_promotion <300 && $(".gift-info").hasClass('max-height')){
                $(".gift-info").removeClass('max-height');
            }
            
            // end check


            $(".gift-info").html('');
            $(".gift-info").html(data);

            var x = event.pageX+15;
            var y = event.pageY+15;

            // Cập nhật vị trí của chữ theo vị trí của chuột
            movingText.css({
              "left": x,
              "top": y,
            });
          })
          .on("mouseout", function(event) {
            // Fade out element when mouse leaves
            movingText.hide();
          });

    }      
</script>
