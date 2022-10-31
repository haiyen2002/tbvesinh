<?php
$cart = [];
if ($currentUser != null) {
    $cart = App\Models\InvoicePerProduct::getAllForUserId($currentUser['user_id']);
}
?>

<div class="header shadow animate__fadeInDown rounded">
    <div class="header-top bg-danger text-white">
        <h3 class="container my-0 h6 py-2">
            <i class="fa fa-bell" aria-hidden="true"></i> <b> {{ $site['promo'] }}</b>
        </h3>
    </div>
    <div class="header-main py-2 bg-white">
        <div class="container">
            <div class="row">
                <div class="header-logo text-center col-md-3 col-sm-5 p-2">
                    <a href="{{ url('') }}">
                        <img height="45" class="" src="{{ url('images/' . @$site['site_logo']) }}"
                            alt="{{ $site['site_name'] }}">
                    </a>
                </div>
                <form
                    class="header-search-bar hearder-nav-item justify-content-evenly align-items-center d-flex col-lg-5 col-md-7 col-sm-4 position-relative"
                    action="{{ @url('search') }}" method="get">
                    @csrf
                    <input type="text" name="q" class="form-control rounded-0 rounded-start"
                        placeholder="Search">
                    <button class="btn btn-warning btn-primary-color text-white px-4 h3 m-0 rounded-0 rounded-end"><i
                            class="fas fa-search"></i></button>
                </form>
                <div class="header-bottom-right col-lg-4 col-sm-2 justify-content-evenly align-items-center d-flex">
                    <ul class="col-6 justify-content-evenly align-items-center d-flex px-0">
                        <div class="hearder-nav-item">
                            <a href="{{ @url('register') }}" title="Tài khoản của tôi"
                                class="dropdown-toggle no-after justify-content-evenly align-items-center d-flex">
                                <div class="col-lg-5 me-1">
                                    <div class="btn btn-secondary btn-square text-center">
                                        <i class="fa fa-user primary-text-color m-0 h5"></i>
                                    </div>
                                </div>
                                <div class="col-lg-7 d-lg-block d-none">
                                    <h6>Tài khoản</h6>
                                    <small>
                                        @if (!$currentUser)
                                            Đăng nhập / Đăng ký
                                        @else
                                            Dashboard
                                        @endif
                                    </small>
                                </div>
                            </a>
                            <ul class="dropdown-menu bg-secondary shadow rounded">
                                @if (!$currentUser)
                                    <li><a href="{{ @url('login') }}">Login</a></li>
                                    <li><a href="{{ @url('register') }}">Register</a></li>
                                @else
                                    <li><a href="{{ @url('account') }}">My Account</a></li>
                                    <li><a href="{{ @url('logout') }}">Logout</a></li>
                                @endif
                            </ul>
                        </div>
                    </ul>
                    <ul class="col-6 justify-content-evenly align-items-center d-flex px-0">
                        <div class="hearder-nav-item">
                            <a href="{{ @url('cart') }}"
                                class="dropdown-toggle no-after justify-content-evenly align-items-center d-flex">
                                <div class="col-lg-5">
                                    <div class="btn btn-secondary btn-square text-center">
                                        <i class="fas fa-shopping-cart h5 primary-text-color m-0"></i>
                                    </div>
                                </div>
                                <div class="col-lg-7 d-lg-block d-none">
                                    <h6>Giỏ hàng</h6>
                                    <small><span id="cart-total">{{ count($cart) }} sản phẩm - 0 đ</span></small>
                                </div>
                            </a>
                            <ul class="cart-list w-50 dropdown-menu end-0 bg-secondary shadow rounded">
                                @if (count($cart) > 0)
                                    @foreach ($cart as $item)
                                        @include('frontend.cart.cartItem')
                                    @endforeach
                                @else
                                    <div class="cart-empty">
                                        <p>Giỏ hàng của bạn đang trống</p>
                                        <a href="{{ url('') }}">Tiếp tục mua hàng</a>
                                    </div>
                                @endif
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom bg-white text-danger">
        <div class="container">
            <div class="d-flex justify-content-evenly align-items-center flex-wrap">
                <div class="header-catalog mx-0 position-relative">
                    <button class="btn header-catalog-btn btn d-block d-md-none navbar-toggle" data-toggle="collapse"
                        data-target="#main-menu__dropdown" aria-expanded="false"><i class="fa fa-bars"
                            aria-hidden="true"></i> Danh mục sản phẩm</button>
                    <div class="header-catalog-btn btn d-none d-md-block"><i class="fa fa-bars" aria-hidden="true"></i>
                        Danh mục sản phẩm</div>
                    <ul id="main-menu__dropdown collapse" class="main-menu__dropdown"></ul>
                </div>
                <ul
                    class="mx-0 header-nav header-bottom-left col-md-6 col-lg-4 d-flex justify-content-end align-items-center">
                </ul>
                <div class="header_hotline col-lg-4 col-md-6 col-12 ps-md-2">
                    <i class="fa fa-phone" aria-hidden="true"></i> HOTLINE: <b><a
                            href="tel:{{ $site['site_phone'] }}">{{ $site['site_phone'] }}</a> - <a
                            href="tel:{{ $site['site_phone_2'] }}">{{ $site['site_phone_2'] }}</a></b>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let navs = @json($headerNav);
    let catalogNav = @json($categoriesNav);
    const appUrl = '{{ url('/') }}';

    handlegetHeaderCatagory(catalogNav);
    handleRenderHeaderNav(navs);

    function handleRenderHeaderNav(navs = [], container = '.header-nav') {
        document.querySelector(container).innerHTML = renderNav(navs);
    }

    function handlegetHeaderCatagory(navs = [], container = '.main-menu__dropdown') {
        let html = '';
        navs.forEach(element => {
            if (element['children'] && element['children'].length) {
                html += '<li><a href="' + appUrl + '/categories/' + element['category_path'] + '">' +
                    '<h3>' + element['category_name'] + '</h3>' + element['category_description'] 
                    +'</a><button type="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#main-menu__dropdown__level-1">' +
                    '<i class="fa fa-angle-up" aria-hidden="true"></i></button>' +
                    '<div class="main-menu__dropdown__level-1 collapse" id="main-menu__dropdown__level-1"><ul>' +
                        getHeaderCatagory(element['children']); +
                '</ul></div></li>';
            } else {
                html += '<li><a href="' + appUrl + '/categories/' + element['category_path'] + '>' +
                    '<h3>' + element['category_name'] + '</h3>' + '<p>' + element['category_description'] + '</p>';
                html += '</li>';
            }
        });
        document.querySelector(container).innerHTML = html;
    }

    function getHeaderCatagory(navs = []) {
        let html='';
        navs.forEach(element => {
            html += '<li>' +
                '<h4><a href="' + appUrl + '/categories/' + element['category_path'] + '">' + element['category_name'] +
                '</h4>';
            if (element['children'] && element['children'].length) {
                html += renderHeaderCatChild(element['children']);
            }
            html += '</li>';
        });
        return html;
    }

    function renderHeaderCatChild(navs = []) {
        let html;
        navs.forEach(element => {
            html += '<a href="' + appUrl + '/' + element['category_path'] + '">' + element['nav_name'] + '</a>'
        });
        return html;
    }

    function renderNav(navs) {
        let html = '';
        navs.forEach(element => {
            if (element['children'] && element['children'].length) {
                html += '<li class="dropdown hearder-nav-item">';
                html += '<a href="' + appUrl + '/' + element['nav_path'] +
                    '" class="dropdown-toggle no-after" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' +
                    element['nav_name'] +
                    '<span class="caret"></span></a>';
                html += '<ul class="dropdown-menu bg-secondary shadow rounded">';
                html += renderNav(element['children']);
                html += '</ul>';
                html += '</li>';
            } else {
                html += '<li class="hearder-nav-item"><a  href="' + appUrl + '/' + element[
                        'nav_path'] +
                    '">' + element['nav_name'] +
                    '</a></li>';
            }
        });
        return html;
    }
</script>
