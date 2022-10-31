<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $limit = $request->limit ?? 10;
        $users = User::paginate($limit);
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.store');
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->user_name = $request->user_name;
        $user->account = $request->account;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = password_hash($request->password, env('APP_KEY'));

        if ($request->user_image) {
            $user->user_image = $request->file('user_image')->store('', 'images_users');
        }
        $isSaved = $user->save();
        if ($isSaved) {
            return redirect()->route('admin.users.index')->with(['messages' => 'Thêm mới thành công']);
        } else {
            return redirect()->route('admin.users.create')->with(['messages' => 'Thêm mới thất bại']);
        }
    }
    public function edit(Request $request)
    {
        $user = User::find($request->id);
        if (count($user) > 0) {
            return view('admin.users.store', compact('user'));
        } else {
            return redirect()->route('admin.users.index')->with(['errors' => 'Không tìm thấy người dùng']);
        }
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            $user->user_name = $request->user_name;
            $user->account = $request->account;
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->role = $request->role;
            $user->email = $request->email;
            if ($request->user_image) {
                Storage::disk('images_users')->delete($user->user_image);
                $user->user_image = $request->file('user_image')->store('', 'images_users');
            }

            $idUpdated = $user->save();
            if (is_numeric($idUpdated)) {
                return redirect()->route('admin.users')->with(['messages' => 'Cập nhật thành công']);
            } else {
                return back()->with(['messages' => 'Cập nhật thất bại']);
            }
        } else {
            return redirect()->route('admin.users.index')->with(['errors' => 'Không tìm thấy người dùng']);
        }
    }
    public function ban(Request $request)
    {
        $isUpdated = User::where('user_id', $request->id)->update(['banned' => 1]);
        if ($isUpdated) {
            return redirect()->route('admin.users.index')->with(['messages' => 'Cập nhật thành công']);
        } else {
            return redirect()->route('admin.users.index')->with(['messages' => 'Cập nhật thất bại']);
        }
    }
    public function delete(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            Storage::disk('images_users')->delete($user->user_image);
            if ($user->delete()) {
                return redirect()->to('admin/user');
            } else {
                return back()->with(['errors' => 'Lỗi không thể xóa dữ liệu']);
            }
        } else {
            return back()->with(['errors' => 'Lỗi không thể xóa dữ liệu']);
        }
    }
}
