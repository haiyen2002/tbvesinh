@extends('admin.layouts.main')
@section('content')
    <div class="categories">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title primary-text-color">Danh mục</h4>
                <a href="{{ route('admin.create_category') }}" class="btn btn-primary btn-round">
                    <i class="fa fa-plus"></i>
                    Thêm
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Slug</th>
                            <th>Trạng thái</th>
                            <th>Hiện trên slide</th>
                            <th>Hành động</th>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ @$category['category_id'] }}</td>
                                    <td class="image-lg"><img class="lodas w-100 lozad"
                                            src="{{ url('images/products/' . $category['category_image']) }}"
                                            alt="{{ @$category['category_name'] }}"></td>
                                    <td>{{ @$category['category_name'] }}</td>
                                    <td>{{ @$category['category_path'] }}</td>
                                    <td>
                                        @if ($category['category_status'])
                                            <div class="btn btn-primary">Hiện</div>
                                        @else
                                            <div class="btn btn-danger">Ẩn</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($category['in_promotion'])
                                            <div class="btn btn-primary">Hiện</div>
                                        @else
                                            <div class="btn btn-danger">Ẩn</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/categories/edit/' . $category['category_id']) }}"
                                            class="btn btn-primary btn-round my-2">
                                            <i class="fa fa-edit"></i>
                                            Sửa
                                        </a>
                                        <a href="{{ url('admin/categories/delete/' . $category['category_id']) }}"
                                            class="btn btn-danger btn-round my-2">
                                            <i class="fa fa-trash"></i>
                                            Xoá
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!!$categories->links()!!}
                </div>
            </div>
        </div>
    </div>
@endsection
