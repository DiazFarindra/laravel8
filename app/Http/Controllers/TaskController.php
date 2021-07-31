<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = DB::table('tasks')->orderByDesc('id')->get();
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
        DB::table('tasks')->insert([
            'id' => $request->id,
            'list' => $request->list,
        ]);

        return \back();
    }

    //
    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return \view('tasks.edit', \compact('task'));
    }

    //
    public function update(Request $request, $id)
    {
        $task = DB::table('tasks')->where('id', $id)->update(['list' => $request->list]);
        return \redirect('tasks');
    }

    //
    public function destroy($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return \back();
    }
}
