@extends('base')

@section('body')
<h1>To Do Completed List</h1>
        <table border="1">

            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
            @foreach ($todos as $todo)
            <?php if($todo->status == 1){
           echo' <tr>
             <th>';echo"{$todo->id}";echo '</th> 
                <th>';echo"{$todo->description}";echo '</th>
                <th>'; echo"Completed";echo '</th>
            </tr>'; 
        }
            ?>
            @endforeach
            <div>
                <tr>
                    
                </tr>
            </div>
        </table>
        <br>
        <th><input type="button" value="Back" onclick="location.href='/todo'"></th>

@endsection