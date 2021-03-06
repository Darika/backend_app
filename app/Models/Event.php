<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'description'
    ];

    protected $dates = [
      'created_at', 'updated_at', 'date_start', 'date_end'
    ];
}
