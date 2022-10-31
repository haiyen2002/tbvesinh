<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nav;
class NavController extends Controller
{
    public function index()
    {
        $navs = Nav::getAllAndMergeChildrentNavs();
        return view('admin.navs.list', compact('navs'));
    }
    public function create()
    {
        $navs = Nav::all();
        return view('admin.navs.create', compact('navs'));
    }
    public function save(Request $request)
    {
        $nav = new Nav();
        $nav->nav_name = $request->nav_name;
        $nav->nav_path = $request->nav_path;
        $nav->order_nth = $request->order_nth;
        $nav->status = $request->status;
        $nav->parent_id = $request->parent_id;
        $nav->save();
        return redirect()->route('admin.navs_manager');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $nav = Nav::find($id);
        $navs = Nav::where([['status' , 1],['nav_id','<>',$id]])->get();
        return view('admin.navs.create', compact('nav', 'navs'));
    }
    public function update(Request $request)
    {
        $nav = Nav::find($request->id);
        if($nav){
            $nav->nav_name = $request->nav_name;
            $nav->nav_path = $request->nav_path;
            $nav->order_nth = $request->order_nth;
            $nav->status = $request->status;
            $nav->parent_id = $request->parent_id;
            $isSuccess = $nav->update();
            if($isSuccess){
                return redirect()->route('admin.navs_manager');
            }else{
                return back()->with(['errors' => 'Không tìm thấy menu cần sửa']);
            }
        }
        else{
            return back()->with(['errors' => 'Không tìm thấy menu cần sửa']);
        }
    }
    public function delete(Request $request)
    {
        $isDeleteSuccess = Nav::find($request->id)->delete();
        if ($isDeleteSuccess) {
            return redirect()->route('admin.navs_manager');
        }
        else {
            return redirect()->route('admin.navs_manager')->with(['error' => 'Delete failed']);
        }
    }
}