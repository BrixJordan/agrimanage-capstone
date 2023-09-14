<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable=['title', 'body', 'event_date', 'event_hour', 'event_minute','duration_minutes', 'location', 'file_path'  ];
}
