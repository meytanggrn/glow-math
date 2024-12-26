<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'day', 'time'];

    // Relasi dengan Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
