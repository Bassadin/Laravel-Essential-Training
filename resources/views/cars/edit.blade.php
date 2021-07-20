@extends('layouts.app')

@section('content')
    <div>
        <h1>Update Car</h1>

        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('put')
            <input type="text" name="name" id="" placeholder="Brand name..." value="{{ $car->name }}">
            <br /><br />
            <input type="text" name="founded" id="" placeholder="Founded..." value="{{ $car->founded }}">
            <br /><br />
            <input type="text" name="description" id="" placeholder="Description..." value="{{ $car->description }}">
            <br /><br />

            <button type="submit">Update car brand</button>

        </form>
    </div>
@endsection
