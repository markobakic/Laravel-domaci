<?php

namespace Database\Seeders;

use App\Models\Salon;
use Illuminate\Database\Seeder;

class SalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1= Salon::create(['naziv'=>'Salon 1','adresa'=>'Narodnih heroja']);
        $s1= Salon::insert(['naziv'=>'Salon 2','adresa'=>'Gandijeva 115']);
        $s1= Salon::insert(['naziv'=>'Salon 3','adresa'=>'Milutina Milankovica 12']);
        $s1= Salon::insert(['naziv'=>'Salon 4','adresa'=>'Jove Ilica 147']);
        $s1= Salon::insert(['naziv'=>'Salon 5','adresa'=>'Kneza Milosa 5']);
    }
}
