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
    <div class="col">
      <div class="card">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <div class="h3 text-primary text-center mb-3">Webinar Pilihan</div>
          @for  ($i = 0; $i < 3; $i++)
            <div class="d-flex w-50 mb-3">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                </svg>
              </div>
              <div class="ms-3">
                <div>
                  Jangan lewatkan Webinar Sitem Akademik Perguruan Tinggi. Klik tombol dan
                  Dapatkan tautan Yotutube untuk menyaksikan semua Webinar
                </div>
                <div>
                  <button class="btn btn-primary btn-sm">Lihat Semua</button>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</div>
@endsection