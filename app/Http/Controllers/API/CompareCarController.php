<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompareCar;

class CompareCarController extends Controller
{
    public function store(Request $request)
    {
        $compareCar = CompareCar::create($request->all());
        return response()->json($compareCar, 201);
    }

    public function index()
    {
        $compareCars = CompareCar::all();
        return response()->json($compareCars);
    }

    public function show($id)
    {
        $compareCar = CompareCar::find($id);
        if (!$compareCar) {
            return response()->json(['message' => 'Compare car not found'], 404);
        }
        return response()->json($compareCar);
    }

    public function update(Request $request, $id)
    {
        $compareCar = CompareCar::find($id);
        if (!$compareCar) {
            return response()->json(['message' => 'Compare car not found'], 404);
        }
        $compareCar->update($request->all());
        return response()->json($compareCar);
    }

    public function destroy($id)
    {
        $compareCar = CompareCar::find($id);
        if (!$compareCar) {
            return response()->json(['message' => 'Compare car not found'], 404);
        }
        $compareCar->delete();
        return response()->json(['message' => 'Compare car deleted']);
    }
}