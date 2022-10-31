<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FooterInfo;
class FooterInfoController extends Controller
{
    public function index()
    {
        $footerInfos = FooterInfo::all();
        return view('admin.footerInfos.list', compact('footerInfos'));
    }
    public function create()
    {
        return view('admin.footerInfos.create');
    }
    public function store(Request $request)
    {
        $footer_info = new FooterInfo();
        $footer_info->name = $request->name;
        $footer_info->address = $request->address;
        $footer_info->phone = $request->phone;
        $footer_info->status = $request->status;
        $footer_info->phone2 = $request->phone2;
        $footer_info->email = $request->email;
        $footer_info->map = $request->map;
        $footer_info->save();
        return redirect()->route('admin.footerInfo');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $footerInfo = FooterInfo::find($id);
        return view('admin.footerInfos.create', compact('footerInfo'));
    }
    public function update(Request $request)
    {
        $footer_info = FooterInfo::find($request->id);
        if ($footer_info) {
            $footer_info->name = $request->name;
            $footer_info->address = $request->address;
            $footer_info->phone = $request->phone;
            $footer_info->status = $request->status;
            $footer_info->phone2 = $request->phone2;
            $footer_info->email = $request->email;
            $footer_info->map = $request->map;
            $isSuccess = $footer_info->update();
            if ($isSuccess) {
                return redirect()->route('admin.footerInfos');
            } else {
                return back()->with(['errors' => 'Không tìm thấy menu cần sửa']);
            }
        } else {
            return back()->with(['errors' => 'Không tìm thấy menu cần sửa']);
        }
    }
    public function delete(Request $request)
    {
        $isDeleteSuccess = FooterInfo::find($request->id)->delete();
        if ($isDeleteSuccess) {
            return redirect()->route('admin.footerInfos');
        } else {
            return redirect()
                ->route('admin.footerInfos')
                ->with(['error' => 'Delete failed']);
        }
    }
}
