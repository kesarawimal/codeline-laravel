@extends('base')

    @section('content')
        <div class="container-fluid">
            <h1>Film</h1>
                <div class="film">
                    <h3><a href="films/{{$film->slug}}">{{$film->name}}</a></h3>
                    <img src="{{$film->photo}}">
                    <p>{{$film->description}}</p>
                </div>
        </div>
    @stop