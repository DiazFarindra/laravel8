<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::get();
        return \view('tasks.index', [
            'tasks' => $tasks,
            'task' => new Task,
        ]);
    }

    //
    public function create()
    {
        return \view('tasks.create');
    }

    //
    public function store(TaskRequest $request)
    {
        Task::create($request->all());
        return \back();
    }

    //
    public function edit(Task $task)
    {
        return \view('tasks.edit', \compact('task'));
    }

    //
    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update(['list' => $request['list']]);
        return \redirect('tasks');
    }

    //
    public function destroy(Task $task)
    {
        $task->delete();
        return \back();
    }
}
