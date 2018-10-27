@extends('base')

    @section('content')
        <div class="container-fluid">
            <h1>Create new film</h1>
            <form method="POST" action="/films/create">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Release Date</label>
                    <input type="text" class="form-control" name="date" placeholder="yyyy-mm-dd" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Rating</label>
                    <select class="form-control" name="rate" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Ticket Price</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Genre</label>
                    <input type="text" class="form-control" name="genre" placeholder="Enter comma separated Genres" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Country</label>
                    <input type="text" class="form-control" name="country" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Photo</label>
                    <input type="file" class="form-control" name="file" required>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit"></input>
                </div>
            </form>
        </div>
    @stop