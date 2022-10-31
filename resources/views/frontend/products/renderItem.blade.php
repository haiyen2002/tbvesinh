    @if ($product)
        <div class="product-item beauty-hover beauty-hover bg-white rounded shadow my-3 px-3">
            <div class="image-container">
                <a class="w-100  image-lg" href="{{ url('products/' . $product['product_path']) }}">
                    <div class="first">
                        <div class="d-flex justify-content-between align-items-center">
                            @if (is_numeric($product['discount']))
                                <span class="discount">-{{ $product['discount'] }}'%</span>
                            @endif
                            <span class="wishlist"><i class="fa fa-heart"></i></span>
                        </div>
                    </div>
                    <img src="{{ url('images/products/' . $product['product_image']) }}"
                        alt="{{ $product['product_name'] }}" class="img-fluid lozad rounded thumbnail-image">
                </a>
            </div>
            <div class="product-detail-container p-2">
                <a href="{{ url('products/' . $product['product_path']) }}">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="product-name">{{ $product['product_name'] }}</h5>
                        <div class="d-flex flex-column mb-2">
                            <span class="new-price">{{ $product['real_cost'] }}</span>
                            <small
                                class="old-price text-right">{{$product['unit_cost'] }}</small>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between align-items-center pt-1">
                    {{-- <div>
                        <i class="fa fa-star rating-star"></i>
                        <span class="rating-number">4.8</span>
                    </div> --}}
                    <form class="d-flex" action="{{ url('cart/add') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['product_id'] }}">
                        <input type="number" name="quantity" value="1"
                            class="form-control w-50 mx-3 form-control-sm quantity" min="1">
                        <input type="hidden" name="p_cost" value="{{ $product['unit_cost'] }}">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button>
                    </form>
                </div>
            </div>
        </div>
    @endif