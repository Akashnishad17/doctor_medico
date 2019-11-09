<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
	public function showappointment()
	{
		$appointments = Appointments::all()->where('doctor_id',Auth::User()->id);
		return view('doctor.showappointment')->with('appointments',$appointments);
	}
}
