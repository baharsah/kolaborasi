@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <div class="ps-3 pt-2">
                    <div class="fw-bolder">{{ $account->name }}</div>
                    <div>
                        @if (empty($account->jabatan))
                            <a href="{{ route('perguruan_tinggi.profile', ['id' => $account->id]) }}">Lengkapi profil</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                class="bi bi-pencil-square text-primary" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        @else
                            {{ $account->jabatan }} | {{ $account->nama_instansi }}
                        @endif
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('perguruan_tinggi.profile', ['id' => $account->id]) }}" class="btn btn-outline-secondary">
                    Ubah Profil
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body py-5">
                        <nav>
                            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Profil</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Tawarkan Ide Solutif</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Informasi Event</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active py-5" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                @if (empty($account->jabatan))
                                    <div class="my-5 py-5 text-center">
                                        <div class="my-3">
                                            Mohon lengkapi profil anda terlebih dahulu di
                                            <a href="{{ route('perguruan_tinggi.profile', ['id' => $account->id]) }}">sini</a>.
                                        </div>
                                    </div>
                                @else
                                <div class="row mt-4 my-5 pt-2">
                                    <div class="col-md-6">
                                        <div class="row justify-content-end mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">Nama
                                                Lengkap</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ $account->name }}" required autocomplete="name" autofocus disabled>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row justify-content-end mb-3">
                                            <label for="jabatan"
                                                class="col-md-4 col-form-label text-md-end">Jabatan</label>

                                            <div class="col-md-6">
                                                <input id="jabatan" type="text"
                                                    class="form-control @error('jabatan') is-invalid @enderror"
                                                    name="jabatan" value="{{ $account->jabatan }}" required
                                                    autocomplete="jabatan" autofocus disabled>

                                                @error('jabatan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="row justify-content-end mb-3">
                                            <label for="born" class="col-md-4 col-form-label text-md-end">Tempat/Tanggal Lahir</label>

                                            <div class="col-md-6">
                                            <input id="born" type="text" class="form-control @error('born') is-invalid @enderror" name="born" value="{{ old('born') }}" required autocomplete="born" autofocus disabled>

                                            @error('born')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                        </div> --}}

                                        <div class="row justify-content-end mb-3">
                                            <label for="nama_instansi" class="col-md-4 col-form-label text-md-end">Nama
                                                Perguruan Tinggi</label>

                                            <div class="col-md-6">
                                                <input id="nama_instansi" type="text"
                                                    class="form-control @error('nama_instansi') is-invalid @enderror"
                                                    name="nama_instansi" value="{{ $account->nama_instansi }}" required
                                                    autocomplete="nama_instansi" autofocus disabled>

                                                @error('nama_instansi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="row justify-content-end mb-3">
                                            <label for="company-address" class="col-md-4 col-form-label text-md-end">Alamat Lengkap Pergutruan Tinggi</label>

                                            <div class="col-md-6">
                                            <input id="company-address" type="text" class="form-control @error('company-address') is-invalid @enderror" name="company-address" value="{{ old('company-address') }}" required autocomplete="company-address" autofocus disabled>

                                            @error('company-address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-6">
                                        {{-- <div class="row justify-content-start mb-3">
                                            <label for="phone" class="col-md-4 col-form-label text-md-end">No. Hp</label>

                                            <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus disabled>

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                        </div> --}}

                                        <div class="row justify-content-start mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ $account->email }}" required autocomplete="email" autofocus disabled>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="d-flex flex-column align-items-center text-center my-5 pt-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                            fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                            <path
                                                d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
                                        </svg>
                                    </div>
                                    <div class="w-25 my-3">
                                        Cari kesempatan kolaborasi ide peluang usaha
                                        yang dibuka oleh pihak industri dan
                                        ajukan ide solutif anda
                                    </div>
                                    <div>
                                        <a href="{{ route('perguruan_tinggi.submission', ['id' => $account->id]) }}" class="btn btn-primary">Kontribusikan Ide Solutif</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="d-flex flex-column align-items-center text-center my-5 pt-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                            fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                            <path
                                                d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
                                        </svg>
                                    </div>
                                    <div class="w-25 my-3">
                                        Cari kesempatan kolaborasi ide peluang usaha
                                        yang dibuka oleh pihak industri dan
                                        ajukan ide solutif anda
                                    </div>
                                    <div>
                                        <a href="{{ route('perguruan_tinggi.submission', ['id' => $account->id]) }}" class="btn btn-primary">Kontribusikan Ide Solutif</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
