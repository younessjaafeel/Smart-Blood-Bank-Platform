<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\DB;
use App\Models\DonorRecord;


class profileController extends Controller
{
    public function UserProfile(){

           $donor_records = DB::table('donor_records')->get();

        return view('components/profile', compact('donor_records'));
    }

    public function update(Request $request)

    {    $request->validate([
        'avatar'=>'required',
    ]);

        $query = DB::table('donor_records')->insert([
           'avatar'=>$request->input('avatar')

        ]);


        }

    }
