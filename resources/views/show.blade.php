@extends('layouts.app')

@section('pageName')
{{$project -> name}}
@endsection

@section('content')

    <div class="container text-center pt-5">
        <h1 class="text-uppercase bg-dark rounded text-light">{{$project -> name}}</h1>

        <div class="card pt-3">
            <h3>Description</h3>
            <p>{{$project -> description}}</p>
        </div>

        <div class="row pt-3">
            <div class="col">
                <h3>Start date</h3>
                <span>{{$project -> start_date}}</span>
            </div>
            <div class="col">
                <h3>End date</h3>
                <span>{{$project -> end_date}}</span>
            </div>
            <div class="col">
                <h3>Rating</h3>
                <span>{{$project -> rating}}/10</span>
            </div>
            <div class="col">
                <h3>Cost</h3>
                <span>{{$project -> cost}} $</span>
            </div>
            <div class="col">
                <h3>Type</h3>
                <span>{{$project -> type -> name}}</span>
            </div>
            <div class="col">
                <h3>Technologies</h3>
                @if (count($project -> technologies) > 0)

                    @foreach ($project -> technologies as $technologie)
                        <span>{{$technologie -> name}}</span>
                    @endforeach

                @else
                    <span>NO TECHNOLOGY!</span>
                @endif

            </div>
        </div>
    </div>

@endsection
