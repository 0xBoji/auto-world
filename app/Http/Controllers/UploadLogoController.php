<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadLogo;

class UploadLogoController extends Controller
{
    public function index()
    {
        $uploadLogos = uploadLogo::all();
        return view('uploadLogos.index', compact('uploadLogos'));
    }

    public function create()
    {
        return view('uploadLogos.create');
    }

    public function store(Request $request)
    {   
        $uploadLogoCount = uploadLogo::count();

        if ($uploadLogoCount >= 10) {
            return redirect()->back()->withErrors('Only 10 logos are allowed.');
        }
        $file = $request->file('imageUP');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('uploadLogo'), $filename);
        $data = $request->validate([
            'brand' => 'nullable|string|unique:uploadLogos',
            'image' => 'nullable|string|unique:uploadLogos',
        ]);

        uploadLogo::create($data);

        return redirect()->route('uploadLogos.index')->with('success', 'Logo uploaded successfully.');
    }

    public function show(uploadLogo $uploadLogo)
    {
        return view('uploadLogos.show', compact('uploadLogo'));
    }

    public function edit(uploadLogo $uploadLogo)
    {
        return view('uploadLogos.edit', compact('uploadLogo'));
    }

    public function update(Request $request, uploadLogo $uploadLogo)
    {   
        $file = $request->file('imageUP');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('uploadLogo'), $filename);

        $data = $request->validate([
            'brand' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        $uploadLogo->update($data);

        return redirect()->route('uploadLogos.index')->with('success', 'Logo updated successfully.');
    }

    public function destroy(UploadLogo $uploadLogo)
    {
        $uploadLogo->delete();

        return redirect()->route('uploadLogos.index')->with('success', 'Logo deleted successfully.');
    }
}
