@extends('layouts.app')

@section('content')
    <div class="container text-center pt-5">
        <h1>Hello from CREATE</h1>

        <form method="POST" action="{{route('project.store')}}">

            @csrf
            @method('POST')

            <div>
                <label for="name"><strong>Name</strong></label><br>
                <input type="text" name="name" id="name" >
            </div>

            <div>
                <label for="description"><strong>Description</strong></label><br>
                <textarea name="description" id="description" cols="40" rows="5"></textarea>
            </div>

            <div>
                <label for="start_date"><strong>Start date</strong ></label><br>
                <input type="date" name="start_date" id="start_date" >
            </div>

            <div>
                <label for="end_date"><strong>End date</strong></label><br>
                <input type="date" name="end_date" id="end_date" >
            </div>

            <div>
                <label for="rating"><strong>Rating</strong></label><br>
                <select  name="rating" id="rating">
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
            </div>

            <div>
                <label for="cost"><strong>Cost</strong></label><br>
                <input type="number" name="cost" id="cost" >
            </div>

            <div>
                <label for="type_id"><strong>Type</strong></label><br>
                <select name="type_id" id="type_id">
                    @foreach ($types as $type)
                        <option value="{{$type -> id}}">
                            {{$type -> name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <input type="submit" value="CREATE" class="my-3">

        </form>
    </div>
@endsection
