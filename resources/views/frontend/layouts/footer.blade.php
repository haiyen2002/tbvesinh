@include('frontend.widgets.footerInfo')
@include('frontend.widgets.footerWorking')
<footer class="container-fluid bg-secondary">
    <div class="row pt-5 text-white bg-success">
        <div class="footer-info d-flex col-md-8 my-3">
            <div class="footer-logo col-md-4">
                <img class="w-100 p-2" src="{{ url('images/' . $site['site_logo']) }}" alt="{{ $site['site_name'] }}">
            </div>
            <ul class="footer-info-text list-group list-group-flush col-md-8 ps-2">
                <li class="list-group-item bg-success text-white">
                    {{ $site['site_description'] }}
                </li>
                <li class="list-group-item bg-success text-white">{{ $site['site_name'] }}</li>
                <li class="list-group-item bg-success text-white"><a
                        href="{{ $site['site_address'] }}">{{ $site['site_address'] }}</a></li>
                <li class="list-group-item bg-success text-white">{{ $site['site_phone'] }}</li>
                <li class="list-group-item bg-success text-white">{{ $site['site_email'] }}</li>
            </ul>
        </div>
        <div class="footer-contact col-md-4 my-3">
            <ul class=" footer-social mx-0 px-0 d-flex w-100 justify-content-around">
                <li><a href="{{ url($site['site_facebook']) }}">
                        <i class="fab fa-facebook-f"></i>
                    </a></li>
                <li><a href="{{ url($site['site_twitter']) }}">
                        <i class="fab fa-twitter"></i>
                    </a></li>
                <li><a href="{{ url($site['site_youtube']) }}">
                        <i class="fab fa-youtube"></i>
                    </a></li>
                <li>
                    <a href="mailto:{{$site['site_email']}}">
                        <i class="fas fa-envelope"></i>
                    </a>
                </li>
                <li>
                    <a href="tel:{{$site['site_phone']}}">
                        <i class="fas fa-phone"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-menu col-12 d-flex">
        @if (isset($footerNav) && count($footerNav) > 0)
            @foreach ($menus as $menu)
                <div class="footer-menu-item col-md-3">
                    <h5 class="text-white">{{ $menu['menu_name'] }}</h5>
                    <ul class="list-unstyled">
                        @foreach ($menu['sub_menus'] as $sub_menu)
                            <li><a href="{{ url($sub_menu['sub_menu_url']) }}">{{ $sub_menu['sub_menu_name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        @endif
    </div>
    <div class="footer-copyright py-2 text-center">
        <span class="text-white">Copyright &copy; {{ date('Y') }} {{ $site['site_name'] }}</span>
    </div>
    </div>
</footer>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/toastGenerate.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/lozad.min.js') }}"></script>
<script src="{{asset('js/common.js')}}"></script>
<script src="{{ asset('js/index.js') }}"></script>