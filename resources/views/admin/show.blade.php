@extends('layouts.admin')

@yield('content')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">BloodBank Records</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>Name</th>
                                <th>BloodGroup</th>
                                <th>Weight</th>
                                <th>Gender</th>
                                <th>phone</th>
                                <th>Address</th>
                                <th>Date of Birth</th>
                                <th>Can Donate</th>
                                <th>Last Donated</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->blood_group }}</td>
                                        <td>{{ $user->weight }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->date_of_birth }}</td>
                                        <td>{{ $user->is_donor }}</td>
                                        <td>{{ $user->last_donated }}</td>
                                        <td>
                                            <a href="#" class="btn btn-success">EDIT</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger">DELTETE</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
