<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abouts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = Abouts::all();
    	return view('admin.aboutus')->with('aboutus',$aboutus);
    }
    public function store(Request $request)
    {
    	$aboutus = new Abouts;
    	$aboutus->title = $request->input('title');
    	$aboutus->subtitle = $request->input('subtitle');
    	$aboutus->description = $request->input('description');
    	$aboutus->save();
    	return redirect('/abouts')->with('status','Data Added for About Us.');
    }
}
