@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between my-3">
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
            <div>Profil <span class="text-primary">Lengkapi Data Diri</span></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Lengkapi data diri</div>
                    <div class="card-body py-5">
                        <form method="POST" action="{{ route('perguruan_tinggi.update', ['id' => $account->id]) }}">
                            @method('put')
                            @csrf

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row justify-content-end mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">Nama
                                                Lengkap</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ $account->name }}" required autocomplete="name" autofocus>

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
                                                    autocomplete="jabatan" autofocus>

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
                      <input id="born" type="text" class="form-control @error('born') is-invalid @enderror" name="born" value="{{ old('born') }}" required autocomplete="born" autofocus>

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
                                                    autocomplete="nama_instansi" autofocus>

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
                      <input id="company-address" type="text" class="form-control @error('company-address') is-invalid @enderror" name="company-address" value="{{ old('company-address') }}" required autocomplete="company-address" autofocus>

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
                      <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

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
                                                    value="{{ $account->email }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Selanjutnya') }}
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
