<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietPlanItem extends Model
{
    use HasFactory;

    protected $fillable = ['diet_plan_id', 'food_id', 'quantity', 'meal_time'];

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }

    public function plan()
    {
        return $this->belongsTo(Dietplan::class, 'diet_plan_id');
    }
}
