@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Akademisi -->
        <div>
            <div class="d-flex justify-content-between">
                <div>Pengajuan Ide Solutif</div>
                <div>
                    <a href="{{ route('perguruan_tinggi.home') }}" class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="h4">Dosen</div>
                            <div class="h6">Perguruan Tinggi</div>
                            <div>
                                <a class="text-decoration-none"
                                    href="{{ route('perguruan_tinggi.profile', ['id' => auth()->user()->id]) }}">
                                    Ubah Profil
                                </a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                    class="bi bi-pencil-square text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Profil bisa dilihat</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST"
                                action="{{ route('perguruan_tinggi.submission.send', ['id' => auth()->user()->id]) }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" value="{{ old('title') }}" autofocus required>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="title">Judul Karya Usaha</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" value="{{ old('title') }}" autofocus required>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="title">Bidang</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" value="{{ old('title') }}" autofocus required>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="title">Latar Belakang Terwujudnya Usaha Ini</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" value="{{ old('title') }}" autofocus required>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="title">Keunggulan Karya Ini</label>
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Tautan Video</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ajukan Sekarang') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
