@if (count($brands) > 0)
<div class="col-lg-3 col-12 my-3">
    <h2 class="text-center h4 primary-text-color">Hãng thiết bị vệ sinh</h2>
    <div class="row">
            @foreach ($brands as $brand)
            <div class="col-xs-6 col-sm-4 brand-item my-3 col-lg-6">
                <div class="beauty-hover brand-item">
                    <a href="{{url('products/brand/'.$brand['path'])}}">
                        <img class="lodas w-100 rounded" src="{{ url('images/products/' . $brand['brand_image']) }}" alt="{{$brand['brand_name']}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif