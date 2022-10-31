<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->page ?? 1;
        $limit = $request->limit ?? 10;
        $news = News::getNewsByPage($page, $limit);
        return view('frontend.news.index', compact('news'));
    }
    public function detail(Request $request)
    {
        $news = News::getNewsByPath($request->slug);
        $newsRelated = News::getNewsByPage();
        return view('frontend.news.detail', compact('news', 'newsRelated'));
    }
}