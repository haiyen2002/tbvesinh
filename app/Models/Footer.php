<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Footer extends Model{
    protected $table = 'footer';
    public function getAll()
    {
       return $this->select('*')
            ->where(['status' => 1])
            ->get();
    }
}