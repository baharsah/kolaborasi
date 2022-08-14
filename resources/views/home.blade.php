@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        @if (auth()->user()->type == 'perguruan_tinggi')
                            <a href="{{ url('admin/routes') }}">Perguruan Tinggi User</a>
                        @else
                            <div class=”panel-heading”>Industri User</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
