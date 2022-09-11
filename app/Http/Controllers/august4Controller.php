<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class august4Controller extends Controller
{
    public function index()
    {
        return view('components.august4_register');
    }

    public function storeA(Request $request)
    {
        $request->validate([
          'Donation_center'=>'required',
          'Blood_groups'=>'required',
          'Number_units'=>'required',

        ]);

        $query = DB::table('august4')->insert([
           'Donation_center'=>$request->get('Donation_center'),
           'Blood_groups'=>$request->get('Blood_groups'),
           'Number_units'=>$request->get('Number_units'),
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

    public function show(){

        $Aug = DB::table('august4')->get();

     return view('components/august4_show', compact('Aug'));
    }

}


