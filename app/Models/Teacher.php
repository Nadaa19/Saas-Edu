<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'img',
        'bio',
        'subject_id',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
