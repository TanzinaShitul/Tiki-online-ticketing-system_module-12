<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    use HasFactory;

protected $fillable=['date','from','to'];
    function seat_allocation():HasMany
    {
        return $this->hasMany(seatAllocation::class);
    }

    function user():BelongsToMany
    {
        return $this->belongsToMany(User::class,'seat_allocations');
    }


}
