<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class CkfinderController extends Controller
{
    public function index()
    {
        $images = glob('public/images/*.{jpg,png,gif,jpeg}', GLOB_BRACE);
        return view('admin/ckfinder/index', compact('images'));
    }
    public function pages()
    {
        $images = glob('public/images/pages/*.{jpg,png,gif,jpeg}', GLOB_BRACE);
        return view('admin/ckfinder/index', compact('images'));
    }
    public function products()
    {
        $images = glob('public/images/products/*.{jpg,png,gif,jpeg}', GLOB_BRACE);
        return view('admin/ckfinder/index', compact('images'));
    }
}