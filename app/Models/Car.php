<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'cena',
        'proizvodjac',
        'model',
        'salon_id'
    ];

    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}
