<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = [
        'year',
    ];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
    public function plan(){
        return $this->hasMany(Plan::class);
    }
}
