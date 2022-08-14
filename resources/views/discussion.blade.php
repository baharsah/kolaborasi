@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between my-3">
    <div>
      <button type="button" class="btn btn-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        </svg>
        Kembali
      </button>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-header">Perguruan Tinggi</div>
        <div class="card-body">
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <div class="ps-3 pt-2">
              <div class="fw-bolder">Nama Dosen</div>
              <div>Perguruan Tinggi | Program Studi</div>
            </div>
          </div>
          <div>
            @for ($i = 0; $i < 5; $i++)
            <div class="card my-3">
              <div class="card-body">
                Ini komentar
              </div>
            </div>
            @endfor
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-primary block">Komentar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-header">Industri</div>
        <div class="card-body">
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <div class="ps-3 pt-2">
              <div class="fw-bolder">Nama</div>
              <div>Status | Nama Perusahaan</div>
            </div>
          </div>
          <div>
            @for ($i = 0; $i < 5; $i++)
            <div class="card my-3">
              <div class="card-body">
                Ini komentar
              </div>
            </div>
            @endfor
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-primary block">Komentar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection