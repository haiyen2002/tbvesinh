@extends('admin.layouts.main')
@section('content')
    <div class="slides-manager">
        <div class="slides-manager-header">
            <div class="slides-manager-header-title">
                <h2>Slides</h2>
            </div>
            <div class="slides-manager-header-action">
                <a href="{{ route('admin.create_slide') }}" class="btn btn-primary">Sửa Slide</a>
            </div>
        </div>
        <div class="slides-manager-body">
            <div class="slides-manager-body-table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slides as $slide)
                            <tr>
                                <td>{{ $slide['slide_id'] }}</td>
                                <td class="image-lg">
                                    <img class="lodas w-100" src="{{ url('images/products/') . $slide['slide_image'] }}"
                                        alt="">
                                </td>
                                <td>{{ $slide['slide_name'] }}</td>
                                <td>
                                    @if ($slide['slide_status'])
                                        <div class="btn btn-primary">Hiện</div>
                                    @else
                                        <div class="btn btn-danger">Ẩn</div>
                                    @endif
                                <td>
                                    <a href="{{ url('admin/slides/edit/' . $slide['slide_id']) }}"
                                        class="btn btn-primary">Sửa</a>
                                    <a href="{{ url('admin/slides/delete/' . $slide['slide_id']) }}"
                                        class="btn btn-danger">Xoá</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!!$slides->links()!!}
            </div>
        </div>
    </div>
@endsection
