@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Blog - Berita Terkini</h1>

    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="{{ $blog['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog['title'] }}</h5>
                        <p class="card-text">{{ $blog['excerpt'] }}</p>
                        <p class="card-text"><small class="text-muted">Diterbitkan {{ $blog['time'] }}</small></p>
                        <a href="{{ route('blog.post', $blog['slug']) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
