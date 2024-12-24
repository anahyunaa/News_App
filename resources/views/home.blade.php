@extends('layouts.app')

@section('content')
    <!-- Berita Utama -->
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <img src="images/gambar800x400.jpeg" class="card-img-top" alt="Berita Utama">
                <div class="card-body">
                    <h5 class="card-title">Hasto Belum Ditangkap Meski Jadi Tersangka, Ini Alasan KPK</h5>
                    <p class="card-text">Berita terkini tentang pernyataan KPK terkait Hasto.</p>
                    <a href="{{ route('blog.post', 'hasto-belum-ditangkap') }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Top Articles
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="{{ route('blog.post', 'token-listrik-diskon') }}">Token Listrik Diskon 50%, Ini Perhitungannya</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('blog.post', 'hasto-belum-ditangkap') }}">KPK: Harun Masiku Masih Melarikan Diri</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('blog.post', 'jadwal-misa-natal') }}">Jadwal Misa Malam Natal 2024 di Jakarta</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Berita Lainnya -->
    <h3 class="mt-4">Latest Topics</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/gambar600x300.jpeg" class="card-img-top" alt="Berita Lainnya">
                <div class="card-body">
                    <h5 class="card-title">Awarding Night CNBC Indonesia Award 2024</h5>
                    <p class="card-text">Penghargaan bergengsi diadakan untuk menghormati tokoh inspiratif.</p>
                    <a href="{{ route('blog.post', 'token-listrik-diskon') }}" class="btn btn-secondary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/gambar600x300.jpeg" class="card-img-top" alt="Berita Lainnya">
                <div class="card-body">
                    <h5 class="card-title">Pertamina Group Siap Siaga Nataru</h5>
                    <p class="card-text">Persiapan Pertamina dalam memastikan distribusi energi saat Nataru.</p>
                    <a href="{{ route('blog.post', 'jadwal-misa-natal') }}" class="btn btn-secondary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
