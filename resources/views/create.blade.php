@extends('layouts.app')

@section('content')
    <div class="container text-center pt-5">
        <h1>CREATE PROJECT</h1>

        {{-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form method="POST" action="{{route('project.store')}}">

            @csrf
            @method('POST')

            <div>
                <label for="name"><strong>Name</strong></label><br>
                <input type="text" name="name" id="name" >

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="description"><strong>Description</strong></label><br>
                <textarea name="description" id="description" cols="40" rows="5"></textarea>
            </div>

            <div>
                <label for="start_date"><strong>Start date</strong ></label><br>
                <input type="date" name="start_date" id="start_date" >

                @error('start_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="end_date"><strong>End date</strong></label><br>
                <input type="date" name="end_date" id="end_date" >

                @error('end_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="rating"><strong>Rating</strong></label><br>
                <select  name="rating" id="rating">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                @error('rating')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="cost"><strong>Cost</strong></label><br>
                <input type="text" name="cost" id="cost" >

                @error('cost')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="type_id"><strong>Type</strong></label><br>
                <select name="type_id" id="type_id">

                    <option value=""></option>

                    @foreach ($types as $type)
                        <option value="{{$type -> id}}">
                            {{$type -> name}}
                        </option>
                    @endforeach
                </select>

                @error('type_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" value="CREATE" class="my-3">

        </form>

    </div>
@endsection
