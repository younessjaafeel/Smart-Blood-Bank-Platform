@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Donor Profile : {{ $user->name }}</div>



        <div class="row">
            <div class="col-sm-6">
                <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <?php
                    $image_name = basename($user->path);
                    ?>
                    <div class="form-group col-sm-6">

                        <img class="img-profile rounded-circle" width="250"
                            src="{{ asset('uploads/images/' . $image_name) }}">
                        <input type="file" name="path" class="form-group">
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Profile Image</button>
                        </div>
                    </div>
                </form>
                <div class="col-md-4">
                    <p class="text-center">Your Qr Code here </p>
                    {!! QrCode::size(250)->generate($user) !!}

                </div>
            </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td> Name</td>

                            <td> {{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td> Phone Number</td>
                            <td> {{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <td> Weight</td>
                            <td> {{ $user->weight }}</td>
                        </tr>
                        <tr>
                            <td> Address</td>
                            <td> {{ $user->address }}</td>
                        </tr>
                        <tr>
                            <td> Blood Type</td>
                            <td> {{ $user->blood_group }}</td>
                        </tr>
                        <tr>
                            <td> Gender</td>
                            <td>{{ $user->gender }} </td>
                        </tr>
                        <tr>
                            <td> Date of Birth</td>
                            <td> {{ $user->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <td> Last Donated</td>
                            <td> {{ $user->last_donated }}</td>
                        </tr>
                        <tr>
                            <td> Can Donate</td>
                            <td> {{ $user->is_donor }}</td>
                        </tr>

                </div>

            </table>



            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
