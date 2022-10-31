@extends('frontend.layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 my-3">
            <h1>{{$page_title}}</h1>
            <img src="{{$page_image}}" alt="{{$page_title}}" class="img-responsive">
        </div>
        <div class="col-md-12 my-3 image-max-width-100">
            {!!$page_content!!}
        </div>
    </div>
</div>
@endsection