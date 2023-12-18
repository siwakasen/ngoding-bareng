<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable =[
        'username_admin',
        'password_admin',
        'email'
    ];

    protected $guard = 'admin'; 
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
