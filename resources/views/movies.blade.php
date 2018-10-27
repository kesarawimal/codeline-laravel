@extends('base')

    @section('content')
        <div class="container-fluid">
            <h1>Films</h1>
            @foreach($films as $film)
                <div class="film">
                    <h3><a href="films/{{$film->slug}}">{{$film->name}}</a></h3>
                    <img src="{{$film->photo}}">
                    <p>{{$film->description}}</p>
                </div>
            @endforeach
        </div>
    @stop