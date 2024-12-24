@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-4">
            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="{{ $post['title'] }}">
            <div class="card-body">
                <h1 class="card-title">{{ $post['title'] }}</h1>
                <p class="text-muted">Diterbitkan {{ $post['time'] }}</p>
                <hr>
                <p class="card-text">
                    Dalam sebuah konferensi pers yang berlangsung hari ini, Komisi Pemberantasan Korupsi (KPK) mengungkapkan alasan mengapa Hasto Kristiyanto, yang telah ditetapkan sebagai tersangka, belum juga ditangkap. Menurut pernyataan resmi, langkah hukum ini memerlukan waktu lebih karena "proses pembuktian tambahan."
                </p>
                <p class="card-text">
                    "Kami tidak ingin ada kesalahan prosedur, oleh karena itu kami memastikan semua bukti dan dokumen hukum lengkap sebelum mengambil langkah lebih lanjut," ujar juru bicara KPK dalam keterangannya.
                </p>
                <p class="card-text">
                    Sementara itu, beberapa pihak mempertanyakan langkah lamban dari KPK. Pengamat politik menilai ini bisa berdampak pada kredibilitas lembaga antirasuah. "Publik menunggu tindakan konkret, bukan hanya wacana," ujar salah satu pengamat yang tidak mau disebutkan namanya.
                </p>
                <p class="card-text">
                    Kasus ini bermula dari dugaan suap terkait proyek besar yang melibatkan sejumlah pejabat tinggi. Dengan Hasto sebagai salah satu tokoh kunci, publik berharap KPK dapat memberikan kejelasan dalam waktu dekat.
                </p>
                <p class="card-text">
                    Untuk saat ini, KPK tetap berpegang pada asas praduga tak bersalah, meskipun tekanan dari masyarakat terus meningkat. Informasi lebih lanjut akan disampaikan dalam konferensi pers mendatang.
                </p>
            </div>
        </div>
        <a href="{{ route('blog') }}" class="btn btn-secondary">Kembali ke Blog</a>
    </div>
@endsection
