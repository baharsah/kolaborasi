@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-body py-5">
                    <div class="d-flex justify-content-evenly mb-5">
                        <button type="button" class="btn btn-primary w-25">Perguruan Tinggi</button>
                        <button type="button" class="btn btn-primary w-25" disabled>Industri</button>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div>
                                    @if (Route::has('password.request'))
                                    Lupa kata sandi?
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Atur ulang
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="text-center w-75">
                                <div>
                                    Dengan klik tombol "Masuk", Anda setuju dengan <a href="#">syarat & ketentuan</a> serta <a href="#">kebijakan privasi</a> kami
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        Masuk
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection