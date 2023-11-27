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
@endsection
