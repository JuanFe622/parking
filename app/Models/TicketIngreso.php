<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketIngreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_vehiculo', 'id_plaza', 'fecha_ingreso' 
    ];

    protected $casts = [
        'fecha_ingreso' => 'date',
    ];
       
}
