<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BlogCRUD extends Model
{
    use HasFactory;

    protected $table = 'blog_cruds';

    protected $fillable = ['title', 'imageBlog','content'];
}
