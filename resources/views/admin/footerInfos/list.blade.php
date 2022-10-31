@extends('admin.layouts.main')
@section('content')
    <div class="footerInfos">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title primary-text-color">Danh mục</h4>
                <a href="{{ route('admin.create_footerInfo') }}" class="btn btn-primary btn-round">
                    <i class="fa fa-plus"></i>
                    Thêm
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Tên</th>
                            <th>địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </thead>
                        <tbody>
                            @foreach ($footerInfos as $footerInfo)
                                <tr>
                                    <td>{{ @$footerInfo['footer_info_id'] }}</td>
                                    <td>{{ @$footerInfo['name'] }}</td>
                                    <td>{{ @$footerInfo['address'] }}</td>
                                    <td>
                                        @if ($footerInfo['status'])
                                            <div class="btn btn-primary">Hiện</div>
                                        @else
                                            <div class="btn btn-danger">Ẩn</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/footerInfos/edit/' . $footerInfo['footer_info_id']) }}"
                                            class="btn btn-primary btn-round my-2">
                                            <i class="fa fa-edit"></i>
                                            Sửa
                                        </a>
                                        <a href="{{ url('admin/footerInfos/delete/' . $footerInfo['footer_info_id']) }}"
                                            class="btn btn-danger btn-round my-2">
                                            <i class="fa fa-trash"></i>
                                            Xoá
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
