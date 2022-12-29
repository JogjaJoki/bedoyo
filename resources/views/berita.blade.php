@extends('layouts.app')
@section('content')
<main style="margin-top : 8%" class="container ">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark bg-secondary">
        <div class="col-md-6 px-0">
        <h1 class="display-4 ">BERITA SEPUTAR KALURAHAN BEDOYO</h1>
        <p class="lead my-3">Segala kegiatan dan agenda akan dipublikasikan pada website Kalurahan Bedoyo Kapenawon Ponjong Kabupaten Gunungkidul </p>
        </div>
    </div>
    <div class="row mb-2">
        @foreach($berita as $b)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/tumpah.png" width="100%" >
                        <strong class="d-inline-block mb-2 text-primary">{{ $b->kategori->nama }}</strong>
                        <h3 class="mb-0">{{ $b->judul }}</h3>
                        <div class="mb-1 text-muted">{{ $b->created_at }}</div>
                        <p class="card-text mb-auto">{{ substr($b->isi, 0, 150) }}</p>
                        <p><a href="{{ route('berita-detail', ['id' => $b->id]) }}" class="btn btn-secondary btn-block " role="button">Baca Selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <div class="col-md-6 ">
            <div class="row g-0 border  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                <div class="col p-4 d-flex flex-column position-static">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/sosd.png" width="100%" >
                        <strong class="d-inline-block mb-2 text-primary">Education</strong>
                        <h3 class="mb-0">Sosialisasi GISA dari Dinas DUKCAPIL Kabupaten Gunungkidul</h3>
                        <div class="mb-1 text-muted">19 Juli 2022</div>
                        <p class="card-text mb-auto">Bedoyo, bertempat di Balai Kalurahan Bedoyo dilangsungkan Sosialisasi GISA dari Dinas DUKCAPIL Kabupaten Gunungkidul.Dari Dinas diwakili oleh Kabid PIAK ibu Rohmi Rahayu bersama jajaranya</p></p>
                        <p><a href="link2" class="btn btn-secondary btn-block " role="button">Baca Selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="row g-0 border  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                <div class="col p-4 d-flex flex-column position-static">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/pemkal.png" width="100%" >
                        <strong class="d-inline-block mb-2 text-primary">Education</strong>
                        <h3 class="mb-0">PEMKAL BEDOYO SALURKAN PMT BALITA DAN BUMIL</h3>
                        <div class="mb-1 text-muted">09 Mei 2022</div>
                        <p class="card-text mb-auto">Bedoyo, dalam rangka meningkatkan kualitas dan gizi anak/Balita, Pemkal Bedoyo menyalurkan PMT ke   Kader Kesehatan dimasing-masing posyandu. Kegiatan ini rutin  dilaksanakan tiap bulan sebagai pelaksanaan dari</p></p>
                        <p><a href="link3" class="btn btn-secondary btn-block " role="button">Baca Selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="row g-0 border  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                <div class="col p-4 d-flex flex-column position-static">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/fitri.png" width="100%" >
                        <strong class="d-inline-block mb-2 text-primary">Education</strong>
                        <h3 class="mb-0">RAKOR PERDANA PEMKAL BEDOYO PASCA IDUL FITRI</h3>
                        <div class="mb-1 text-muted">09 Mei 2022</div>
                        <p class="card-text mb-auto">Libur panjang idul Fitri sudah usai dan hari ini tgl 9 Mei 2022 Pamong Kalurahan masuk kerja kembali dengan diawali Rakor Pamong Kalurahan di Balai Kalurahan Bedoyo.Hadir dalam acara ini Bapak Lurah Bedoyo bersama Pamong  Bedoyo membahas berbagai hal</p></p>
                        <p><a href="link4" class="btn btn-secondary btn-block " role="button">Baca Selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>  
@endsection