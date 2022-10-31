<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\News;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $productsHot = Product::where(['hot' => 1, 'product_status' => 1])->get();
        $categories = Category::queryAllCategoriesActive($request);
        $products = Product::getAllProductWithPagination($request);
        $brands = Brand::where(['brand_status' => 1])->get();
        $isCategories = true;
        return view('frontend.products.categories.index', compact('products', 'categories', 'brands', 'productsHot', 'isCategories'));
    }
    public function detail(Request $request)
    {
        $news = News::getNewsByPage();
        $productsHot = Product::where(['hot' => 1, 'product_status' => 1])->get();
        $categories = Category::queryAllCategoriesActive();
        $brands = Brand::where(['brand_status' => 1])->get();
        $product = Product::getProductByPath($request->slug);
        $brand = Brand::find($product['brand_id']);
        $category = Category::find($product['category_id']);
        $productsRelative = $category->products->where(['product_status' => 1]);
        return view('frontend.products.detail', compact('productsHot', 'categories', 'brand','product', 'productsRelative', 'brands', 'news'));
    }
    public function category(Request $request)
    {
        $productsHot = Category::getProductHotByCategoryPathAndPage($request);
        $categories = Category::queryAllCategoriesActive();
        $category = Category::getCategoryByPath($request->category);
        $products = Product::getProductsByCategoryPath($request);
        $brands = Brand::where(['brand_status' => 1])->get();
        $isCategories = true;
        return view('frontend.products.categories.index', compact('products', 'categories', 'brands', 'productsHot', 'category', 'isCategories'));
    }
    public function brand(Request $request)
    {
        $limit = $request->limit??15;
        $categories = Category::queryAllCategoriesActive();
        $brands = Brand::where(['brand_status' => 1])->get();
        $brand = Brand::where(['brand_status' => 1, 'path' => $request->slug])->first();
        $products = Product::getProductsByBrandPath($request);
        $isCategories = false;
        return view('frontend.products.categories.index', compact('products', 'categories', 'brands', 'brand', 'isCategories'));
    }
}
