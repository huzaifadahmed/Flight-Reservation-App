<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Passenger;

class Flight extends Model
{
    use HasFactory;

    // public function departure()
    // {
    //     return $this->belongsTo(Departure::class);
    // }

    // public function arrival()
    // {
    //     return $this->belongsTo(Arrival::class);
    // }
    protected $guarded = [];

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }
}
