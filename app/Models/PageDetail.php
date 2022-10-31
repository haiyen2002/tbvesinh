<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class PageDetail extends Model{
    protected $table = 'page_detail';
    public static function getPageDetailByPageId($page_id)
    {
        return self::where(['page_id' => $page_id])->first();
    }
}