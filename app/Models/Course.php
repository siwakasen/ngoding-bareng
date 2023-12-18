<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable =[
        'id_admin',
        'id_category',
        'title',
        'thumbnail',
        'description',
        'price',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'id_course');
    }
}
