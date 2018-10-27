@extends('base')

    @section('content')
        <div class="container-fluid">
            <h1>Film</h1>
                <div class="film">
                    <h3>{{$film->name}}</h3>
                    <img src="{{$film->photo}}">
                    <p>{{$film->description}}</p>
                </div>
            <h2>Comments</h2>
            <form method="POST" action="/public/comment/create">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" name="name" required>
                    <input type="hidden" class="form-control" name="slug" value="{{$film->slug}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comment</label>
                    <textarea class="form-control" name="comment" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit"></input>
                </div>
            </form>

            @foreach($comments as $comment)
                <div class="comment">
                    <h3>{{$comment->name}} <span class="small">{{$comment->created_at}}</span></h3>
                    <p>{{$comment->comment}}</p>
                </div>
            @endforeach
        </div>
    @stop