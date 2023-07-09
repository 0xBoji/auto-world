<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
class BlogAdminController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blog_admins')->get();
        return view('blogs.index', compact('blogs'));
    }
    

    public function create()
    {
        return view('blogs.create');
    }
    public function show($id)   
    {
        $blog = DB::table('blog_admins')->where('id', $id)->first();    
    return view('homepage.readmore', compact('blog')); // Trả về view detail.blade.php và truyền dữ liệu bài blog
    }


    public function store(Request $request)
    {   
        if ($request->hasFile('imageUP')) {
            $file = $request->file('imageUP');
            $filename = $file->getClientOriginalName();
            $file->move('uploadBlog', $filename);
            } else {
                return "image null";
        }
        $validatedData = $request->validate([
            'title' => 'required',
            'imageBlog' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

        DB::table('blog_admins')->insert($validatedData);

        return redirect('/admin/blog')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = DB::table('blog_admins')->where('id', $id)->first();
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'imageBlog' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

        DB::table('blog_admins')->where('id', $id)->update($validatedData);

        return redirect('/admin/blog')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('blog_admins')->where('id', $id)->delete();

        return redirect('/admin/blog')->with('success', 'Blog deleted successfully.');
    }}
