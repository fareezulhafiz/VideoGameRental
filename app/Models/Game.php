<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'price',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'rentals')->withTimestamps();
    }
}
