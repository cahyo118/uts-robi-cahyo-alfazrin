<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        Vehicle::firstOrCreate([
            'name' => 'Honda Beat',
            'type' => 'Motor',
            'license_plate' => 'B 1234 CD',
            'year' => 2022,
            'price' => 17500000
        ]);
    }
}
