<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index(){

        $cars = Car::all();
        return view('aaa.index',compact('cars'));
    }

    public function show($id){

        $car = Car::find($id);
        return view('aaa.show',compact('car'));
    }
}
