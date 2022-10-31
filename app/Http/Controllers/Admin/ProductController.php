<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Brand;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit ?? 10;
        $products = Product::paginate($limit);
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.store', compact('brands', 'categories'));
    }
    public function store(Request $request)
    {
        if(Product::find($request->product_id)){
            return redirect()
                ->route('admin.products')
                ->with(['errors' => 'Mã sản phẩm đã tồn tại']);
        }
        try {
            $product = new Product();
            $product->product_id = $request->product_id;
            $product->product_name = $request->product_name;
            $product->discount = $request->discount;
            $product->brand_id = $request->brand_id;
            $product->qr_code = $request->qr_code;
            $product->origin = $request->origin;
            $product->amount = $request->amount;
            $product->category_id = $request->category_id;
            $product->product_path = Str::slug($request->product_name);
            $product->hot = $request->hot;
            $product->weight = $request->weight;
            $product->unit_cost = $request->unit_cost;
            $product->real_cost = $request->real_cost;
            if ($request->discount == '' && $request->unit_cost && $request->real_cost) {
                $product->discount = intval(($request->real_cost * 100) / $request->unit_cost);
            }
            if ($request->unit_cost == '' && $request->discount && $request->real_cost) {
                $product->unit_cost = intval(($request->real_cost * 100) / $request->discount);
            }
            if ($request->real_cost == '' && $request->unit_cost && $request->discount) {
                $product->real_cost = intval(($request->unit_cost * (100 - $request->discount)) / 100);
            }
            $product->product_title = $request->product_title;
            $product->product_description = $request->product_description;
            $product->product_status = $request->product_status;
            $product->product_content = $request->product_content;
            if ($request->product_image) {
                $product->product_image = $request->file('product_image')->store('', 'images_products');
            }
            if ($request->product_image_slide) {
                foreach ($request->product_image_slide as $item) {
                    $product->product_image_slide += $item->store('', 'product_image');
                }
            }
            $product->save();
            return redirect()
                ->route('admin.products')
                ->with(['messages' => 'Thêm sản phẩm thành công']);
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.products')
                ->with(['errors' => 'Thêm sản phẩm thất bại']);
        }
    }
    public function edit(Request $request)
    {
        $brands = Brand::all();
        $product = Product::find($request->id);
        $categories = Category::all();
        return view('admin.products.store', compact('product', 'brands', 'categories'));
    }
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        if ($product) {
            try {
                $product->product_name = $request->product_name;
                $product->discount = $request->discount;
                $product->qr_code = $request->qr_code;
                $product->origin = $request->origin;
                $product->amount = $request->amount;
                $product->brand_id = $request->brand_id;
                $product->category_id = $request->category_id;
                $product->product_path = Str::slug($request->product_name);
                $product->hot = $request->hot;
                $product->weight = $request->weight;
                $product->unit_cost = $request->unit_cost;
                $product->real_cost = $request->real_cost;
                if ($request->discount == '' && $request->unit_cost && $request->real_cost) {
                    $product->discount = intval(($request->real_cost * 100) / $request->unit_cost);
                }
                if ($request->unit_cost == '' && $request->discount && $request->real_cost) {
                    $product->unit_cost = intval(($request->real_cost * 100) / $request->discount);
                }
                if ($request->real_cost == '' && $request->unit_cost && $request->discount) {
                    $product->real_cost = intval(($request->unit_cost * (100 - $request->discount)) / 100);
                }
                $product->product_title = $request->product_title;
                $product->product_description = $request->product_description;
                $product->product_status = $request->product_status;
                $product->product_content = $request->product_content;
                if ($product->product_image) {
                    Storage::disk('images_products')->delete($product->product_image);
                }
                $product->product_image = $request->file('product_image')->store('', 'images_products');
                if ($request->product_image_slide) {
                    foreach ($request->product_image_slide as $item) {
                        Storage::disk('images_products')->delete($product->product_image);
                        $product->product_image_slide += $item->store('', 'product_image');
                    }
                }
                $product->save();
                return redirect()
                    ->route('admin.products')
                    ->with(['messages' => 'Cập nhật thành công']);
            } catch (\Exception $e) {
                return back()->with(['errors' => 'Cập nhật thất bại']);
            }
        } else {
            return back()->with(['errors' => 'Sản phẩm không tồn tại']);
        }
    }
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        if ($product) {
            if ($request->product_image) {
                Storage::disk('images_products')->delete($product->product_image);
            }
            if ($request->product_image_slide) {
                foreach ($request->product_image_slide as $item) {
                    Storage::disk('images_products')->delete($product->product_image);
                }
            }
            $product->delete();
            return redirect()
                ->route('admin.products')
                ->with(['messages' => 'Xoá thành công']);
        } else {
            return back()->with(['errors' => 'Lỗi không thể xóa dữ liệu']);
        }
    }
}
