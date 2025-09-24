<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'gender',
    ];

    // Relationships
    public function dietPlans()
    {
        return $this->hasMany(DietPlan::class);
    }
}
