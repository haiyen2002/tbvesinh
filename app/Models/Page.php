<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Page extends Model
{
    protected $table='page';
    protected $primaryKey='page_id';
    public static function getAllPages()
    {
        return self::select('page_id','page_name','nav.nav_path as page_path')
        ->join('nav', 'page.nav_id','=','nav.nav_id')->get();
    }
    public static function getPageByNavPath($path){
        return self::select('page_name','nav.nav_path','page_detail.*')
        ->join('nav', 'page.nav_id','=','nav.nav_id')
        ->join('page_detail','page.page_id','=','page_detail.page_id')->where('nav.nav_path','=',$path)->first();
    }
    public function detail()
    {
        return $this->hasOne(PageDetail::class);
    }
    public function nav(){
        return $this->hasOne(Nav::class);
    }
}