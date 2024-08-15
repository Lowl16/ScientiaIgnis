<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sensorData = [];
        $currentTime = Carbon::now();

        for ($i = 0; $i < 200; $i++) {
            $sensorData[] = [
                'temperature' => rand(15, 35),  // Random temperature between 15 and 35
                'humidity' => rand(30, 80),     // Random humidity between 30 and 80
                'eco2' => rand(400, 2000),      // Random eCO2 between 400 and 2000
                'created_at' => $currentTime->copy()->addMinutes(5),
                'updated_at' => $currentTime->copy()->addMinutes(5),
            ];

            // Increment the time by 5 minutes for each subsequent record
            $currentTime->addMinutes(5);
        }

        DB::table('sensor_data')->insert($sensorData);
    }
}
