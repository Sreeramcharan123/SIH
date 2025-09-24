<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Food;
use App\Models\Dietplan;
use App\Models\DietPlanItem;

class DietController extends Controller
{
    // Store food item
    public function addFood(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'calories' => 'nullable|numeric',
            'protein'  => 'nullable|numeric',
            'fat'      => 'nullable|numeric',
            'carbs'    => 'nullable|numeric',
            'fiber'    => 'nullable|numeric',
            'dosha'    => 'nullable|string',
            'rasa'     => 'nullable|string',
            'virya'    => 'nullable|string',
            'vipaka'   => 'nullable|string',
        ]);

        Food::create($request->all());

        return redirect()->back()->with('success', 'Food added successfully!');
    }

    // Show form to create diet plan
    public function showCreatePlan()
    {
        $patients = Patient::all();
        $foods    = Food::all();

        return view('diet.create_plan', compact('patients', 'foods'));
    }

    // Store new diet plan
    public function storeDietPlan(Request $request)
    {
        // Validate input
        $request->validate([
            'patient_id'  => 'required|exists:patients,id',
            'plan_name'   => 'required|string|max:255',
            'description' => 'nullable|string',
            'foods'       => 'required|array',
        ]);

        // Create the diet plan first
        $plan = Dietplan::create([
            'patient_id'   => $request->patient_id,
            'dietitian_id' => 1, // Replace with Auth::id() if using login
            'plan_name'    => $request->plan_name,
            'description'  => $request->description,
        ]);

        // Attach selected foods with quantity and meal_time
        foreach ($request->foods as $foodData) {
            if (isset($foodData['id'])) {
                DietPlanItem::create([
                    'diet_plan_id' => $plan->id,
                    'food_id'      => $foodData['id'],
                    'quantity'     => $foodData['quantity'] ?? 1,        // default 1
                    'meal_time'    => $foodData['meal_time'] ?? 'Lunch', // default Lunch
                ]);
            }
        }

        return redirect()->route('diet.view', ['patient_id' => $plan->patient_id])
            ->with('success', 'Diet plan created successfully!');
    }

    // View diet plans of a patient
    public function viewDietPlan($patient_id)
    {
        $plans = Dietplan::with(['items.food', 'patient'])
            ->where('patient_id', $patient_id)
            ->get();

        return view('diet.view_plan', compact('plans'));
    }
}
