<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Save appointment
    public function save(Request $request)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'age'   => 'required|integer|min:1',
        'email' => 'required|email',
        'time'  => 'required|string|max:50',
    ]);

    $appointment = new Appointment([
        'name'  => $request->name,
        'age'   => $request->age,
        'email' => $request->email,
        'time'  => $request->time,
    ]);
    $appointment->save();

    return redirect()->back()->with('success', '✅ Your appointment is booked successfully!');
}

   public function index()
{
    $appointments = Appointment::latest()->get(); 
    return view('Doctor.appointments.index', compact('appointments'));
}

}
