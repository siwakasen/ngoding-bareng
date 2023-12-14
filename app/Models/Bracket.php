<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bracket extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable =[
        'id_user',
        'total_price',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
