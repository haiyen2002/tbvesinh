@extends('frontend.layouts.main')
@section('content')
    <div class="cart-list container my-3">
        <h1 class="my-3">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-count">{{ count($cart) }}</span>
            Giỏ hàng
        </h1>
        @if (count($cart) > 0)
            @foreach ($cart as $item)
                @include('frontend.cart.cartItem')
            @endforeach
        @else
            <div class="cart-empty">
                <p>Giỏ hàng của bạn đang trống</p>
                <a href="/">Tiếp tục mua hàng</a>
            </div>
        @endif
    </div>

@endsection