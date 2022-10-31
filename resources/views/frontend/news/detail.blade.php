@extends('frontend.layouts.main')
@section('content')
<div class="new-detail container">
    <h2 class="new-title primary-text-color text-center">
        {{$news['news_title']}}
    </h2>
    <div class="new-content">
        {{$news['news_content']}}
    </div>
    <div class="news-relate">
        <div class="news-right-title primary-text-color">
            <h3>Tin tức liên quan</h3>
        </div>
        @if(isset($newsRelative) && count($newsRelative) > 0)
        @foreach($newsRelative as $item)
        <a class="row" href="{{ url('news/detail/' . $item['news_path']) }}">
            <div class="new-list-img col-4">
                <img class="lodas w-100" src="{{ url('images/news/' . $item['news_image']) }}"
                    alt="{{ $item['news_title'] }}">
            </div>
            <div class="new-list-content col-8">
                {{$item['news_title']
            </div>
        </a>
        @endforeach
        @endif
    </div>
</div>
@endsection