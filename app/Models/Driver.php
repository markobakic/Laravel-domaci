<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'br_vozacke',
        'car_id'
        
    ];
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
