<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function getappointment()
	{
		return view('patient.appointment');
	}
	public function storeappointment(request $request)
	{
		$user = User::where(['area' => Auth::User()->area, 'usertype' => 'doctor'])->first();
		$appointment = new Appointments;
    	$appointment->date = $request->input('date');
    	$appointment->time = $request->input('time');
    	$appointment->patient_id = Auth::User()->id;
    	$appointment->doctor_id = $user->id;
    	$appointment->save();
    	return redirect('/get-appointment')->with('status','Your appointment is submitted');
	}
	public function showappointment()
	{
		$appointments = Appointments::all()->where('patient_id',Auth::User()->id);
		return view('patient.myappointment')->with('appointments',$appointments);
	}
}
