<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactCRUD extends Model
{
    use HasFactory;

    protected $table = 'contactCRUD';

    protected $fillable = ['name', 'email', 'subject', 'message'];
}
