<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Nav;
use App\Models\Page;
use App\Models\PageDetail;
class PageController extends Controller
{
    public function index()
    {
        $limit = $request->limit ?? 10;
        $pages = Page::paginate($limit);
        return view('admin.pages.index', ['pages' => $pages]);
    }
    public function create()
    {
        $navs = Nav::all();
        return view('admin.pages.store', ['navs' => $navs]);
    }
    public function store(Request $request)
    {
        $page = new Page();
        $page->page_name = $request->page_name;
        $page->nav_id = $request->nav_id;
        $page_id = $page->save();
        if (is_numeric($page_id)) {
            $page_detail = new PageDetail();
            $page_detail->page_id = $page_id;
            $page_detail->page_title = $request->page_title;
            $page_detail->page_keyword = $request->page_keyword;
            $page_detail->page_description = $request->page_description;
            $page_detail->page_content = $request->page_content;
            $page_detail->page_status = $request->page_status;
            if ($page_detail->page_image) {
                $page_detail->page_image = $request->file('page_image')->store('', 'images_pages');
            }
            $page_detail->save();
            return redirect()->route('admin.pages');
        } else {
            return redirect()->route('admin.create_page');
        }
    }
    public function edit(Request $request)
    {
        $page_id = $request->page_id;
        $page = Page::find($page_id);
        $page_detail = PageDetail::getPageDetailByPageId($page_id);
        if (!$page_detail) {
            $page_detail = [];
        }
        $navs = Nav::all();
        $page_info = array_merge($page, $page_detail);
        return view('admin.pages.store', compact('page_info', 'navs'));
    }
    public function update(Request $request)
    {
        $pages = Page::where(['page_id' => $request->page_id]);
        $PageDetailExit = PageDetail::getPageDetailByPageId($request->page_id);
        $UpdatedPageDetail;
        $dataStore = [
            'page_title' => $request->page_title,
            'page_keyword' => $request->page_keyword,
            'page_description' => $request->page_description,
            'page_content' => $request->page_content,
            'page_status' => $request->page_status,
        ];
        if ($request->page_image) {
                Storage::disk('images_pages')->delete($request->page_image);
                $page_detail->page_image = $request->file('page_image')->store('', 'images_pages');
        }
        if (is_numeric($UpdatedPage) && is_numeric($UpdatedPageDetail)) {
            return redirect()->to('admin/pages');
        } else {
            return back()->with(['errors' => 'Lỗi không thể lưu dữ liệu']);
        }
    }
    public function delete(Request $request)
    {
        $pageDetail = PageDetail::getPageDetailByPageId($request->page_id);
        if(count($pageDetail)>0&&$pageDetail['page_image']!=''){
            unlink('public/images/pages/' . $pageDetail['page_image']);
        }
        $isDeletedPage = (new Page())->where(['page_id' => $request->page_id])->delete();
        $isDeletedPageDetail = (new PageDetail())->where(['page_id' => $request->page_id])->delete();
        if ($isDeletedPage && $isDeletedPageDetail) {
            return redirect()->to('admin/pages');
        } else {
            return back()->with(['errors' => 'Lỗi không thể xóa dữ liệu']);
        }
    }
}
