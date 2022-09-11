<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Patients_Cases extends Controller
{
    public function show()
    {
        $user_blood = auth()->user()->blood_group;
        $Patients_Cases = DB::table('patient_details')->get()->where('Blood_group', $user_blood);

     return view('components/patients_cases', compact('Patients_Cases'));
   }

}
