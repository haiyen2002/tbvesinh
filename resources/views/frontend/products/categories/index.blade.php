@extends('frontend.layouts.main')
@section('content')
    <div class="container-fruid px-4">
        <div class="row">
            {{-- <div class="col-3">
            @include('frontend.products.categories.left')
        </div>
        <div class="col-9"> --}}
           {{--  @if ($isCategories) --}}
                @include('frontend.products.categories.list')
            {{-- @else
                @include('frontend.products.list')
            @endif --}}
            {{-- </div> --}}
        </div>
    </div>
@endsection
