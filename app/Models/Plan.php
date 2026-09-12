<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'duration_in_days',
        'year_id'
    ];

    public function year(){
        return $this->belongsTo(Year::class);
    }

     public function getDurationInMonthsAttribute()
    {
        return $this->duration_in_days / 30;
    }


}
