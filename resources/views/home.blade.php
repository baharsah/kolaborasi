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

                        {{ __('Anda telah login! Silahkan    ke ') }}

                        @if (auth()->user()->type == 'perguruan_tinggi')
                            <a href="{{ route('perguruan_tinggi.home') }}">Halaman Utama Pengguna Perguruan Tinggi</a>
                        @else
                            <a href="{{ route('industri.home') }}">Halaman Utama Pengguna Industri</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
