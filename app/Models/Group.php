<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function members()
    {
        return $this->belongsToMany(User::class, Member::class)
            ->withPivot('role')
            ->as('membership')
            ->withTimestamps();
    }
}
