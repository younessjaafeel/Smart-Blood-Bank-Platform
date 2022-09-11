@extends('layouts.admin')



@section('content')
    <h1 class="text-center">Welcome To BloodBank App</h1>
    <p class="text-center"><strong>Choose your Status Please</strong> </p>

    <a class="btn btn-primary btn-lg" href="{{ asset('donor-register') }}" role="button">Register as Donor </a>
    <div class="text-right">
        <a class="btn btn-warning btn-lg " href="{{ asset('august4_register') }}" role="button">Lunch Augest 4 Case</a>
        <p ><strong>Only Admins Can Lunch it </strong></br>

    </div>
    <div class="text-center">
        <a class="btn btn-danger btn-lg " href="{{ asset('patient-register') }}" role="button">Register as Recipient </a></br>
    </div>
   <br>
    <h4 class="text-center"><strong>Sometimes a Drop of Blood Equals a Human Soul</strong></h4>
@endsection
