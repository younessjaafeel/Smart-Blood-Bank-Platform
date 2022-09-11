@extends('layouts.admin')
@yield('content')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="text-align:center">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">Welcome to Donor Registration Page</h4>
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

                    <form action="store" method="POST">
                        @csrf
                        <div class="form-group" style="text-align:center">
                            <input type="Tel" style="text-align:center" name="phone" class="form-control"
                                placeholder="Enter Your Phone Number" value="{{ old('phone') }}">
                            <span style="color:red">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group" style="text-align:center">
                            <input type="number" style="text-align:center" name="Weight" class="form-control"
                                placeholder="Weight">
                            <span style="color:red">
                                @error('Weight')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="address">Choose you Address</label>
                            <select id="address" name="address">
                                <option value=""></option>
                                <option value="Saida">Saida</option>
                                <option value="Beirut">Beirut</option>
                                <option value="Tripoli">Tripoli</option>
                                <option value="Tyre">Tyre</option>
                                <option value="Jounieh">Jounieh</option>
                                <option value="Byblos">Byblos</option>
                                <option value="Aley">Aley</option>
                                <option value="Nabatieh">Nabatieh</option>
                                <option value="Baalbek">Baalbek</option>
                                <option value="Batroun">Batroun</option>
                                <option value="Zgharta-Ehden">Zgharta-Ehden</option>

                            </select>
                            <span style="color:red">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="Blood Type">Choose a Blood Type:</label>
                            <select id="Blood Type" name="blood_group">
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
                                @error('blood_group')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="gender">Your Gender:</label>
                            <select id="gender" name="gender">
                                <option value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <span style="color:red">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label name="date_of_birth">Date of Birth:</label>
                            <input placeholder="Date of Birth" name="date_of_birth" type="date">
                            <span style="color:red">
                                @error('date_of_birth')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="">Last Donated was:</label>
                            <input placeholder="last_donated" name="last_donated" type="date" id="start">
                        </div>

                        <div class="form-group">
                            <label for="">Can You Donate</label>
                            <input placeholder="Can You Donate" name="is_donor" type="checkbox">
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
