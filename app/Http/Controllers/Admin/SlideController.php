<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $limit = $request->limit ?? 10;
        $slides = Slide::paginate($limit);
        return view('admin.slides.index', compact('slides'));
    }
    public function create()
    {
        return view('admin.slides.store');
    }
    public function store(Request $request)
    {
        try{
            $slide = new Slide();
            $slide->for_page = $request->for_page;
            $slide->slide_name = $request->slide_name;
            $slide->slide_status = $request->slide_status;
            if ($request->slide_image) {
                $slide->page_image = $request->file('slide_image')->store('', 'images_products');
            }
            $slide->save();
            return redirect()->route('admin.slides')->with( ['messages' => 'Thêm mới thành công']);
        }
        catch(\Exception $e){
            return back()->with(['errors' => 'Thêm mới thất bại']);
        }
    }
    public function edit(Request $request)
    {
        $slide = Slide::find($request->id);
        if (count($slide) > 0) {
            return view('admin.slides.store', compact('slide'));
        } else {
            return back()->with(['errors' => 'Không tìm thấy slide']);
        }
    }
    public function update(Request $request)
    {
        $slide = Slide::find($request->id);
        if (count($slide) > 0) {
            $updateData = [];
            $updateData['for_page'] = $request->for_page;
            $updateData['slide_name'] = $request->slide_name;
            $updateData['slide_status'] = $request->slide_status;
            if ($request->slide_image) {
                Storage::disk('images_pages')->delete($request->slide_image);
                $page_detail->slide_image = $request->file('slide_image')->store('', 'images_pages');
        }
            if (isset($request->slide_image) && $request->slide_image['name'] != '') {
                try {
                    $file = $request->slide_image;
                    $file_name = $file['name'];
                    $file_tmp = $file['tmp_name'];
                    if (file_exists('public/images/products/' . $file_name)) {
                        $file_name = date('Y-m-d-H-i-s') . '-' . $file_name;
                    }
                    move_uploaded_file($file_tmp, 'public/images/products/' . $file_name);
                    $updateData['slide_image'] = $file_name;
                    if ($slide['slide_image'] != '') {
                        unlink('public/images/products/' . $slide['slide_image']);
                    }
                } catch (\Exception $e) {
                }
            }
            $idUpdated = (new Slide())->where(['slide_id' => $request->id])->update($updateData);
            if (is_numeric($idUpdated)) {
                return redirect()->route('admin.slides')->with(['messages' => 'Cập nhật thành công']);
            } else {
                return back()->with(['errors' => 'Cập nhật thất bại']);
            }
        } else {
            return back()->with(['errors' => 'Không tìm thấy slide']);
        }
    }
    public function delete(Request $request)
    {
        $slide = Slide::find($request->id);
        if (count($slide) > 0) {
            $isDeleted = Slide::where([['slide_id' => $request->id]])->delete();
            if ($isDeleted) {
                if ($slide['slide_image'] != '') {
                    unlink('public/images/products/' . $slide['slide_image']);
                }
                return back()->with(['messages' => 'Xóa thành công']);
            } else {
                return back()->with(['errors' => 'Xóa thất bại']);
            }
        } else {
            return back()->with(['errors' => 'Không tìm thấy slide']);
        }
    }
}
