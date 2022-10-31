<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Brand extends Model{
    protected $table = 'brand';
    protected $primaryKey = 'brand_id';
    public function getAll()
    {
       return $this->select('*')
            ->where(['status' => 1])
            ->get();
    }
    
    public static function getProductsByBrandID($request)
    {
        $brand_id = $request->id;
        return self::select('*')
            ->where(['brand_id' => $brand_id, 'product_status' => 1])
            ->orderBy('product_id', 'DESC')
            ->limit($limit)
            ->offset(($page - 1) * $limit)
            ->get();
    }
    public function products(){
        return $this->hasMany(Product::class,'brand_id','brand_id');
    }
}