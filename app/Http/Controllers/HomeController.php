<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;
use App\Models\User;
use App\Notifications\EmailNotification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //to let login be the first thing to see 'home'
        //here is a bug should solved when finshed manpulate data
        return view('/home');
    }

    public function send()
    {
    	$user = User::first();

        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'Hope You doing Well',
            'thanks' => 'We need you to Donate ,Please Check Patients Cases',
            'actionText' => 'View Patients Cases',
            'actionURL' => url('/patients_cases'),
            'id' => 4
        ];

        Notification::send($user, new EmailNotification($project));

        dd('Notification sent!');
    }
}

