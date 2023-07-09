<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutoworldCRUDs extends Model
{
    protected $table = 'autoworld_CRUDs';

    protected $fillable = [
        'carImage',
        'carImage2',
        'carImage3',
        'carImage4',
        'carName',
        'carBrand',
        'carID',
        'carModel',
        'carPrice',
        'carYear',
        'carDescription'
    ];
}

