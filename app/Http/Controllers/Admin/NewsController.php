<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $limit = $request->limit ?? 10;
        $news = News::paginate($limit);
        return view('admin.news.index', compact('news'));
    }
    public function create()
    {
        return view('admin.news.store');
    }
    public function store(Request $request)
    {
        $news = new News();
        $news->news_keyword = $request->news_keyword;
        $news->news_title = $request->news_title;
        $news->news_title = $request->news_title;
        $news->news_content = $request->news_content;
        $news->news_description = $request->news_description;
        $news->news_status = $request->news_status;
        if ($request->news_image) {
            $brand->news_image = $request->file('news_image')->store('', 'images_news');
        }
        if ($news->save()) {
            return redirect()->to('admin/news');
        } else {
            return back()->with(['errors' => 'Lỗi không thể lưu dữ liệu']);
        }
    }
    public function edit(Request $request)
    {
        $news = News::find($request->news_id);
        return view('admin.news.store', compact('news'));
    }
    public function update(Request $request)
    {
        $news = News::find($request->news_id);
        if ($news) {
            $news->news_keyword = $request->news_keyword;
            $news->news_title = $request->news_title;
            $news->news_title = $request->news_title;
            $news->news_content = $request->news_content;
            $news->news_description = $request->news_description;
            $news->news_status = $request->news_status;
            if ($request->news_image) {
                Storage::disk('images_news')->delete($news->news_image);
                $news->news_image = $request->file('news_image')->store('', 'images_news');
            }
            if (is_numeric($news->save())) {
                return redirect()->to('admin/news');
            } else {
                return back()->with(['errors' => 'Lỗi không thể lưu dữ liệu']);
            }
        } else {
            return back()->with(['errors' => 'Tin tức này không tồn tại']);
        }
    }
    public function delete(Request $request)
    {
        $news = News::find($request->news_id);
        if ($news) {
            Storage::disk('images_news')->delete($news->news_image);
            if ($news->delete()) {
                return redirect()->to('admin/news');
            } else {
                return back()->with(['errors' => 'Lỗi không thể xóa dữ liệu']);
            }
        } else {
            return back()->with(['errors' => 'Lỗi không thể xóa dữ liệu']);
        }
    }
}
