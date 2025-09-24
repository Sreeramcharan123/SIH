<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    // Explicitly tell Laravel the table name
    protected $table = 'foods';

    protected $fillable = [
        'name',
        'calories',
        'protein',
        'fat',
        'carbs',
        'fiber',
        'dosha',
        'rasa',
        'virya',
        'vipaka',
    ];
}
