<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
    public function index()
    {
        $cars=Car::all();
        return response()->json($cars);
    }


    public function show($id){
        $car = Car::find($id);
        return response()->json($car);

    }

    public function destroy($car_id){
        $car=Car::find($car_id);
        $car->delete();
        return response()->json("Uspesno obrisan auto");
    }
}
