<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    //
    public function index()
    {
//        $animal = Zoo::getAllAnimal();
        return view('Zoo.CustomerView.singleProduct');
//            [
//                'animal' => $animal,
//            ]);
    }
}
