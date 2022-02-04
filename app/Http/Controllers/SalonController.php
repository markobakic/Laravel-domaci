<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
  

    public function add(Request $req)
    {
        $salon= new Salon;
        $salon->naziv=$req->naziv;
        $salon->adresa=$req->adresa;
        $result=$salon->save();
        
        if($result){
           //return ["Result"=>"Podaci su sacuvani"];
           return response()->json([

            'salon'=>$salon,

           ]);
          
        }

            else{
                return ["Result"=>"Podaci nisu sacuvani"];
            }
       
    }

        
}
