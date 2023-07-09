<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompareCar;

class CompareCarController extends Controller
{
    public function index()
    {
        $compareCars = CompareCar::all();
        return view('compare_cars.index', compact('compareCars'));
    }
    public function create()
    {
        return view('compare_cars.create');
    }
    public function store(Request $request)
        {   if ($request->hasFile('imageUPLOAD')) {
            $file = $request->file('imageUPLOAD');
            $filename = $file->getClientOriginalName();
            $file->move('uploadCompare', $filename);
            } else {
                return "image null";
        }
        CompareCar::create($request->all());
        return redirect()->route('compare_cars.index')->with('success', 'Compare car created successfully.');
    }
    public function edit($id)
    {
        $compareCar = CompareCar::find($id);
        if (!$compareCar) {
            return redirect()->route('compare_cars.index')->with('error', 'Compare car not found.');
        }
        return view('compare_cars.edit', compact('compareCar'));
    }
    public function update(Request $request, $id)
    {
        $compareCar = CompareCar::find($id);
        if (!$compareCar) {
            return redirect()->route('compare_cars.index')->with('error', 'Compare car not found.');
        }
        $compareCar->update($request->all());
        return redirect()->route('compare_cars.index')->with('success', 'Compare car updated successfully.');
    }

    public function destroy($id)
    {
        $compareCar = CompareCar::find($id);
        if (!$compareCar) {
            return redirect()->route('compare_cars.index')->with('error', 'Compare car not found.');
        }
        $compareCar->delete();
        return redirect()->route('compare_cars.index')->with('success', 'Compare car deleted successfully.');
    }
}
