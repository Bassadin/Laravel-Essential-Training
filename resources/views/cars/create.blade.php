@extends('layouts.app')

@section('content')
    <div>
        <h1>Create Car</h1>

        <form action="/cars" method="POST">
            @csrf
            <input type="text" name="name" id="" placeholder="Brand name...">
            <br /><br />
            <input type="text" name="founded" id="" placeholder="Founded...">
            <br /><br />
            <input type="text" name="description" id="" placeholder="Description...">
            <br /><br />

            <button type="submit">Create car brand</button>

        </form>
    </div>
@endsection
