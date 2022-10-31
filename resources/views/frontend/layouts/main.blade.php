<!DOCTYPE html>
<html dir="ltr" lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ url('images/' . $site['site_favicon']) }}" type="image/x-icon">
    <title>{{ $site['site_name'] }}</title>
    <!--<base href="https://www.tdm.vn/">-->
    <base href=".">
    <meta name="description" content="{{ $site['site_description'] }}">
    <meta name="keywords" content="{{ $site['site_description'] }}">
    <link href="{{ url($site['site_favicon']) }}" rel="icon">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $site['site_name'] }}">
    <meta property="og:title" content="{{ $site['site_description'] }}">
    <meta property="og:url" content="{{ $site['website_url'] }}">

    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="revisit-after" content="1 days">
    <meta http-equiv="content-language" content="vi">
    <meta name="geo.placename" content="Vietnamese">
    <meta name="geo.region" content="VN">
    <meta name="distribution" content="Global">
    <meta name="dc.creator" content="{{ $site['site_name'] }}">
    <meta name="generator" content="{{ $site['website_url'] }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
</head>

<body>
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/635b32fddaff0e1306d462fc/1gge3ucg0';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    @include('frontend.layouts.header')
    <div class="min-vh-100 my-3 container">
        @include('errors/toasts')
        @yield('content')
    </div>
    @include('frontend.layouts.footer')
</body>

</html>
