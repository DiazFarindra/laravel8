<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::get();
        return \view('tasks.index', compact('tasks'));
    }

    //
    public function create()
    {
        return \view('tasks.create');
    }

    //
    public function store(Request $request)
    {
        Task::create([
            'list' => $request->list,
        ]);

        return \back();
    }

    //
    public function edit($id)
    {
        $task = Task::find($id);
        return \view('tasks.edit', \compact('task'));
    }

    //
    public function update(Request $request, $id)
    {
        $task = Task::find($id)->update(['list' => $request->list]);
        return \redirect('tasks');
    }

    //
    public function destroy($id)
    {
        Task::destroy($id);
        return \back();
    }
}
