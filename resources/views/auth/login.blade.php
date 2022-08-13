@extends('layouts.app')

@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="height: 85vh">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <div class="card pt-2 pb-4 px-2">
                    <div class="card-body">
                        <div class="h4 text-center text-primary mb-4">Masuk</div>
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ request()->segment(2) == 'perguruan-tinggi' ? 'active' : null }}"
                                    href="{{ url('/login/perguruan-tinggi') }}"role="tab">
                                    Perguruan Tinggi
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ request()->segment(2) == 'industri' ? 'active' : null }}"
                                    href="{{ url('/login/industri') }}" role="tab">Industri</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-3 pt-md-4">
                            <div class="tab-pane fade {{ request()->segment(2) == 'perguruan-tinggi' ? 'show active' : null }}"
                                role="tabpanel">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                        <div class="col-md-8">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">Kata Sandi</label>

                                        <div class="col-md-8">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 justify-content-center">
                                        <div class="text-center mt-2">
                                            <small class="fw-light">
                                                Dengan klik tombol <span class="fw-bold">Masuk</span>, Anda setuju dengan <a
                                                    href="#" class="text-decoration-none">syarat &
                                                    ketentuan</a> serta <a href="#"
                                                    class="text-decoration-none">kebijakan privasi</a> kami.
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row my-2">
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">
                                                    Masuk
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-1">
                                        <small>
                                            Belum punya akun? <a href="/register">Daftar disini</a>.
                                        </small>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade {{ request()->segment(2) == 'industri' ? 'show active' : null }}"
                                role="tabpanel">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                        <div class="col-md-8">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">Kata Sandi</label>

                                        <div class="col-md-8">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 justify-content-center">
                                        <div class="text-center mt-2">
                                            <small class="fw-light">
                                                Dengan klik tombol <span class="fw-bold">Masuk</span>, Anda setuju dengan <a
                                                    href="#" class="text-decoration-none">syarat &
                                                    ketentuan</a> serta <a href="#"
                                                    class="text-decoration-none">kebijakan privasi</a> kami.
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row my-2">
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">
                                                    Masuk
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-1">
                                        <small>
                                            Belum punya akun? <a href="/register">Daftar disini</a>.
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
