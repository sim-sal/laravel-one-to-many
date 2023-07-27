@extends('layouts.app')

@section('pageName')
PROJECT LIST
@endsection

@section('content')

    <div class="container text-center pt-5">
        @auth
            <span>Hello, <strong>{{Auth::user() -> name}}</strong></span>
        @endauth

        @guest
            <span>Log in!</span>
        @endguest

        @auth
        <h1>PROJECT LIST</h1>
        <a class="btn btn-dark" href="{{route('project.create')}}">CREATE NEW PROJECT</a>
        @endauth

        @guest
            <h1>PROJECT LIST</h1>
        @endguest


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
