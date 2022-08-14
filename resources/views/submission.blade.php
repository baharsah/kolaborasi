@extends('layouts.app')

@section('content')
<div class="container">
  <!-- Akademisi -->
  <div>
    <div class="h2">Pengajuan Ide Solutif</div>
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
            <div class="h4">Dosen</div>
            <div class="h6">Perguruan Tinggi</div>
            <div class="h6 btn-link">Ubah Profil</div>
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
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="row mb-3">
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" autofocus required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="title">Judul Karya Usaha</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" autofocus required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="title">Bidang</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" autofocus required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="title">Latar Belakang Terwujudnya Usaha Ini</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" autofocus required>
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

  <!-- Industri -->
  <div>
    <div class="h2">Pengajuan Peluang Cipta</div>
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
            <div class="h4">Nama</div>
            <div class="h6">Perusahaan</div>
            <div class="h6 btn-link">Ubah Profil</div>
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
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="row mb-3">
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" autofocus required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="title">Judul Karya Usaha</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" autofocus required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="title">Bidang</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" autofocus required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="title">Latar Belakang Terwujudnya Usaha Ini</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" autofocus required>
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