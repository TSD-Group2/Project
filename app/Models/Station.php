<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'city'];

    public function departures()
    {
        return $this->hasMany(TrainSchedule::class, 'start_station_id');
    }

    public function arrivals()
    {
        return $this->hasMany(TrainSchedule::class, 'end_station_id');
    }
}
