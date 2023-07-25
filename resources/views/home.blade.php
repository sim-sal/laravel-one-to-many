@extends('layouts.app')

@section('content')

    <div class="container text-center pt-5">
        @auth
            <span>Hello, <strong>{{Auth::user() -> name}}</strong></span>
        @endauth

        @guest
            <span>Log in!</span>
        @endguest

        <h1>PROJECT LIST</h1>

        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <li class="pt-2">
                    <a class="text-capitalize" href="{{route('project.show', $project -> id)}}">
                        <strong>{{$project -> name}}</strong>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
