@extends('admin.layouts.main')
@section('content')
<div class="brands">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title primary-text-color">Danh sách thương hiệu</h4>
                    <a href="{{@route('admin.create_brand')}}" class="btn btn-primary btn-sm">Thêm</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>Trạng thái</th>
                                <th>Hiện trên slide</th>
                                <th>Hành động</th>
                            </thead>
                            <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{$brand['brand_id']}}</td>
                                        <td>{{$brand['brand_name']}}</td>
                                        <td class="image-sm"><img src="{{@url('images/products/'.$brand['brand_image'])}}" alt="{{$brand['brand_name']}}" class="lozad" width="100"></td>
                                        <td>
                                            @if($brand['brand_status'])
                                            <div class="btn btn-primary">Hiện</div>
                                            @else
                                            <div class="btn btn-danger">Ẩn</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($brand['in_promotion'])
                                            <div class="btn btn-primary">Hiện</div>
                                            @else
                                            <div class="btn btn-danger">Ẩn</div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{@url('admin/brands/edit/'.$brand['brand_id'])}}" class="btn btn-primary btn-sm">Sửa</a>
                                            <a href="{{@url('admin/brands/delete/'.$brand['brand_id'])}}" class="btn btn-danger btn-sm">Xoá</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!!$brands->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection