@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body py-5">
                        <div class="h4 text-center text-primary mb-4">
                            Daftar dan Jadi Bagian Solusi Kolaborasi
                        </div>
                        <ul class="nav nav-tabs justify-content-center mb-3 mb-md-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ request()->segment(2) == 'perguruan-tinggi' ? 'active' : null }}"
                                    href="{{ url('/register/perguruan-tinggi') }}"role="tab">
                                    Perguruan Tinggi
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ request()->segment(2) == 'industri' ? 'active' : null }}"
                                    href="{{ url('/register/industri') }}" role="tab">Industri</a>
                            </li>
                        </ul>
                        @if (\Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ \Session::get('error') }}
                            </div>
                        @endif

                        <div class="tab-content">
                            <div class="tab-pane fade {{ request()->segment(2) == 'perguruan-tinggi' ? 'show active' : null }}"
                                role="tabpanel">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">Kata Sandi</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Konfirmasi
                                            Kata Sandi</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <input id="type" name="type" type="hidden" value="{{ 0 }}">

                                    <div class="row mb-3 mt-4 justify-content-center">
                                        <div class="text-center w-75">
                                            <small>
                                                Dengan klik tombol <span class="fw-bold"> <em>Daftar</em> </span>, Anda
                                                setuju dengan <a href="#">syarat &
                                                    ketentuan</a> serta <a href="#">kebijakan privasi</a> kami
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">
                                                    Daftar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-3">
                                        <small>
                                            Sudah punya akun? <a href="{{ route('register.industri') }}">Login disini</a>.
                                        </small>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade {{ request()->segment(2) == 'industri' ? 'show active' : null }}"
                                role="tabpanel">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">Kata
                                            Sandi</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">Konfirmasi
                                            Kata Sandi</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <input id="type" name="type" type="hidden" value="{{ 1 }}">

                                    <div class="row mb-3 mt-4 justify-content-center">
                                        <div class="text-center w-75">
                                            <small>
                                                Dengan klik tombol <span class="fw-bold"> <em>Daftar</em> </span>, Anda
                                                setuju dengan <a href="#">syarat &
                                                    ketentuan</a> serta <a href="#">kebijakan privasi</a> kami
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">
                                                    Daftar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-3">
                                        <small>
                                            Sudah punya akun? <a href="{{ route('register.industri') }}">Login disini</a>.
                                        </small>
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
