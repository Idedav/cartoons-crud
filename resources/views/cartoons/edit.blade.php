@extends("layouts.main")

@section("content")

    <div class="container my-5">
        <h1>Aggiorna {{$cartoon->title}}</h1>

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route("cartoons.update", $cartoon)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old("title", $cartoon->title) }}">
                @error("title")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label @error("year") is-invalid @enderror" >Anno</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ old("year", $cartoon->year) }}">
                @error("year")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="creator" class="form-label @error("creator") is-invalid @enderror">Creator</label>
                <input type="text" class="form-control" id="creator" name="creator" value="{{ old("creator", $cartoon->creator) }}">
                @error("creator")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label @error("rating") is-invalid @enderror">Valutazione</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{ old("rating", $cartoon->rating) }}">
                @error("rating")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label @error("genre") is-invalid @enderror">Genere</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old("genre", $cartoon->genre) }}">
                @error("genre")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="runtime" class="form-label @error("runtime_in_minutes") is-invalid @enderror">Durata</label>
                <input type="number" class="form-control" id="runtime" name="runtime_in_minutes" value="{{ old("runtime_in_minutes", $cartoon->runtime_in_minutes) }}">
                @error("runtime_in_minutes")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="episodes" class="form-label @error("episode") is-invalid @enderror">Episodi</label>
                <input type="number" class="form-control" id="episodes" name="episodes" value="{{ old("episodes", $cartoon->episodes) }}">
                @error("episode")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error("image") is-invalid @enderror">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old("image", $cartoon->image) }}">
                @error("image")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>

@endsection
