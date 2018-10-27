@extends('base')

    @section('content')
        <div class="container-fluid">
            <h1>Register</h1>
            <form method="POST" action="/register">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit"></input>
                </div>
            </form>
        </div>
    @stop