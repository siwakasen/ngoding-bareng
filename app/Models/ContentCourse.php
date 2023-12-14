<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentCourse extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable =[
        'id_course',
        'list_number',
        'name',
        'link',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'id_course');
    }
}
