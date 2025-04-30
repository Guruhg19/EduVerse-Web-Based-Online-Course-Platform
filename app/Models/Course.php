<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'slug',
        'path_trailer',
        'about',
        'thumbnail',
        'category_id',
        'teacher_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
    public function course_videos()
    {
        return $this->hasMany(CourseVideo::class);
    }
    public function course_keypoints()
    {
        return $this->hasMany(CourseKeypoint::class);
    }
    public function students(){
        return $this->belongsToMany(User::class, 'course_students', 'course_id', 'user_id');
    }
}
