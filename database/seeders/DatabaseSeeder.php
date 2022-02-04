<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Salon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Salon::truncate();
        Car::truncate();
        Driver::truncate();


       $this->call(SalonSeeder::class);
       $this->call(CarSeeder::class);
       $this->call(DriverSeeder::class);

      
    }
}
