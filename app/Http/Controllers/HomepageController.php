<?php

namespace App\Http\Controllers;
use App\Models\UploadLogo; 
use Illuminate\Http\Request;
use App\Models\AutoworldCRUDs; 
use App\Models\compareCar; 


class HomepageController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu từ bảng "uploadLogos"
        $uploadLogos = UploadLogo::all();

        // Trả về view "homepage" và truyền dữ liệu $uploadLogos vào view
        return view('homepage.index', compact('uploadLogos'));
    }
    public function car()
    {
        // Lấy dữ liệu từ bảng "uploadLogos"
        $carlist = AutoworldCRUDs::all();

        // Trả về view "homepage" và truyền dữ liệu $uploadLogos vào view
        return view('homepage.car', compact('carlist'));
    }
    public function compare()
    {
        // Lấy dữ liệu từ bảng "uploadLogos"
        $comparelist = compareCar::all();

        // Trả về view "homepage" và truyền dữ liệu $uploadLogos vào view
        return view('homepage.compare', compact('comparelist'));
    }
}
