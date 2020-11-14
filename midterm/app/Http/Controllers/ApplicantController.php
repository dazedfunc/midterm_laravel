<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use Redirect;

class ApplicantController extends Controller
{
    public function list() {
    	$applicants = Applicant::all();
    	return view("applicant_list", compact("applicants"));
    }

    public function hireEmployee($employeeId) {
    	$applicant = Applicant::findOrFail($employeeId);
    	$applicant->is_hired = 1;
    	$applicant->save();
    	return Redirect::back();
    }


    public function editEmployee($id) {
    	$applicant = Applicant::findOrFail($id);
    	return view("edit", compact("applicant"));
    }


    public function edit($id, Request $request) {
    	$validatedData = $request->validate([
    		'name' => 'required',
    		'surname' => 'required',
    		'phone' => 'required'
    	]);


    	$applicant = Applicant::find($id);
		$applicant->name = $request->get("name");
		$applicant->surname = $request->get("surname");
		$applicant->phone = $request->get("phone");
		$applicant->save();
		return Redirect::back();


    }


}
