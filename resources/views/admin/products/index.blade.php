@extends('admin.layouts.main')
@section('content')
<div class="product-manager">
    <div class="product-manager-header">
        <div class="product-manager-header-title primary-text-color">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="product-manager-header-action">
            <a href="{{ route('admin.create_product') }}" class="btn btn-primary">Thêm sản phẩm</a>
        </div>
    </div>
    <div class="product-manager-body">
        <div class="product-manager-body-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Hot</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product['product_id']}}</td>
                        <td class="image-sm">
                            <img class="lodas w-100" src="{{ url('images/products/' . $product['product_image']) }}" alt="">
                        </td>
                        <td>{{$product['product_name']}}</td>
                        <td>{{$product['real_cost']}}</td>
                        <td>{{$product['hot']==1?'Yes':'No'}}</td>
                        <td>
                            <a href="{{url('admin/products/edit/'.$product['product_id']) }}" class="btn btn-primary">Sửa</a>
                            <a href="{{url('admin/products/delete/'.$product['product_id']) }}" class="btn btn-danger">Xoá</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!!$products->links()!!}
        </div>
    </div>
</div>

@endsection