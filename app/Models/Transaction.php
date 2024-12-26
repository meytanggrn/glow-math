<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'payment_status',
        'schedule_day',
        'schedule_time',
        'midtrans_url',
        'midtrans_booking_code',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
