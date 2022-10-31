@extends('admin.layouts.main')
@section('content')
<div class="user-manager">
    <div class="user-manager-header">
        <h3>Quản lý người dùng</h3>
    </div>
    <div class="user-manager-content">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Tên người dùng</th>
                    <th>Tài khoản</th>
                    <th>Ảnh đại diện</th>
                    <th>Quyền</th>
                    <th>Email</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user) 
                <tr>
                    <td>
                        {{@$user['user_name']}}
                    </td>
                    <td>
                        {{@$user['account']}}
                    </td>
                    <td>
                        <img src="{{url('images/users/' . $user['user_image'])}}" alt="{{@$user['user_name']}}" width="50" height="50">
                    </td>
                    <td>
                        @if ($user['role'] == 0)
                        <span class="badge bg-warning">Admin</span>
                        @else
                        <span class="badge bg-success">User</span>
                        @endif
                    </td>
                    <td>
                        {{@$user['email']}}
                    </td>
                    <td>
                        <a href="{{url('admin/users/edit/' . $user['user_id'])}}" class="btn btn-primary">Sửa</a>
                        <a href="{{url('admin/users/ban/' . $user['user_id'])}}" class="btn btn-warning">Ban</a>
                        <a href="{{url('admin/users/delete/' . $user['user_id'])}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!!$users->links()!!}
    </div>
</div>
@endsection