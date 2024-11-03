<?php

namespace App\Models;

use App\Models\Bookings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function bookings(): HasMany{
        return $this->hasMany(Bookings::class);
    }
}
