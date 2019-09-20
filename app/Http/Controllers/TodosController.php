<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
   //a view to show all todos
public function index(){
    $todos=Todo::all();
    return view('todos.index',compact('todos'));
}
    //return a view to create a todo
    public function create(){
        return view('todos.create');
    }
    //store
    public function store(){
        $todo=new Todo();
        $todo->name=request('name');
        $todo->content=request('content');

        $todo->save();
        
        return redirect('/todos');
    }

    //return view shows the details
public function show($id){
    //find the record
    $todo=Todo::find($id);
    //pass the todo to the view
    return view('todos.show',compact('todo'));
}

    //return a form to edit

    //delte the record 

    //a function to get the todo upadte the record

}
