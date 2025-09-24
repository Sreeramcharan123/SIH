<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dietplan extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'dietitian_id', 'plan_name', 'description'];

    // A diet plan has many items (foods)
    public function items()
    {
        return $this->hasMany(DietPlanItem::class, 'diet_plan_id');
    }

    // ✅ Only ONE patient() relation
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    // A diet plan belongs to one doctor/dietitian (User)
    public function dietitian()
    {
        return $this->belongsTo(User::class, 'dietitian_id');
    }
}
