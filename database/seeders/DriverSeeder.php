<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d1= Driver::create(['ime'=>'Marko','prezime'=>'Bakic','car_id'=>1,'god_iskustva'=>3]);
        $d2= Driver::create(['ime'=>'Petar','prezime'=>'Petrovic','car_id'=>2,'god_iskustva'=>5]);
        $d3= Driver::create(['ime'=>'Zika','prezime'=>'Zikic','car_id'=>3,'god_iskustva'=>2]);
        $d4= Driver::create(['ime'=>'Ana','prezime'=>'Ivanovic','car_id'=>4,'god_iskustva'=>0]);
        $d5= Driver::create(['ime'=>'Sima','prezime'=>'Simic','car_id'=>1,'god_iskustva'=>13]); 
        $d6= Driver::create(['ime'=>'Aleksa','prezime'=>'Aleksic','car_id'=>5,'god_iskustva'=>20]);

    }
}
