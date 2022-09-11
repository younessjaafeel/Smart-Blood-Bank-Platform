@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">Patients Cases</h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                        @foreach ($Patients_Cases as $Patients_Case)
                        @if ($Patients_Case->number_units > 0)
                            <tr>
                                <td> Case ID</td>

                                <td> {{ $Patients_Case->Patient_id }}</td>
                            </tr>
                            <tr>
                                <td> Name</td>
                                <td> {{ $Patients_Case->Patient_name }}</td>
                            </tr>
                            <tr>
                                <td> Phone Number</td>
                                <td><a href="https://api.whatsapp.com/send/?phone={{ $Patients_Case->phone }}">{{ $Patients_Case->phone }}
                                </td>
                            </tr>
                            <tr>
                                <td> Donation Center</td>
                                <td> {{ $Patients_Case->Address }}</td>
                            </tr>
                            <tr>
                                <td> Blood Group</td>
                                <td> {{ $Patients_Case->Blood_group }}</td>
                            </tr>
                            <tr>
                                <td> Nubmer of Units</td>
                                <td> {{ $Patients_Case->number_units }}</td>
                            </tr>
                            <tr>
                                <td> Disease</td>
                                <td>{{ $Patients_Case->Disease }}</td>
                            </tr>
                            <tr>
                                <td>

                                    <button value="" type="submit" class="btn btn-primary btn-lg">Units Left
                                        {{ $Patients_Case->number_units }}</button>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-lg"
                                    href="http://127.0.0.1:8000/patients_cases/donate/{{ $Patients_Case->Patient_id }}">Donate </a>
                                </td>
                            </tr>



                            @endif
                            </tbody>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@section('scripts')
@endsection
