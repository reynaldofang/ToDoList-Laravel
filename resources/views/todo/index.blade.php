@extends('base')

@section('body')

<h1>To Do List</h1>

<button > <a href="{{ route('todoNewForm') }}">Add</a> </button>
<button > <a href="{{ route('todoShow')}}">Show Completed</a> </button>
<br>
<br>


<table border ="1">
    <tr>
        <td>ID</td>
        <td>Description</td>
        <td>Status</td>
        <td>Action</td>
    </tr>
    @foreach ($todos as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->description}}</td>
        <td><?php if($todo->status == 0)echo"On Progress";
            else if($todo->status == 1) echo"Completed"; ?>
        </td>
        <td><a href="{{ route('todoUpdate',['id' => $todo->id]) }}">Edit</a>
        <a href="{{ route('todoDelete',['id' => $todo->id]) }}"onclick="return confirm('Are you sure?')">Delete</a> 
            </td>
    
    </tr>
    @endforeach
</table>
@endsection

