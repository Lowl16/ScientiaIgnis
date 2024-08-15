<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PredictionDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $predictionData = [];
        $currentTime = Carbon::now();

        for ($i = 1; $i <= 200; $i++) {
            $predictionData[] = [
                'id_data' => $i,
                'prediction' => rand(0, 1),    // Random prediction (0 or 1)
                'created_at' => $currentTime->copy()->addMinutes(5),
                'updated_at' => $currentTime->copy()->addMinutes(5),
            ];

            // Increment the time by 5 minutes for each subsequent record
            $currentTime->addMinutes(5);
        }

        DB::table('prediction_data')->insert($predictionData);
    }
}
