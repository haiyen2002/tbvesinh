@extends('admin.layouts.main')
@section('content')
<div class="container">
    @foreach($images as $image)
    <div class="col-md-3 shadow rounded my-3 btn">
        <img class="lodas lozad w-100" src="{{ url($image) }}" alt="Card image cap">
    </div>
    @endforeach
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let images = document.querySelectorAll('.btn');
        images.forEach(function(image) {
            image.addEventListener('click', function() {
                let src = image.querySelector('img').src;
                window.opener.CKEDITOR.tools.callFunction(1, src);
                window.close();
            });
        });
    });
</script>

@endsection