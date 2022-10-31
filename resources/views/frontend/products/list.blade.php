@foreach ($categories as $category)
@if (count($products[$category['category_id']]) > 0)
<div class="col-md-12 my-3 image-max-width-100">
    <div class="list-product list-product-{{$category['category_id']}}">
        <h2 class="text-center primary-text-color title-product">{{$category['category_name']}}</h2>
        <div class="row">
            @foreach ($products[$category['category_id']] as $product)
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
                @include('frontend.products.renderItem')
            </div>
            @endforeach
        </div>
    </div>
    <div class="view-more text-center">
        <a class="mt-4 " href="{{ url($category['category_path']) }}">
            <div class="btn btn-success" >Xem thêm <i class="fa fa-angle-double-right"></i></div>  
        </a>
    </div>
    {{ $products->links() }}
</div>
@else
    @include('errors.404')
@endif
@endforeach