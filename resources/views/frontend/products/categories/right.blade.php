@extends('frontend.layouts.main')
@section('content')
<div class="news-right">
    <div class="primary-text-color news-right-title">
        <h3>Tin tức</h3>
    </div>
    <ul class="new-list">
        @if(isset($news) && count($news) > 0)
        @foreach($news as $item)
        <li>
            <a href="{{ url('news/detail/' . $item['news_id']) }}">
                {{$item['news_title']
            </a>
        </li>
        @endforeach
        @endif
    </ul>
</div>

@endsection