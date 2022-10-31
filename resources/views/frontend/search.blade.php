<div class="container search-result my-5">
    @if (count($products) > 0 || count($news) > 0)
        <div class="row">
            <div class="col-md-12">
                <div class="search-result-title primary-text-color">
                    <h3>Kết quả tìm kiếm cho: <span>{{$keyword}}</span></h3>
                </div>
            </div>
        </div>
        @if (count($products) > 0)
            <h3 class="text-center my-5 primary-text-color title-product">Danh sách sản phẩm</h3>
            <div class="d-flex my-5">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-6">
                        @include('frontend.products.renderItem')
                    </div>
                @endforeach
            </div>
        @endif
        @if ($news != null && count($news) > 0)
            @include('frontend.news.index')
        @endif
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="search-result-title primary-text-color">
                    <h3>Không tìm thấy kết quả nào cho: <span>{{$keyword}}</span></h3>
                </div>
            </div>
        </div>
    @endif
</div>