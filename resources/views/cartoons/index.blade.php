@extends("layouts.main")

@section("content")

    <div class="container">
        <h1>Elenco cartoon</h1>

        @if(session("deleted"))
            <div class="alert alert-success" role="alert">
                <p>{{ session("deleted") }}</p>
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Anno</th>
                    <th scope="col">Creatori</th>
                    <th scope="col">Azioni</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cartoons as $cartoon)
                    <tr>
                        <td>{{ $cartoon->id }}</td>
                        <td>{{ $cartoon->title }}</td>
                        <td>{{ $cartoon->year }}</td>
                        <td>{{ $cartoon->creator }}</td>
                        <td>
                            <a href="{{ route("cartoons.show", $cartoon) }}" class="btn btn-success"><i class="fa-solid fa-circle-info"></i></a>
                            <a href="{{ route("cartoons.edit", $cartoon) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                            @include("partials.formDelete")
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
