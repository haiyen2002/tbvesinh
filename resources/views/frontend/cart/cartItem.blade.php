<div class="cart-item row my-3">
    <a class="image-lg cart-item-image col-md-4 col-12" href="{{ url('products/' . $item['product_path']) }}">
        <img class="lodas w-100" src="{{ url('images/products/' . $item['product_image']) }}" alt="">
    </a>
    <div class="cart-item-info col-md-8 col-12">
        <div class="cart-item-title primary-text-color">
            <a href="{{ url('products/' . $item['product_path']) }}">{{ $item['product_name'] }}</a>
        </div>
        <div class="cart-item-price">
            <span>{{ $item['quantity'] }}</span>
            <span>x</span>
            <span>{{ $item['p_cost'] }}</span>
        </div>
        <div class="cart-item-remove">
            <a class="btn btn-danger" href="{{ url('cart/remove/' . $item['invoice_id']) }}"><i
                    class="fa fa-times"></i></a>
        </div>
    </div>
</div>