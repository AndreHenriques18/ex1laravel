<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class TaskController extends Controller
{
    public function create()
    {
        return view('task.create');
    }

    public function index()
     {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', [
            'tasks' => $tasks
        ]);
     }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',

        ]);

        if ($validator->fails()) {
              return redirect('/')
              ->withInput()
              ->withErrors($validator);
        }

        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }

    public function edit(Request $request, Task $task)
    {
        $id = $request->get('id');
        $task = Task::findOrFail($id);
        $task->mark();

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
