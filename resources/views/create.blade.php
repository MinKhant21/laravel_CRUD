@extends('main')
@section('title')
    <h4>Create Color</h4>
@endsection
@section('content')
    <form action="/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Color Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <br>
        <input type="submit" value="Create" class="btn btn-sm btn-success">
    </form>
@endsection