@if(count($productsHot))
<div class="col-md-12 my-3">
    <h2 class="text-center">Sản phẩm nổi bật</h2>
    <div class="list-product common-swiper list-product-hot swiper">
        <div class="swiper-wrapper">
            @foreach ($productsHot as $product)
                <div class="swiper-slide">
                    @include('frontend.products.renderItem')
                </div>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
@else
    @include('errors.404')
@endif