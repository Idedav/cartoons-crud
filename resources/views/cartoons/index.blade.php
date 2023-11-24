@extends("layouts.main")

@section("content")

    <div class="container">
        <h1>Elenco cartoon</h1>
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
                        <td>X</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
