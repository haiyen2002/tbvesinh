@extends('admin.layouts.main')
@section('content')
    <div class="create-category">
        <h1>{{ isset($category) ? 'Sửa Category' : 'Sửa Category' }}</h1>
        <form class="row"
            action="{{ isset($category) ? url('admin/categories/update/').'/' . $category['category_id'] : route('admin.create_category') }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-8">
                <div class="form-group my-3">
                    <label for="category_name">Tên danh mục</label>
                    <input type="text" class="form-control" id="category_name" name="category_name"
                        placeholder="Nhập tên danh mục" {{ @$category['category_name'] }} value={{ @$category['category_name'] }}>
                </div>
                <div class="form-group my-3">
                    <label for="category_parent_id">Danh mục cha</label>
                    <select class="form-control" id="category_parent_id" name="category_parent_id">
                        <option value>---------------Lựa chọn--------------</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat['category_id'] }}"
                                {{ isset($category) && $category['category_parent_id'] == $cat['category_id'] ? 'selected' : '' }}>
                                {{ $cat['category_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="category_description">Mô tả</label>
                    <textarea class="form-control" id="category_description" name="category_description" rows="3"
                        placeholder="Enter Category Description">{{ @$category['category_description'] }}</textarea>
                </div>
            </div>
            <div class="col-4">
                <div class="preview-logo image-lg my-3">
                    <img class="t-preview-image lodas w-100 lozad"
                        src="{{ isset($category) ? url('images/products/') .'/'. $category['category_image'] : '' }}"
                        alt="{{ @$category['category_name'] }}">
                </div>
                <div class="form-group my-3">
                    <label for="category_image">Hình ảnh</label>
                    <input type="file" class="form-control t-preview-input" id="category_image" name="category_image">
                </div>
                <div class="form-group my-3">
                    <label for="category_status">Trạng thái</label>
                    <select class="form-control" id="category_status" name="category_status">
                        <option value="1"
                            {{ isset($category) && $category['category_status'] == 1 ? 'selected' : '' }}>Hiện</option>
                        <option value="0"
                            {{ isset($category) && $category['category_status'] == 0 ? 'selected' : '' }}>Ẩn</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="in_promotion">Hiện trên slide</label>
                    <select class="form-control" id="in_promotion" name="in_promotion">
                        <option value="1"
                            {{ isset($category) && $category['in_promotion'] == 1 ? 'selected' : '' }}>Hiện</option>
                        <option value="0"
                            {{ isset($category) && $category['in_promotion'] == 0 ? 'selected' : '' }}>Ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group my-3">
                <button type="submit" class="btn btn-primary">Xác nhận</button>
            </div>
        </form>
    </div>
    <script>
       document.addEventListener("DOMContentLoaded", {
            $('.category_parent_id').select2();
            CKEDITOR.editorConfig = function(config) {
                config.image_previewText = '';
            };
            CKEDITOR.replace('category_description', {
                filebrowserBrowseUrl: '{{ @url('admin/images-news') }}',
                filebrowserImageBrowseUrl: '{{ @url('admin/images-news') }}',
                filebrowserUploadUrl: '{{ @url('admin/upload-news') }}',
                filebrowserImageUploadUrl: '{{ @url('admin/upload-news') }}',
                config: {
                    image_previewText: ''
                }
            });
        });
    </script>
@endsection
