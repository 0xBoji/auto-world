<?php

namespace App\Http\Controllers;
use App\Models\AutoworldCRUDs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;


class AutoworldCRUD extends Controller
{
    public function store(Request $request)
    {
        
        $car = AutoworldCRUDs::create($request->all());
        return redirect('/admin/car-list');
    }

    public function create()
    {
        // Hiển thị form tạo mới
        return view('create');
    }


    public function edit($id)
    {
        $car = AutoworldCRUDs::find($id);

        if (!$car) {
            return redirect('/admin/car-list')->with('error', 'Car not found');
        }

        return view('car-edit', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
        $car = AutoworldCRUDs::find($id);

        if (!$car) {
            return redirect('/admin/car-list')->with('error', 'Car not found');
        }

        $car->carName = $request->input('carName');
        $car->carID = $request->input('carID');
        $car->carBrand = $request->input('carBrand');
        $car->carPrice = $request->input('carPrice');
        $car->carYear = $request->input('carYear');
        $car->carModel = $request->input('carModel');
        $car->carImage = $request->input('carImage');
        $car->save();

        return redirect('/admin/car-list')->with('success', 'Car updated successfully');
    }

    public function destroy($id)
    {
        // Xóa xe có ID tương ứng
        $car = AutoworldCRUDs::find($id);
        $car->delete();

        return redirect('/admin/car-list')->with('success', 'Xóa thành công!');
    }
    public function upload(Request $request)
{
    $data = DB::table('autoworld_CRUDs')->get();
    return view('app')->with('data', $data);
}
    
    public function doupload(Request $request)
    {
        $file= $request->file('avatar');
        $filename= $file->getClientOriginalName();
        $file->storeAs('upload', $filename); 
        $file->move(public_path('upload'),$filename); 
        return redirect('/admin/upload');
    }
   
}
