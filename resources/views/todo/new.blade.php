@extends('base')

@section('body')
<h1>Add New To Do List</h1>
    <form action="{{ route('todoCreate') }}" method="post">
        @csrf
        <div>
            <label>Description : </label>
            <input type="text" name="description">
        </div>
        <div>
        <br>
            <input type="submit">
        </div>
    </form>
@endsection