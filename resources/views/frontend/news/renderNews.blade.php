@if (isset($news) && count($news) > 0)
    @foreach ($news as $item)
        <a class="row" href="{{ url('news/' . $item['news_path']) }}">
            <div class="new-list-img col-md-4">
                <img class="lodas w-100 h-100" src="{{ url('images/news/' . $item['news_image']) }}"
                    alt="{{ $item['news_title'] }}">
            </div>
            <div class="new-list-content col-md-8">
                <div>{{ $item['news_title'] }}</div>
                <div class="created_at"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $item['created_at'] }}</div>
            </div>
        </a>
    @endforeach
@endif
