<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'desc',
        'content',
        'image_url',
        'status',
        'student_id',
    ];

    // Function student the hien moi quan he 1 post se thuoc ve 1 sinh vien
    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
