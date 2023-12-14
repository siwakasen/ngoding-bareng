<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable =[
        'id_admin',
        'title',
        'thumbnail',
        'main_sentence',
        'content',
        'date'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
    
}
