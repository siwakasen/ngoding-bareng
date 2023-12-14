<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable =[
        'id_user',
        'id_article',
        'detail_comment',
        'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function article()
    {
        return $this->belongsTo(Article::class, 'id_article');
    }
}
