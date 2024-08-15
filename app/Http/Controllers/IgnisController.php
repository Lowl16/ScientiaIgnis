<?php

namespace App\Http\Controllers;

use App\Models\PredictionData;
use App\Models\SensorData;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class IgnisController extends Controller
{
    public function showLatest()
    {
        $chartData = SensorData::all();
        $sensorData = SensorData::with('predictionData')->orderBy('created_at', 'desc')->paginate(20);
        $graphData = SensorData::with('predictionData')->orderBy('created_at', 'desc')->get();
        $latestSensorData = SensorData::with('predictionData')->latest()->first();
        return view('ignis.dashboard', compact('latestSensorData', 'sensorData', 'chartData', 'graphData'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
            'eco2' => 'required|numeric',
        ]);

        $sensorData = SensorData::create($validatedData);

        $prediction = $this->getPrediction($sensorData);
        
        $this->savePrediction($sensorData->id, $prediction);

        return response()->json(['message' => 'Data received successfully', 'prediction' => $prediction], 200);
    }

    public function predict(Request $request)
    {
        $client = new Client();

        $url = env('IGNIS_API_URL');

        $response = $client->post($url, [
            'json' => [
                'Temperature_C' => $request->input('Temperature_C'),
                'Humidity' => $request->input('Humidity'),
                'eCO2_ppm' => $request->input('eCO2_ppm')
            ]
        ]);

        $prediction = json_decode($response->getBody()->getContents(), true);

        return response()->json($prediction);
    }

    protected function getPrediction($sensorData)
    {
        $client = new Client();

        $url = env('IGNIS_API_URL');

        try {
            $response = $client->post($url, [
                'json' => [
                    'Temperature_C' => $sensorData->temperature,
                    'Humidity' => $sensorData->humidity,
                    'eCO2_ppm' => $sensorData->eco2,
                ],
            ]);

            $prediction = json_decode($response->getBody(), true);

            return $prediction;
        } catch (\Exception $e) {
            return ['error' => 'Failed to get prediction'];
        }
    }

    protected function savePrediction($sensorDataId, $prediction)
    {
        PredictionData::create([
            'id_data' => $sensorDataId,
            'prediction' => $prediction['prediction'],
        ]);
    }
}
