<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['train_id', 'schedule_date'];

    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    public function stops()
    {
        return $this->hasMany(TrainStop::class)->orderBy('stop_order');
    }
}
