@extends('frontend.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            @include('frontend.slide')
            @include('frontend.widgets.shopFeature')
            @include('frontend.hot')
            @include('frontend.category')
            @include('frontend.brand')
        </div>
    </div>
@endsection
