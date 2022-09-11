<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\donation_center;


class DashboardController extends Controller
{
    public function showUser(){


        $users = User::all();
        return view('admin.show')->with('users',$users);

    }
}
