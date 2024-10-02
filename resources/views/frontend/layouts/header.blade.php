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
    <meta name="description" content=""/>
    <meta property="og:title" content="" />
    <meta property="og:description" content="" /> 
    <meta name="keywords" content="Khuyến mại lớn, giảm giá mạnh,"/>
    @else

        @if($nameRoute =='homeFe')
            <?php 

                $metaSeo = App\Models\metaSeo::find(2123);
            ?>
            <title>{{  $metaSeo->meta_title }}</title>
            <meta name="description" content="{{ $metaSeo->meta_content??''}}"/>

        @else


        <title>{{  !empty($name_cates_cate)?$name_cates_cate:$meta->meta_title }}</title>
        <meta name="description" content="{{ $meta->meta_content??''}}"/>
        @endif


    <meta property="og:title" content="{{  !empty($meta->meta_title)?$meta->meta_title:'' }}" />
    <meta property="og:description" content="{{ $meta->meta_content??'' }}" /> 
    <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>
    @endif
@endif