@extends('admin.layouts.main')
@section('content')
    <div class="create-brand">
        <h1>{{ isset($brand) ? 'Sửa Thương hiệu' : 'Thêm Thương hiệu' }}</h1>
        <form class="row"
            action="{{ isset($brand) ? url('admin/brands/update/' . $brand['brand_id']) : route('admin.create_brand') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-8">
                <div class="form-group my-3">
                    <label for="brand_name">Thương hiệu Name</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name"
                        placeholder="Thương hiệu Name" value="{{ isset($brand) ? $brand['brand_name'] : '' }}">
                </div>
                <div class="form-group my-3">
                    <label for="brand_description">Thương hiệu Description</label>
                    <input type="text" class="form-control" id="brand_description" name="brand_description"
                        placeholder="Thương hiệu Description"
                        value="{{ isset($brand) ? $brand['brand_description'] : '' }}">
                </div>
                <div class="form-group my-3">
                    <label for="in_promotion">Hiện trên slide trang chủ</label>
                    <select class="form-control" id="in_promotion" name="in_promotion">
                        @if (isset($brand))
                            <option value="1" {{ $brand['in_promotion'] == 1 ? 'selected' : '' }}>Hiện</option>
                            <option value="0" {{ $brand['in_promotion'] == 0 ? 'selected' : '' }}>Ẩn</option>
                        @else{
                            <option value="1">Hiện</option>
                            <option value="0">Ẩn</option>
                            }
                        @endif

                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="brand_status">Hiện thương hiệu</label>
                    <select class="form-control" id="brand_status" name="brand_status">
                        @if (isset($brand))
                            <option value="1" {{ $brand['brand_status'] == 1 ? 'selected' : '' }}>Hiện</option>
                            <option value="0" {{ $brand['brand_status'] == 0 ? 'selected' : '' }}>Ẩn</option>
                        @else{
                            <option value="1">Hiện</option>
                            <option value="0">Ẩn</option>
                            }
                        @endif

                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="preview-logo">
                    <img class="lodas w-100 image-lg lozad"
                        src="{{ isset($brand) ? url('images/products/' . $brand['brand_image']) : '' }}" alt="">
                </div>
                <div class="form-group my-3 my-3">
                    <label for="brand_image">Ảnh</label>
                    <input type="file" class="form-control" id="brand_image" name="brand_image"
                        value="{{ isset($brand) ? $brand['brand_image'] : '' }}">
                </div>
            </div>
            <div class="form-group my-3">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
@endsection
