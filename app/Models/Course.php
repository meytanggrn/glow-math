<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    // Relasi dengan Transaction
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    // Relasi dengan Material
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
    // Relasi dengan CourseSchedule
    public function schedules()
    {
        return $this->hasMany(CourseSchedule::class);
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}