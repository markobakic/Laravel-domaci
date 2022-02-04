<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function destroy($driver_id)
    {
        $driver=Driver::find($driver_id);
        $driver->delete();
        return response()->json("Uspesno obrisan driver");
    }


   
    public function add(Request $req)
    {
        $driver= new Driver;
        $driver->ime=$req->ime;
        $driver->prezime=$req->prezime;
        $driver->car_id=$req->car_id;
        $driver->god_iskustva=$req->god_iskustva;
        $result=$driver->save();
        
        if($result){
            return response()->json([

                'driver'=>$driver,
    
               ]);
        }

            else{
                return ["Result"=>"Podaci nisu sacuvani"];
            }
       
    }
}
