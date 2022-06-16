@extends('main')
@section('title')
    <h4>Edit Color</h4>
@endsection
@section('content')
    <form action="/color/edit/{{$color->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Color Name</label>
            <input type="text" class="form-control" value="{{$color->name}}" name="name">
        </div>
        <br>
        <input type="submit" value="Update" class="btn btn-sm btn-success">
    </form>
@endsection