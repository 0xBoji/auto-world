<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompareCar extends Model
{
    use HasFactory;

    protected $table = 'compare_cars';

    protected $fillable = [
        'brands',
        'carName',
        'image',
        'body_style',
        'engine_type',
        'fuel',
        'color',
        'year_of_manufacture',
        'transmission',
        'seating_capacity',
        'number_of_doors',
        'price',
        'origin',
        'description',
    ];
}
