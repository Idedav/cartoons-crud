@extends("layouts.main")

@section("content")

    <h1 class="text-center my-5">{{ $cartoon->title }}</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ $cartoon->image }}" alt="{{ $cartoon->title }}">
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $cartoon->title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Anno: {{ $cartoon->year }}</li>
                        <li class="list-group-item">Creators: {{ $cartoon->creator }}</li>
                        <li class="list-group-item">Rating: {{ $cartoon->rating }}</li>
                        <li class="list-group-item">Genere: {{ $cartoon->genre }}</li>
                        <li class="list-group-item">Durata: {{ $cartoon->runtime_in_minutes }}</li>
                        <li class="list-group-item">Episodi: {{ $cartoon->episodes }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
