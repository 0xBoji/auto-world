<?php

namespace App\Http\Controllers;

use App\Models\AutoworldCRUDs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;


class AutoworldCRUD extends Controller
{   
    public function show($id)
    {
        $car = DB::table('autoworld_CRUDs')->where('id', $id)->first();
    
        return view('homepage.view', compact('car'));
    }
        

    public function store(Request $request)
    {
        
            $file = $request->file('carImageup');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload'), $filename);
            $file2 = $request->file('carImageup2');
            $filename2 = $file2->getClientOriginalName();
            $file2->move(public_path('upload'), $filename2);
            $file3 = $request->file('carImageup3');
            $filename3 = $file3->getClientOriginalName();
            $file3->move(public_path('upload'), $filename3);
            $file4 = $request->file('carImageup4');
            $filename4 = $file4->getClientOriginalName();
            $file4->move(public_path('upload'), $filename4);
    

        $carID = $request->input('carID');

        if (AutoworldCRUDs::where('carID', $carID)->exists()) {
            return redirect('/admin/car-list')->with('error', 'Car ID already exists');
        }

        $car = new AutoworldCRUDs;
        $car->carImage = $filename;
        $car->carName = $request->input('carName');
        $car->carBrand = $request->input('carBrand');
        $car->carID = $carID;
        $car->carModel = $request->input('carModel');
        $car->carPrice = $request->input('carPrice');
        $car->carYear = $request->input('carYear');

        // ...

        $car->save();

        return redirect('/admin/car-list')->with('success', 'Car created successfully');
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
        $car->carDescription = $request->input('carDescription');

        
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
    public function checkDuplicateId(Request $request)
{
    $carID = $request->input('carID');

    // Kiểm tra xem ID đã tồn tại trong cơ sở dữ liệu hay chưa
    $car = AutoworldCRUDs::where('carID', $carID)->first();

    return response()->json([
        'duplicate' => !empty($car)
    ]);
}
}