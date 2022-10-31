@extends('admin.layouts.main')
@section('content')
<div class="slide-edit my-5">
    <h3>
        @if (isset($slide))
        Sửa Slide
        @else
        Sửa Slide
        @endif
    </h3>
    <form action="{{isset($slide)?url('admin/slides/edit/'.$slide['slide_id'])url('admin/slides/create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group my-3">
            <label for="slide_name">Slide Title</label>
            <input type="text" class="form-control" id="slide_name" name="slide_name"
                value="{{ @$slide['slide_name']}}">
        </div>
        @if(isset($slide['slide_image'])) :
        <div class="preview-logo my-3 image-lg">
            <img class="lodas w-100" src="{{ url('images/products/' . $slide['slide_image']) }}"
                alt="">
        </div>
        @endif
        <div class="form-group my-3">
            <label for="slide_image">Slide Image</label>
            <input type="file" class="form-control" id="slide_image" name="slide_image">
        </div>
        <div class="form-group my-3">
            <label for="for_page">For page</label>
            <input type="text" class="form-control" id="for_page" name="for_page"
                value="{{ @$slide['for_page']}}">
        </div>
        <div class="form-group my-3">
            <label for="slide_status">Slide Status</label>
            <select class="form-control" id="slide_status" name="slide_status">
                <option value="1"
                    {{isset($slide) && $slide['slide_status'] == 1 ? 'selected' : ''}}>Hiện
                </option>
                <option value="0"
                    {{isset($slide) && $slide['slide_status'] == 0 ? 'selected' : ''}}>Ẩn
                </option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
    
@endsection