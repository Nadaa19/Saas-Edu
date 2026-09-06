<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'year_id',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
