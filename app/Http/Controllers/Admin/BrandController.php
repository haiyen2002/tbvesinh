<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
class BrandController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit ?? 10;
        $brands = Brand::paginate($limit);
        return view('admin.brand.index', ['brands' => $brands]);
    }
    public function create()
    {
        return view('admin.brand.store');
    }
    public function store(Request $request)
    {
        try {
            $brand = new Brand();
            $brand->brand_name = $request->brand_name;
            $brand->brand_description = $request->brand_description;
            $brand->brand_status = $request->brand_status;
            $brand->path = Str::slug($request->brand_name, '-');

            $message;
            if ($request->brand_image) {
                $brand->brand_image = $request->file('brand_image')->store('', 'images_products');
            }
            $brand->save();
            return redirect()->route('admin.brands');
        } catch (\Exception $e) {
            return redirect()->route('admin.create_brand');
        }
    }
    public function edit(Request $request)
    {
        $brand = Brand::find($request->id);
        return view('admin.brand.store', ['brand' => $brand]);
    }
    public function update(Request $request)
    {
        $brand = Brand::find($request->id);
        if ($brand) {
            try {
                $brand->brand_name = $request->brand_name;
                $brand->brand_description = $request->brand_description;
                $brand->brand_status = $request->brand_status;
                $brand->in_promotion = $request->in_promotion;
                $brand->path = Str::slug($request->brand_name, '-');

                if ($request->brand_image && $brand->brand_image) {
                    Storage::disk('images_products')->delete($brand->brand_image);
                    $brand->brand_image = $request->file('brand_image')->store('', 'images_products');
                }
                $idUpdated = $brand->save();
                return redirect()
                    ->route('admin.brands')
                    ->with(['messages' => 'Cập nhật thành công']);
            } catch (\Exception $e) {
                return back()->with(['errors' => 'Cập nhật thất bại']);
            }
        } else {
            return back()->with(['errors' => 'Cập nhật thất bại']);
        }
    }
    public function delete(Request $request)
    {
        $brand = Brand::find($request->id);
        if ($brand) {
            if($brand->brand_image){
                Storage::disk('images_products')->delete($brand->brand_image);
            }
            if ($brand->delete()) {
                return redirect()
                    ->route('admin.brands')
                    ->with(['messages' => 'Xóa thành công']);
            } else {
                return redirect()
                    ->route('admin.brands')
                    ->with(['errors' => 'Xóa không thành công']);
            }
        } else {
            return redirect()
                ->route('admin.brands')
                ->with(['errors' => 'Thương hiệu không tồn tại']);
        }
    }
}
