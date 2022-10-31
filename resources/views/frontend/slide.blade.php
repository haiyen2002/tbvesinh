@if (count($slide) > 0)
    <div class="col-md-12 my-3">
        <div class="main-slide shadow">
            <div class="slide swiper">
                <div class="swiper-wrapper">
                    @foreach ($slide as $item)
                        <div class="swiper-slide">
                            <a href="{{ url('products/brand/' . $item['brand_id']) }}" class="brand-path">
                                <img class="w-100 rounded" src="{{ url('images/products/' . $item['brand_image']) }}"
                                    alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="slide-des swiper">
                <div class="swiper-wrapper">
                    @foreach ($slide as $item)
                        <div class="swiper-slide p-3">
                            <div class="link-category bold">
                                {{ $item['brand_description'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', function() {
            let swiperSlideOption = {
                slidesPerView: 1,
                spaceBetween: 10,
                rewind: true,
                lazy: true,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                    clickable: true,
                },
                speed: 4000,
                longSwipesRatio: 0.01,
                lazy: {
                    loadPrevNext: true,
                }
            };
            let mainSlide = new Swiper(".slide", swiperSlideOption);
            let mainSlideDes = new Swiper(".slide-des", Object.assign(swiperSlideOption, {
                slidesPerView: 3,
                lazy: true,
                rewind: true,
                loop: true,
                spaceBetween: 0,
                navigation: {
                    enabeled: false
                },
                breakpoints: {
                    1: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    }
                }
            }));
            mainSlideDes.controller.control = mainSlide;
        });
    </script>
@else
    @include('errors.404')
@endif
