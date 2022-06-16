@extends('main')
@section('title')
    <h4>All Color</h4>
    <a href="/create" class="btn btn-sm btn-success">Create</a>
@endsection
@section('content')
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>option</td>
        </tr>

        @foreach ($color as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td>
                <a href="/color/edit/{{$c->id}}" class="btn btn-sm btn-primary">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach

        
    </table>        
@endsection