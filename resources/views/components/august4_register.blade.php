@extends('layouts.admin')
@yield('content')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="text-align:center">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">Welcome to August4 Registration Page</h4>
                </div>
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">Please Fill the Following Form</h4>
                </div>
                <div class="card-body">
                    @if (Session::get('success'))
                        <div class="alret alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::get('fail'))
                        <div class="alret alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    <form action="storeA" method="POST">
                        @csrf


                        <div class="form-group">
                            <label for="Donation_center">Choose a Donation Center</label>
                            <select id="Donation_center" name="Donation_center">
                                <option value=""></option>
                                <option value="Hamoud Hospital">Hamoud Hospital</option>
                                <option value="Labib Hospital">Labib Hospital</option>
                                <option value="Red Cross">Red Cross</option>
                                <option value="Al Janoub Hospital">Al Janoub Hospital</option>
                                <option value="Al Raaie Hospital">Al Raaie Hospital</option>
                                <option value="Dalla'a General Hospital">Dalla'a General Hospital</option>
                                <option value="Health Medical Center ">Health Medical Center </option>
                                <option value="Al Nakib Hospital">Al Nakib Hospital</option>
                                <option value="Kassab Medical Center">Kassab Medical Center</option>
                                <option value="Turkish Medical Center">Turkish Medical Center</option>
                            </select>
                            <span style="color:red">
                                @error('Donation_center')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="Blood_groups">Choose a Blood Types:</label>
                            <select id="Blood_groups" name="Blood_groups">
                                <option value=""></option>
                                <option value="A+,A-,B+,B-,AB+,AB-,O-,O+">A+,A-,B+,B-,AB+,AB-,O-,O+</option>

                            </select>
                            <span style="color:red">
                                @error('Blood_groups')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="Number_units">Choose a Number of Units:</label>
                            <select id="Number_units" name="Number_units">
                                <option value=""></option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                                <option value="250">250</option>
                                <option value="300">300</option>
                                <option value="350">350</option>
                                <option value="400">400</option>
                                <option value="450">450</option>
                                <option value="500">500</option>
                            </select>
                            <span style="color:red">
                                @error('Number_units')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>





                        <input type="hidden" name="receiver" value="">

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
@section('scripts')
@endsection
