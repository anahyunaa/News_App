@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                @if (isset(session('user')['photo']))
                    <img src="{{ session('user')['photo'] }}" alt="Foto Profil" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                @else
                    <img src="images/profile.jpeg" alt="Foto Profil" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                @endif
                
                <h2>{{ session('user')['name'] ?? 'Nama Tidak Tersedia' }}</h2>
                <p class="text-muted">{{ session('user')['email'] ?? 'Email Tidak Tersedia' }}</p>

                <hr>
                <a href="{{ route('home') }}" class="btn btn-secondary">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
@endsection
