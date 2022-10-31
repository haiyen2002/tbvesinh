@extends('admin.layouts.main')
@section('content')
    <div class="create-footerInfo">
        <h1>{{ isset($footerInfo) ? 'Thêm chi nhánh' : 'Sửa chi nhánh' }}</h1>
        <form class="row"
            action="{{ isset($footerInfo) ? url('admin/footerInfos/update/' . $footerInfo['footer_info_id']) : route('admin.create_footerInfo') }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-8">
                <div class="form-group my-3">
                    <label for="name">Tên chi nhánh</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Nhập tên chi nhánh"  value={{ @$footerInfo['name'] }}>
                </div>
                <div class="form-group my-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="Nhập tên danh mục"  value={{ @$footerInfo['address'] }}>
                </div>
                <div class="form-group my-3">
                    <label for="phone">Sđt liên hệ 1</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        placeholder="Nhập số điện thoại" value={{ @$footerInfo['phone'] }}>
                </div>
                <div class="form-group my-3">
                    <label for="phone2">Sđt liên hệ 2</label>
                    <input type="text" class="form-control" id="phone2" name="phone2"
                        placeholder="Nhập số điện thoại" value={{ @$footerInfo['phone2'] }}>
                </div>
                <div class="form-group my-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Nhập tên Email" value={{ @$footerInfo['email'] }}>
                </div>
                <div class="form-group my-3">
                    <label for="map">Map</label>
                    <input type="text" class="form-control" id="map" name="map"
                        placeholder="Nhập địa chỉ map đã chia sẻ" value={{ @$footerInfo['map'] }}>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group my-3">
                    <label for="status">Trạng thái</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1"
                            {{ isset($footerInfo) && $footerInfo['status'] == 1 ? 'selected' : '' }}>Hiện</option>
                        <option value="0"
                            {{ isset($footerInfo) && $footerInfo['status'] == 0 ? 'selected' : '' }}>Ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group my-3">
                <button type="submit" class="btn btn-primary">Xác nhận</button>
            </div>
        </form>
    </div>
@endsection
