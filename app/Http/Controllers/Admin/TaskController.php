<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $taskList = Task::all();
        return view("admin.task.index", compact(['taskList']));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Task::insert($request->except('_token'));
        return to_route('admin.task');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Task::where('id', $id)->update($request->except('_token'));
        return to_route('admin.task');
    }

    public function delete($id)
    {
        Task::where('id', $id)->delete();
        return to_route('admin.task');
    }
}
