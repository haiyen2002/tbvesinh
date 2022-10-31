<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Page;
use App\Models\Brand;
use App\Models\News;
use App\Models\Invoice;

class AdminController extends Controller{
    public function index(){
        $amountProducts = Product::count();
        $amountCategories = Category::count();
        $amountUsers = User::count();
        $amountPages = Page::count();
        $amountBrands = Brand::count();
        $amountNews = News::count();
        $amountInvoices = Invoice::count();
        return view('admin.dashboard',compact('amountProducts',
        'amountCategories',
        'amountUsers',
        'amountPages',
        'amountBrands',
        'amountNews',
        'amountInvoices'));
        }
}