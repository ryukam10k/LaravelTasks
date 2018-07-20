<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(Request $request) {
        $sort = $request->sort;
        $items = Task::orderBy($sort, 'asc')->paginate(5);
        $param = ['items' => $items, 'sort' => $sort];
        return view('task.index', $param);
    }

    public function add(Request $request)
    {
        return view('task.add');
    }

    public function create(Request $request)
    {
        $task = new Task;
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/task');
    }

    public function show(Request $request)
    {
        $task = Task::find($request->id);
        return view('task.show', ['form' => $task]);
    }

    public function edit(Request $request)
    {
        $task = Task::find($request->id);
        return view('task.edit', ['form' => $task]);
    }

    public function update(Request $request)
    {
        $task = Task::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/task');
    }
}
