<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Site extends Model{
    protected $table = 'site';
    protected $primaryKey = 'site_id';

    public static function getSite(){
        return self::select('*')->first();
    }
}