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
}
