<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1= Car::create(['cena'=>50,'proizvodjac'=>'Audi','model'=>'A6','salon_id'=>1]);
        $s2= Car::create(['cena'=>60,'proizvodjac'=>'BMW','model'=>'X5','salon_id'=>2]);
        $s3= Car::create(['cena'=>20,'proizvodjac'=>'Fiat','model'=>'Punto','salon_id'=>3]);
        $s4= Car::create(['cena'=>60,'proizvodjac'=>'Ford','model'=>'Focus','salon_id'=>1]);
        $s5= Car::create(['cena'=>60,'proizvodjac'=>'Renault','model'=>'Megane','salon_id'=>2]);
        
    }
}
