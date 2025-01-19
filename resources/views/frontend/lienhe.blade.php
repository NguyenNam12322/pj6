@extends('frontend.layouts.apps')
@section('content')

@push('style')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}"> 

        <link rel="stylesheet" type="text/css" href="{{ asset('css/categories.css') }}"> 
 
         <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
 @endpush  

    
<div class="category">
    <div class="container">
        <h1>Liên Hệ</h1>
        @if(session()->has('success'))
        <p>{{ session('success') }}</p>

        @endif

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.2602976662934!2d106.60657887583797!3d10.714395260333214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752dcbb278f4dd%3A0x7a8c1da09f385be0!2zMTAzIEjhu5MgSOG7jWMgTMOjbSwgQW4gTOG6oWMsIELDrG5oIFTDom4sIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1737278990497!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    
</div>


@endsection