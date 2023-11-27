<<<<<<< HEAD
@extends('layouts.main')

@section('content')
    <div class="card" style="width: 50%;">
        <img src="{{ $cartoon->image }}" class="card-img-top" alt="{{ $cartoon->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $cartoon->title }}</h5>
            <span>{{ $cartoon->year }}</span>
            <div>
                <span><strong>Valutazione: </strong>{{ $cartoon->rating }}</span>
                <span><strong>Genere: </strong>{{ $cartoon->genre }}</span>
                <span><strong>Creatori/e:</strong> {{ $cartoon->creator }}</span>
                <span><strong>Numero episodi:</strong> {{ $cartoon->episodes }}</span>
                <span><strong>Durata media episodio:</strong> {{ $cartoon->runtime_in_minutes }}</span>
            </div>
            <p class="card-text"></p>
            <a href="{{ route('cartoons.edit', $cartoon) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
        </div>
    </div>
=======
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

>>>>>>> 6d7363966d2f402269186b579631dba990d20d7f
@endsection
