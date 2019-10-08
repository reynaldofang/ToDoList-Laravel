<?php

namespace App\Http\Controllers;

use App\ToDo as todoModel;
use App\Repositories\TodoInterface;
use App\Repositories\TodoRepository;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    private $todoRepo;

    public function __construct(TodoRepository $repo)
    {
        $this->todoRepo = $repo;
    }

    public function index()
    {
        $todos = todoModel::all();
        return view('todo.index', ['todos' => $todos]);
    }
    public function new_form()
    {
        return view('todo.new');
    }

    public function save(Request $request)
    {
        $todo = new todoModel;
        $todo->description = $request->description;
        $todo->status = 0;
        $todo->save();
        return redirect(route('todoIndex'));
    }

    public function delete(int $id)
    {
        $this->todoRepo->delete($id);
        return redirect(route('todoIndex'));
    }

    public function detail(int $id){
        $todo = $this->todoRepo->get($id);
        if ($todo == null){
            abort(404);
        }
        return view('todo.detail',
                     ['todo'=>$todo]);

    }

    public function edit(int $id){
        $todo = todoModel::findOrFail($id);
        return view('todo.edit',
                    ['todo'=>$todo]);
    }

    public function update(Request $request){
        $newtodo = new todoModel;
        $newtodo->description = $request->input('description');
        if($request->input('status') == "on") $newtodo->status = 1;
        else $newtodo->status = 0;
        $this->todoRepo->update($request->id,$newtodo);
        return redirect(route('todoIndex'));
    }

    public function show()
    {
        $todos = todoModel::all();
        return view('todo.Show', ['todos' => $todos]);
    }
    
}
