<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketEgreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_ticketsIngreso', 'fecha_engreso', 'id_tarifa' 
    ];

    protected $casts = [
        'fecha_egreso' => 'date',
    ];
}
