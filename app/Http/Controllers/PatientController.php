<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {
        return view('components.patient-register');
    }




    public function storeP(Request $request)
    {

        $request->validate([
          'Patient_name'=>'required',
          'phone'=>'required',
          'Address'=>'required',
          'Disease'=>'required',
          'Blood_group'=>'required',
          'number_units'=>'required',


        ]);

        $query = DB::table('patient_details')->insert([
           'Patient_name'=>$request->input('Patient_name'),
           'phone'=>$request->input('phone'),
           'Address'=>$request->get('Address'),
           'Blood_group'=>$request->get('Blood_group'),
           'Disease'=>$request->get('Disease'),
           'number_units'=>$request->get('number_units'),



        ]);

       /* if($query){
        return back()->with('success','Your Form is Submitted Successfully Thank You !');
       }else{
        return back()->with('fail','Check your input requirement');
       } */
       if($query){
        return redirect()->action(
            [UserController::class, 'email'],
        );
       }
    }

}
