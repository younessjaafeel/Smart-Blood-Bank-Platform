@extends('layouts.admin')

@yield('content')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">donor Records</h4>
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
                             @foreach ($$donor_records as $$donor_record)
                             <tr>
                                 <td>{{ $$donor_records->phone }}</td>
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
