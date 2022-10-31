@extends('frontend.layouts.main')
@section('content')
<div class="new-list container">
    <div class="news-right-title primary-text-color">
        <h3>Tin tức</h3>
    </div>
    @include('frontend.news.renderNews')
</div>

@endsection