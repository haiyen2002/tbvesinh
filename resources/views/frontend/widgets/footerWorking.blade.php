@if($site['footer_working_image'])
<section class="footer-info-working container clearfix">
    <img src="{{url('images/'.$site['footer_working_image'])}}" data-src="{{url('images/'.$site['footer_working_image'])}}" alt="working time" title="working time" class="lozad d-none d-md-block loaded" data-loaded="true">
    <img src="{{url('images/'.$site['working_mobile'])}}" data-src="{{url('images/'.$site['working_mobile'])}}" alt="working time" title="working time" class="lozad d-block d-md-none">
</section>
@endif