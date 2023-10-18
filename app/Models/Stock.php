<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable=[
        'gate_pass_no',
        'date',
        'no',
        'quantity',
        'unit',
        'description',
        'classification',
        'allocation',
        'balance',
        'lot_number',
        'requesting_officer',
        'authorized_by',
        'recieved_by',

    ];
}