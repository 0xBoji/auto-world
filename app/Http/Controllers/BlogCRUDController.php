<?php

namespace App\Http\Controllers;

use App\Models\BlogCRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class BlogCRUDController extends Controller
{   
    public function show($id)
    {
        $blog = BlogCRUD::findOrFail($id);

        return view('homepage.readmore', compact('blog'));
    }
}