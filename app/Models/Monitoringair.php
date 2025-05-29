<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoringair extends Model
{
    protected $table = 'monitoring_data'; // Add this line
    protected $fillable = ['debit', 'tegangan', 'kekeruhan', 'ph', 'recorded_at'];
}