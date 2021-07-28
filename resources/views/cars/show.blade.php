@extends('layouts.app')

@section('content')

    <div>
        <div>
            <h1>{{ $car->name }}</h1>
        </div>

        <a href="cars/create">Add a new car</a>

        <hr style="margin: 2em 0;">

        <div>


            <span>Founded: {{ $car->founded }}</span>

            <p>{{ $car->description }}</p>

            <hr>

            <table>
                <tr>
                    <th>Model</th>
                    <th>Engines</th>
                </tr>

                @forelse ($car->carModels as $model)
                    <tr>
                        <td>
                            {{ $model->model_name }}
                        </td>
                        <td>
                            @foreach ($car->engines as $engine)
                                @if ($model->id == $engine->model_id)
                                    {{ $engine->engine_name }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @empty
                    <p>No car models found</p>
                @endforelse
            </table>


        </div>

    </div>


@endsection
