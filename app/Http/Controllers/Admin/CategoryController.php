<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit ?? 10;
        $categories = Category::paginate($limit);
        return view('admin.categories.index', compact('categories'));
    }
    public function create()
    {
        $categoriesPath = Category::paths();
        $categories = Category::all();
        return view('admin.categories.store', compact('categoriesPath', 'categories'));
    }
    public function store(Request $request)
    {
        try{
            $category = new Category();
            $category->category_name = $request->category_name;
            $category->category_path = Str::slug($request->category_name, '-');
            $category->category_description = $request->category_description;
            $category->category_parent_id = $request->category_parent_id;
            $category->category_status = $request->category_status;
            if ($request->category_image) {
                $category->category_image = $request->file('category_image')->store('', 'images_products');
            }
            $category->save();
            return redirect()->route('admin.categories')->with(['messages' => 'Thêm mới thành công']);
        }
        catch(\Exception $e){
            dd($e);
            return redirect()->back()->with(['errors' => 'Thêm mới thất bại']);
        }
    }
    public function edit(Request $request)
    {
        $category = Category::find($request->id);
        $categories = Category::where([['category_status', 1], ['category_id', '<>', $category->category_id]])->get();
        return view('admin.categories.store', compact('category', 'categories'));
    }
    public function update(Request $request)
    {
        $category = Category::find($request->id);
        if ($category) {
            $category->category_name = $request->category_name;
            $category->category_path = Str::slug($request->category_name, '-');
            $category->category_description = $request->category_description;
            $category->category_parent_id = $request->category_parent_id;
            $category->category_status = $request->category_status;
            if ($request->category_image) {
                Storage::disk('images_products')->delete($category->category_image);
                $category->category_image = $request->file('category_image')->store('', 'images_products');
            }
            $idUpdated = $category->update();
            if ($idUpdated) {
                return redirect()->route('admin.categories');
            } else {
                return redirect()->route('admin.create_category');
            }
        } else {
            return redirect()->route('admin.create_category');
        }
    }
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        if ($category) {
            try {
                Storage::disk('images_products')->delete($category->category_image);
                $category->delete();
                return redirect()
                    ->back()
                    ->with(['messages' => 'Xóa thành công']);
            } catch (\Exception $e) {
                return redirect()
                    ->back()
                    ->with(['messages' => 'Xóa không thành công']);
            }
        } else {
            return redirect()->back()->with(['messages' => 'Xóa không thành công']);
        }
    }
}
