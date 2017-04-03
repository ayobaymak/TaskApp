<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class TasksController extends Controller
{
    public function index(){
        $tasks = Task::first()->orderBy('updated_at', 'desc')->get();


        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task){

        return view('tasks.show', compact('task'));
    }


    public function create(){

        return view('tasks.add');
    }

    public function store(TaskRequest $request){

        Task::create($request->all());

        Session::flash('flash_message', 'Task Successfully Added');


        return redirect()->back();
    }

    public function edit(Task $task){

        return view('tasks.edit', compact('task'));
    }

    public function update($id, Request $request){
        $task = Task::findorFail($id);

        $this->validate($request,[
            'name' => 'required|max:50',
            'status' => 'required'
        ]);

        $input = $request->all();

        $task->fill($input)->save();

        Session::flash('flash_message', 'Task successfully updated!');

        return redirect()->route('tasks.index');

    }

    public function destroy($id)
    {
        Task::findorFail($id)->delete();

        Session::flash('flash_message', 'Task successfully deleted!');

        return redirect()->route('tasks.index');
    }


//    public function delete(Task $task){
//
//        return view('tasks.delete', compact('task'));
//    }

}
