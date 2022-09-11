@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        @if (Session::has('status'))
                            <div class="alert alert-success" role="alert">
                                <p>{{ Session::get('status') }}</p>
                            </div>
                        @endif


                        {{ __('You are logged in!') }}
                          <div>
                            <a class="btn btn-primary" href="{{ asset('admin') }}" role="button">Admin Panel</a>
                        </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
