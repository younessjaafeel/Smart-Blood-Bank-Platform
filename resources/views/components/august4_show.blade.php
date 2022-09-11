@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">August 4 Case</h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                      @foreach ($Aug as $Aug4)
                           @if ($Aug4->Number_units > 0)
                                <tr>
                                    <td> Case ID</td>

                                    <td> {{ $Aug4->id }}</td>
                                </tr>
                                <tr>
                                    <td> Donation Center</td>
                                    <td> {{ $Aug4->Donation_center }}</td>
                                </tr>

                                <tr>
                                    <td> Blood Groups</td>
                                    <td> {{ $Aug4->Blood_groups }}</td>
                                </tr>
                                <tr>
                                    <td> Nubmer of Units</td>
                                    <td> {{ $Aug4->Number_units }}</td>
                                </tr>
                                <tr>
                                    <td>

                                        <button value="" type="submit" class="btn btn-primary btn-lg">Units Left
                                            {{ $Aug4->Number_units }}</button>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-lg"
                                            href="http://127.0.0.1:8000/august4_show/donate/{{ $Aug4->id }}">Donate
                                        </a>
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
