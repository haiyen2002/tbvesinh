@extends('frontend.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <div id="product-detail">
        <div class="row">
            <div id="content" class="col-md-12">
                <h2 class="title-product visible-xs">{{ $product['product_name'] }}</h2>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="thumbnails">
                            <li><a class="thumbnail" href="{{ url('images/products/' . $product['product_image']) }}"
                                    title="{{ $product['product_name'] }}">
                                    @if ($product['qr_code'])
                                        <div class="qr_code">
                                            <img rel="nofollow" src="{{ url('images/products/' . $product['qr_code']) }}"
                                                alt="{{ $product['product_name'] }}">
                                        </div>
                                    @endif
                                    <img src="{{ url('images/products/' . $product['product_image']) }}"
                                        class="lodas img-prev w-100" title="{{ $product['product_name'] }}"
                                        alt="{{ $product['product_name'] }}">
                                </a></li>
                            <?php $imageSlide = explode(',', $product['product_image_slide']); ?>
                            @foreach ($imageSlide as $item)
                                <li class="image-additional">
                                    <a class="thumbnail" href="{{ url('images/products/' . $item) }}"
                                        title="{{ $product['product_name'] }}">
                                        <img src="{{ url('images/products/' . $item) }}"
                                            title="{{ $product['product_name'] }}" alt="{{ $product['product_name'] }}">
                                    </a>
                                </li>
                            @endforeach
                            @if ($product['discount'] > 0)
                                <p class="tag sale">-{{ $product['discount'] }}%</p>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-6 product-detail-info">
                        <div class="btn-group d-none">
                            <button type="button" data-toggle="tooltip" class="btn btn-default" title=""
                                onclick="wishlist.add('{{ $product['product_id'] }}');"
                                data-original-title="Th??m v??o DS y??u th??ch"><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" class="btn btn-default" title=""
                                onclick="compare.add('{{ $product['product_id'] }}');"
                                data-original-title="So s??nh s???n ph???m d???ch v???"><i class="fa fa-exchange"></i></button>
                        </div>
                        <div class="product-detail-info__categories">
                            <a href="#">Test</a>
                            <a href="#">Test</a>
                            <a href="#">Test</a>
                            <a href="#">Test</a>
                        </div>
                        <h2 class="title-product d-md-block d-none">{{ $product['product_name'] }}</h2>
                        <div class="product-detail-info__list">
                            <ul class="list-unstyled">
                                <li class="manufacturers hidden">
                                    <i class="fa fa-check-circle"></i>Ha??ng sa??n xu????t: <a
                                        href="{{ url('products/brand/' . $brand['path']) }}"><strong>{{ $brand['brand_name'] }}</strong></a>
                                </li>
                                <li><i class="fa fa-check-circle"></i>M?? s???n ph???m:
                                    <strong>{{ $product['product_name'] }}</strong>
                                </li>
                                <li><i class="fa fa-check-circle"></i>Xu???t x???:
                                    <strong>{{ $product['product_name'] }}</strong>
                                </li>
                                <li><i class="fa fa-check-circle"></i>T??nh tr???ng:
                                    <strong>{{ $product['amount'] - $product['selled'] > 0 ? 'C??n h??ng' : 'h???t h??ng' }}</strong>
                                </li>
                            </ul>
                            <div class="manufacturers_img"><a href="{{ url('products/brand/' . $brand['path']) }}"><img
                                        src="{{ url('images/products/' . $brand['brand_image']) }}"
                                        alt="{{ $brand['brand_name'] }}" title="{{ $brand['brand_name'] }}"></a></div>
                        </div>
                        <ul class="product-detail-info__price list-unstyled">
                            <li class="new-price">
                                <div>Gi?? khuy???n m??i:</div>
                                <div>
                                    <h2>{{ $product['real_cost'] }} ??</h2> <i>(???? c?? VAT)</i>
                                </div>
                            </li>
                            <li class="old-price">
                                <div>Gi?? g???c:</div>
                                <div><span>{{ $product['unit_cost'] }} ??</span></div>
                            </li>
                        </ul>
                        <div id="product">
                            <form class="d-flex" action="{{ url('cart/add') }}" method="post">
                                <div class="product-detail-info__action form-group">
                                    <div class="button-group row">
                                        <div class="product-detail-info__action__quantity col-xs-12 col-sm-3">
                                            <label class="control-label" for="input-quantity">S??? l?????ng</label>
                                            <input type="text" name="quantity" value="1" size="2"
                                                id="input-quantity" class="form-control">
                                            <input type="hidden" name="product_id" value="{{ $product['product_id'] }}">
                                        </div>
                                        <div class="col-xs-12 col-sm-5">
                                            <button type="button" id="button-buy" data-loading-text="??ang X??? l??..."
                                                class="btn btn-primary btn-lg btn-block"><i class="fa fa-check"
                                                    aria-hidden="true"></i> ?????t h??ng</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <button type="button" id="button-cart" data-loading-text="??ang X??? l??..."
                                                class="btn btn-secondary btn-lg btn-block text-black"><i class="fa fa-cart-plus"
                                                    aria-hidden="true"></i> Th??m v??o gi???</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="product-detail-info__action__call">ho???c g???i <a class="call"
                                                    href="tel:{{ $site['site_phone'] }}"><i class="fa fa-phone"></i>
                                                    <span>{{ $site['site_phone'] }}</span></a> - <a class="call"
                                                    href="tel:{{ $site['site_phone_2'] }}"><i class="fa fa-phone"></i>
                                                    <span>{{ $site['site_phone_2'] }}</span></a> ????? ?????t h??ng</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product-detail-info__help">
                            <a href="#" rel="nofollow" target="_blank"><i class="fa fa-file"></i>H?????ng
                                d???n mua h??ng</a>
                            <a href="#" rel="nofollow" target="_blank"><i class="fa fa-file"></i>H?????ng d???n giao v??
                                nh???n h??ng</a>
                            <a href="#" rel="nofollow" target="_blank"><i class="fa fa-file"></i>Ph????ng th???c thanh
                                to??n</a>
                            <a href="#" rel="nofollow" target="_blank"><i class="fa fa-file"></i>Ch??nh s??ch b???o
                                h??nh</a>
                        </div>
                        <ul class="product-detail-info__features">
                            <li>
                                <div class="product-detail-info__features__item">
                                    <div class="title"><img
                                            src="{{ url('images/products/icon-shop-features-1.png') }}">Giao h??ng mi???n
                                        ph??
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-detail-info__features__item">
                                    <div class="title"><img
                                            src="{{ url('images/products/icon-shop-features-2.png') }}">Cam k???t ch??nh
                                        h??ng
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-detail-info__features__item">
                                    <div class="title"><img
                                            src="{{ url('images/products/icon-shop-features-3.png') }}">Chi???t kh???u h???p
                                        d???n
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-detail-info__features__item">
                                    <div class="title"><img
                                            src="{{ url('images/products/icon-shop-features-4.png') }}">Thanh to??n ????n
                                        gi???n
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="product-detail-content -description">
                        <div class="title-section">
                            <h3>Chi ti???t</h3>
                        </div>
                        <div>
                            <h2><span style="font-size:14px;"><strong>Th??ng s??? k??? thu???t <a
                                            href="{{ url('products/brand/' . $brand['path']) }}">{{ $brand['brand_name'] }}</a>
                                        {{ $product['product_id'] }}</strong></span></h2>
                            {!! $product['product_content'] !!}
                        </div>
                    </div>
                </div>
                <div class="title-section">
                    <h3>S???n ph???m c??ng lo???i</h3>
                </div>
                @if (count($productsRelative) > 0)
                    <div class="col-12 my-3 px-5">
                        <h3 class="product-relative-title primary-text-color text-center">
                            S???n ph???m li??n quan
                        </h3>
                        <div class="product-relative common-swiper swiper">
                            <div class="swiper-wrapper product-relative-content">
                                @foreach ($productsRelative as $product)
                                    <div class="swiper-slide">
                                        @include('frontend.products.renderItem')
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="view-more text-center">
                            <a href="{{ $product['category_path'] }}">Xem th??m <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                @endif
                {{-- <p class="tag-list">Th??? t??? kh??a:
                    <a href="">Sen-tam-toto</a>,
                    <a href="">sen-tam-cao-cap</a>,
                    <a href="">voi-sen-toto</a>,
                    <a href="">voi-sen-tam-nong-lanh</a>
                </p> --}}
            </div>
        </div>

    </div>
    <script defer src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        window.onload = function() {
            let productDetailImgSlide = new Swiper('.product-detail-img-slide', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.product-detail-img-slide .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.product-detail-img-slide .swiper-button-next',
                    prevEl: '.product-detail-img-slide .swiper-button-prev',
                },
            });
            let productDetailThumbImgSlide = new Swiper('.product-detail-thumb-img-slide', {
                slidesPerView: 3,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.product-detail-thumb-img-slide .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.product-detail-thumb-img-slide .swiper-button-next',
                    prevEl: '.product-detail-thumb-img-slide .swiper-button-prev',
                },
                thumbs: {
                    swiper: productDetailImgSlide,
                },
            });
            $('.thumbnails').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
@endsection
