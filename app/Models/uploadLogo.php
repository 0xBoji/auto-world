<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadLogo extends Model
{
    use HasFactory;

    protected $table = 'uploadLogos';

    protected $fillable = ['brand', 'image'];
}
