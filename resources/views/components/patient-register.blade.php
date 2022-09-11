@extends('layouts.admin')

@section('content')
    <div class="panel panel-default ">
        <div class="panel-heading "></div>
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="text-align:center">
                    <div class="card-header">
                        <h4 class="card-title" style="text-align:center">Welcome to Patient Register Page</h4>
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

                        <form action="storeP" method="POST">

                            @csrf
                            <div class="form-group" style="text-align:center">
                                <input type="string" style="text-align:center" name="Patient_name" class="form-control"
                                    placeholder="Enter Your Full Name">
                                <span style="color:red">
                                    @error('Patient_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group" style="text-align:center">
                                <input type="Tel" style="text-align:center" name="phone" class="form-control"
                                    placeholder="Enter Your Phone Number" value="{{ old('phone') }}">
                                <span style="color:red">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="Address">Donation Center</label>
                                <select id="Address" name="Address">
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
                                    @error('address')
                                        {{ $Address }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="Blood_group">Choose a Blood Type:</label>
                                <select id="Blood_group" name="Blood_group">
                                    <option value=""></option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
                                    <option value="O+">O+</option>
                                </select>
                                <span style="color:red">
                                    @error('Blood_group')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>


                            <div class="form-group">
                                <label for="number_units">Choose a Number of Units:</label>
                                <select id="number_units" name="number_units">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <span style="color:red">
                                    @error('number_units')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>



                            <div class="form-group">
                                <label for="Disease">Disease</label>
                                <select id="Disease" name="Disease">
                                    <option value=""></option>
                                    <option value="Surgery">Surgery</option>
                                    <option value="Accident">Accident</option>
                                    <option value="Pregnant">Pregnant</option>
                                </select>
                                <span style="color:red">
                                    @error('Disease')
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
