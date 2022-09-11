<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Patients_Cases;
use App\Http\Controllers\august4Controller;
use App\Models\Donor_record;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


Auth::routes();
//Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Admin Panel
Route::group(['middleware'=> ['auth','admin']],function(){
    Route::get('/admin', function () {
        return view('admin.index');
    });
    //All Users
    Route::get('/show-user',[DashboardController::class, 'showUser']);
    //Main-Map
    Route::get('google-map', [GoogleController::class, 'index'])->name('google-map.index');
    //Ajax
    Route::get('show-current-location', [GoogleController::class, 'CalculateNearestDonation'])->name('show-current-location');


    Route::get('donor-register',[UserController::class, 'index']);
    Route::post('store',[UserController::class, 'store']);

   /*  Route::get('profile',[profileController::class, 'UserProfile']); */
    Route::post('update',[profileController::class, 'update']);

    Route::get('/qrcode', [QrCodeController::class, 'index']);

   Route::get('profile/{user}', [UserController::class, 'show'])->name('profile.{user}');

   Route::put('update/{id}', [UserController::class, 'update'])->name('profile.update');

   Route::get('/patient-register',[PatientController::class, 'index']);

   Route::post('storeP',[PatientController::class, 'storeP']);

   Route::get('patients_cases',[Patients_Cases::class, 'show']);

   //Donate
    Route::get('patients_cases/donate/{id}', function($id){
    $user = DB::table('patient_details')->where('Patient_id', '=', $id)->decrement('number_units');
    return redirect('/patients_cases')->with('success', 'Rabit created');
});

Route::get('/email', [UserController::class, 'email']);

Route::get('/august4_register',[august4Controller::class, 'index']);

Route::post('storeA',[august4Controller::class, 'storeA']);

Route::get('august4-show',[august4Controller::class, 'show']);
});
Route::get('august4_show/donate/{id}', function($id){
    $Aug4 = DB::table('august4')->where('id', '=', $id)->decrement('Number_units');
    return redirect('/august4-show')->with('success', 'Rabit created');
});


