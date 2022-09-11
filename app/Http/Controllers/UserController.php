<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Carbon\Carbon;



class UserController extends Controller
{

     public function index()
    {
        return view('components.donor-register');
    }
    public function show(User $user)
    {

        return view('components.profile', ['user'=>$user]);

    }

    public function email()
    {
        $email = User::select('email')->get()->all();
        Mail::to($email)->send(new WelcomeMail());
        return new WelcomeMail();
    }


    public function patient(){
        return $this->belongsToMany('App\Models\patient');
    }

     public function update(Request $request , $id)
     {
    $user = User::find($id);
    if($request->hasfile('path'));
    {
        $destination = 'uploads/images/'.$user->path;
        if(File::exists($destination))
        {
            File::delete($destination);
         }
        $file = $request->file('path');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/images/',$filename);
        $user->path = $filename;
        }

    $user->update();
     return redirect()->back()->with('Status','Image Added Successfully');
    }


    public function  store(Request $request)
    {

        $request->validate([
         /*  'name'=>'required', */
          'phone'=>'required',
          'address'=>'required',
          'gender'=>'required',
          'Weight'=>'required',
          'date_of_birth'=>'required',
          'blood_group'=>'required',
          'last_donated'=>'required',
          /* 'Can Donate'=>'required' */

        ]);

        $query = DB::table('users')->update([
            /* 'name'=>$request->input('name'), */
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
