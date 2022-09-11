<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    public function index()
    {
        return view('components.donor-register');
    }
    public function  store(Request $request)
    {

        $request->validate([
          'name'=>'required',
          'phone'=>'required',
          'address'=>'required',
          'gender'=>'required',
          'Weight'=>'required',
          'date_of_birth'=>'required',
          'blood_group'=>'required',
          /* 'last_donated'=>'required', */
          /* 'Can Donate'=>'required' */

        ]);

        $query = DB::table('/')->insert([
            'name'=>$request->input('name'),
           'phone'=>$request->input('phone'),
           'address'=>$request->get('address'),
           'Weight'=>$request->get('Weight'),
           'gender'=>$request->get('gender'),
           'date_of_birth'=>$request->get('date_of_birth'),
           'blood_group'=>$request->get('blood_group'),
           'last_donated'=>$request->get('last_donated'),
           'is_donor'=>$request->input('is_donor'),

        ]);

       if($query){
        return back()->with('success','Your Form is Submitted Successfully Thank You !');
       }else{
        return back()->with('fail','Check your input requirement');
       }
    }

}
