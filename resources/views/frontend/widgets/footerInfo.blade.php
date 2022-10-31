@if(count($footerInfos)>0)
<section class="footer-info-com container clearfix my-3">
    <div class="row">
        <div class="footer-info-com__title col-sm-12">
            <img src="{{ url('images/' . $site['site_logo']) }}" alt="{{ $site['site_name'] }}" title="{{ $site['site_name'] }}" class="logo-solid lozad">
            <h2>HỆ THỐNG SHOWROOM <br class="d-md-none">{{ $site['site_name'] }}</h2>
        </div>
    </div>
    <div class="row">
        @foreach($footerInfos as $item)
        <div class="col-sm-6">
            <div class="footer-info-com__branch">
                <h3>{{ $item['name'] }}<a href="{{$item['map']}}" class="map-btn d-none d-md-inline-block" target="_blank" rel="nofollow"><i class="fa fa-map-marker" aria-hidden="true"></i> Bản đồ</a></h3>
                <ul>
                    <li><b>Địa chỉ</b>: {{$item['address']}}</li>
                    <li><b>Điện thoại</b>: <a href="tel:{{$item['phone']}}">{{$item['phone']}}</a> – <a href="tel:{{$item['phone2']}}">{{$item['phone2']}}</a> <span class="d-none d-md-inline">-</span> <br class="d-bloc d-sm-none"><b>Email</b>: <a href="mailto:{{$item['email']}}">{{$item['email']}}</a></li>
                </ul>
                <div class="d-md-none">
                    <a href="{{$item['map']}}" class="map-btn" target="_blank" rel="nofollow"><i class="fa fa-map-marker" aria-hidden="true"></i> Bản đồ</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif