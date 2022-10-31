<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    public static function getProducForMainSlide()
    {
        return self::where(['product_status' => 1, 'on_slide' => 1])->get();
    }

    public static function getProductsByCategoryPath($request)
    {
        $path = $request->category;
        $orderBy = $request->order ?? 'desc';
        $orderTarget = $request->sort ?? 'updated_at';
        $limit = $request->limit ?? 50;
        return self::with([
            'category' => function ($query) use($path) {
                $query->where(['category_path' => $path]);
            },
        ])
            ->where(['product_status' => 1])
            ->orderBy($orderTarget, $orderBy)
            ->cursorPaginate($limit);
    }
    public static function getProductsByBrandPath($request)
    {
        $path = $request->slug;
        $orderBy = $request->order ?? 'desc';
        $orderTarget = $request->sort ?? 'updated_at';
        $limit = $request->limit ?? 50;
        return self::with([
            'brand' => function ($query) use($path) {
                $query->where(['path' => $path]);
            },
        ])
            ->where(['product_status' => 1])
            ->orderBy($orderTarget, $orderBy)
            ->cursorPaginate($limit);
    }
    public static function getAllProductWithPagination($request)
    {
        $limit = $request->limit ?? 15;
        $orderBy = $request->orderBy ?? 'desc';
        $orderTarget = $request->orderTarget ?? 'product_id';
        return self::where('product_status', 1)
            ->orderBy($orderTarget, $orderBy)
            ->cursorPaginate($limit);
    }
    public static function getProductByPath($path)
    {
        return self::select('*')
            ->where(['product_path' => $path, 'product_status' => 1])
            ->first();
    }
    public static function getProductsByKeyword($keyword)
    {
        return self::select('*')
            ->where([['product_name', 'like', "%{$keyword}%"], ['product_status', '=', 1]])
            ->get();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
