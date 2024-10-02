@if(!empty($meta))
<title>{{ $meta->meta_title }}</title>
<meta name="description" content="{{ @$meta->meta_content }}"/>
<meta property="og:title" content="{{ @$meta->meta_title }}" />
@if(!empty($data) && !empty($data->Image))
<meta property="og:image" content="{{ asset($data->Image) }}"/>
@endif
<meta property="og:description" content="{{ @$meta->meta_content }}" /> 
<meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>
<link rel="shortcut icon" href="{{ asset('images/template/favicon-muasamtaikho.ico') }}">  
<link rel="canonical" href="{{ url()->current() }}" >
@else
    @if($nameRoute =='sale-home'||$nameRoute =='dealFe')
    <title>Mua Sắm Tại Kho - Mua bán điện tử, điện lạnh, gia dụng chính hãng tại kho</title>
    <meta name="description" content="Hàng ngàn khuyến mại hấp dẫn và giảm giá tại Siêu Thị Điện Máy Người Việt. Liên hệ hotline 0247.303.6336 để biết thêm thông tin chi tiết"/>
    <meta property="og:title" content="Khuyến mại lớn, giảm giá mạnh tại Điện Máy Người Việt" />
    <meta property="og:description" content="Hàng ngàn khuyến mại hấp dẫn và giảm giá tại Siêu Thị Điện Máy Người Việt. Liên hệ hotline 0247.303.6336 để biết thêm thông tin chi tiết" /> 
    <meta name="keywords" content="Khuyến mại lớn, giảm giá mạnh,"/>
    @else

     <?php 

        if(!Cache::has('meta5959')){

            $metas = App\Models\metaSeo::find(1); 

            Cache::put('meta5959', $metas, 100000);

        }
        
        $meta = Cache::get('meta5959');
     ?>

    <title>{{  !empty($name_cates_cate)?$name_cates_cate:$meta->meta_title }}</title>
    <meta name="description" content="{{ $meta->meta_content??''}}"/>


    <meta property="og:title" content="{{  !empty($meta->meta_title)?$meta->meta_title:'' }}" />
    <meta property="og:description" content="{{ $meta->meta_content??'' }}" /> 
    <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>
    @endif
@endif