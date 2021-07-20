@extends('layouts.app')

@section('content')

    <div>
        <div>
            <h1>Cars</h1>
        </div>

        <a href="cars/create">Add a new car</a>

        <hr style="margin: 2em 0;">

        <div>

            @foreach ($cars as $car)
                <span>Founded: {{ $car->founded }}</span>
                <h2>{{ $car->name }}</h2>
                <p>{{ $car->description }}</p>
                <hr>
            @endforeach

        </div>
    </div>


@endsection
