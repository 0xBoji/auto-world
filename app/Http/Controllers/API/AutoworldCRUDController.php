<?php


namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AutoworldCRUDs;

class AutoworldCRUDController extends Controller
{
    public function store(Request $request)
    {
        $car = AutoworldCRUDs::create($request->all());
        return response()->json($car, 201);
    }

    public function index()
    {
        $cars = AutoworldCRUDs::all();
        return response()->json($cars);
    }

    public function show($id)
    {
        $car = AutoworldCRUDs::find($id);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }
        return response()->json($car);
    }

    public function update(Request $request, $id)
    {
        $car = AutoworldCRUDs::find($id);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }
        $car->update($request->all());
        return response()->json($car);
    }

    public function destroy($id)
    {
        $car = AutoworldCRUDs::find($id);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }
        $car->delete();
        return response()->json(['message' => 'Car deleted']);
    }
}
