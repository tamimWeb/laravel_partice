<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
    public function create(){
        $brand = new Brand();
        return view('admin.brand.create',compact('brand'));
    }
}
