<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;   
class User extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable =[
        'user_name',
        'account',
        'password',
        'email'
    ];
    public function getUser($id)
    {
        return $this->find($id);
    }
    public function getUsers()
    {
        return $this->get();
    }
}