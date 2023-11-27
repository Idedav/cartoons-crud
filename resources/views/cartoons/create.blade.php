@extends('layouts.main')

@section('content')
    <h1>Creazione nuovo Cartoon:</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cartoons.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year"
                value="{{ old('year') }}">
            @error('year')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="creator" class="form-label">Creator</label>
            <input type="text" class="form-control @error('creator') is-invalid @enderror" id="creator" name="creator"
                value="{{ old('creator') }}">
            @error('creator')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating"
                value="{{ old('rating') }}">
            @error('rating')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre"
                value="{{ old('genre') }}">
            @error('genre')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="runtime_in_minutes" class="form-label">Durata in minuti</label>
            <input type="number" class="form-control @error('runtime_in_minutes') is-invalid @enderror"
                id="runtime_in_minutes" name="runtime_in_minutes" value="{{ old('runtime_in_minutes') }}">
            @error('runtime_in_minutes')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="episodes" class="form-label">Episodi</label>
            <input type="number" class="form-control @error('episodes') is-invalid @enderror" id="episodes"
                name="episodes" value="{{ old('episodes') }}">
            @error('episodes')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                value="{{ old('image') }}">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
    </form>
@endsection
