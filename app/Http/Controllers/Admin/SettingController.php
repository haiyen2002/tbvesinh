<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index');
    }
    public function save(Request $request)
    {
        $logo = isset($request->site_logo)?$request->site_logo:'';
        $favicon = isset($request->site_favicon)?$request->site_favicon:'';
        if ($logo!='') {
                $fileName = preg_replace('/(.*)\.(.*)/', 'logo.png', $logo->getClientOriginalName());
                $path = $request->file('site_logo')->storeAs($fileName,'', 'images');
                Site::where(['site_id'=> 1])->update(['site_logo' => $path]);
                return back()->with(['success' => 'Logo has been updated']);
        }
        if ($favicon!='') {
                $fileName = preg_replace('/(.*)\.(.*)/', 'favicon.$2', $favicon->getClientOriginalName());
                $path = $request->file('site_favicon')->storeAs($fileName,'', 'images');
                Site::where(['site_id'=> 1])->update(['site_favicon' => $path]);
                return back()->with(['success'=> 'Favicon has been updated']);
        }
        if ($request->has('submit_common')) {
           $isUpateSuccess =  Site::where(['site_id'=> 1])->update([
                'site_name' => $request->site_name,
                'site_email' => $request->site_email,
                'promo' => $request->promo,
                'website_url' => $request->website_url,
                'site_phone' => $request->site_phone,
                'site_phone_2' => $request->site_phone_2,
                'site_address' => $request->site_address,
                'site_description' => $request->site_description,
                'site_keywords' => $request->site_keywords,
                'site_copyright' => $request->site_copyright,
                'site_map' => $request->site_map,
            ]);
            if ($isUpateSuccess) {
                return back()->with(['success'=> 'Common setting has been updated']);
            }
            else {
                return back()->with(['error' => 'Update failed']);
            }
        }
        if($request->has('submit_social')){
            $isUpateSuccess = $site->where(['site_id' => 1])->update([
                'site_facebook' => $request->site_facebook,
                'site_twitter' => $request->site_twitter,
                'site_google' => $request->site_google,
                'site_youtube' => $request->site_youtube,
            ]);
            if ($isUpateSuccess) {
                return back()->with(['success'=> 'Social setting has been updated']);
            }
            else {
                return back()->with(['error' => 'Update failed']);
            }
        }
    }
}
