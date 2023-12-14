<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable =[
        'id_course',
        'id_bracket',
        'date'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'id_course');
    }
    public function bracket()
    {
        return $this->belongsTo(Bracket::class, 'id_bracket');
    }
}
