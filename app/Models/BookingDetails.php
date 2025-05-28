<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookingId',
        'vehicle',
        'date',
        'time',
        'from',
        'to',
        'distance',
        'hours',
        'estimate',
        'is_booked',
        'name',
        'email',
        'subject',
        'phone_number',
        'flight_number',
        'pickup',
        'dropoff',
        'message',
        'is_return',
        'return_date',
        'return_time',
        'return_from',
        'return_to',
    ];
}
