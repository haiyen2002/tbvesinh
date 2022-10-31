@extends('admin.layouts.main')
@section('content')
<div class="news-manager">
    <div class="news-manager-header my-3">
        <h3>News Manager</h3>
        <a href="{{url('admin/news/create')}}" class="btn btn-primary btn-sm">Sửa New News</a>
    </div>
    <div class="news-manager-body my-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Ảnh</th>
                    <th>Slug</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                    <tr>
                        <td>{{$new['news_id']}}</td>
                        <td>{{$new['news_title']}}</td>
                        <td class="image-sm"><img src="{{@url('images/news/' . $new['news_image'])}}" alt="{{$new['news_title']}}" width="100"></td>
                        <td>{{$new['news_path']}}</td>
                        <td>
                            <a href="{{url('admin/news/edit/' . $new['news_id'])}}" class="btn btn-primary btn-sm">Sửa</a>
                            <a href="{{url('admin/news/delete/' . $new['news_id'])}}" class="btn btn-danger btn-sm">Xoá</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!!$news->links()!!}
    </div>
</div>
@endsection