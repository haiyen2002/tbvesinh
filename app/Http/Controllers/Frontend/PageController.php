<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
class PageController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::getPageByNavPath($request->page);
        if(!$page){
            return view('errors/404');
        }
        else{
            return view('frontend.pages.index', $page);
        }
    }
}