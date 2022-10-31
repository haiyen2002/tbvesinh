<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Slide;
use App\Models\News;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $productsHot = Product::where(['hot'=>1,'product_status' => 1])->get();
        $slide = Brand::where(['in_promotion'=>1,'brand_status' => 1])->get();
        $categories = Category::queryAllCategoriesActive();
        $brands = Brand::where(['brand_status' => 1])->get();
        $products=[];
        foreach ($categories as $category) {
            $products[$category['category_id']] = Product::where(['category_id' => $category['category_id'], 'product_status' => 1])->get();
        }
        return view('frontend.home', compact('productsHot', 'categories', 'brands', 'products', 'slide'));
    }
    public function search(Request $request)
    {
        $keyword = $request->q;
        $products = Product::getProductsByKeyword($keyword);
        $news = News::getNewsByKeyword($keyword);
        return view('frontend.search', compact('products', 'news','keyword'));
    }
    public function account(Request $request)
    {
        return view('frontend.account.index');
    }
    public function password(Request $request)
    {
        return view('frontend.account.password');
    }
    public function updateAccount(Request $request)
    {
        $user = Auth::guard('web')->user();
        if(count($user) > 0) {
            $updateData;
            if(isset($request->password)){
                if($request->password == $request->re_password){
                    $oldPasswod = password_hash($request->old_password, env('APP_KEY'));
                    if($oldPasswod != $user->password){
                        return back()->with([
                            'errors' => 'Mật khẩu cũ không đúng'
                        ]);
                    }
                    $updateData['password'] = password_hash($request->password, env('APP_KEY'));
                }
                else{
                    return back()->with()->with('errors', 'Mật khẩu không khớp');
                }
            }
            else{
                $updateData = [
                    'user_name' => $request->user_name,
                    'gender'=> $request->gender,
                    'address'=> $request->address,
                    'phone'=> $request->phone,
                    'email'=> $request->email,
                ];
                if(isset($request->user_image) && $request->user_image['name'] != '') {
                    try {
                        $file = $request->user_image;
                        $file_name = $file['name'];
                        $file_tmp = $file['tmp_name'];
                        if (file_exists('public/images/users/' . $file_name)) {
                            $file_name = date('Y-m-d-H-i-s') . '-' . $file_name;
                        }
                        move_uploaded_file($file_tmp, 'public/images/users/' . $file_name);
                        $updateData['user_image'] = $file_name;
                        if($user['user_image'] != '') {
                            unlink('public/images/users/' . $user['user_image']);
                        }
                    } catch (\Exception $e) {
                        
                    }
                }
            }
            $idUpdated = User::where(['user_id'=> $request->id])->update($updateData);
            if($idUpdated > 0) {
                return back()->with('messages', 'Cập nhật thành công');
            }
            else{
                return back()->with('errors', 'Cập nhật thất bại');
            }
        }
        else{
            return back()->with('errors', 'Cập nhật thất bại');
        }
    }
    public function orders(Request $request)
    {
        return view('frontend.account.orders');
    }
    public function cart(Request $request)
    {
        return view('frontend.cart');
    }
}