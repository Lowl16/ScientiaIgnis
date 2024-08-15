<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PredictionData extends Model
{
    use HasFactory;

    protected $table = 'prediction_data';
    protected $fillable = ['id_data', 'prediction'];
}
