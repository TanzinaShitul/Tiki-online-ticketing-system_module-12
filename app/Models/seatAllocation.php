<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class seatAllocation extends Model
{
    use HasFactory;

    protected $fillable=[
       'user_id','trip_id', 'seat_number'
    ];

    protected $casts = [

        'seat_number' => 'array'
    ];

    function user():BelongsTo
    {
     return $this->belongsTo(User::class);
    }

    function trip():BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }

}
