<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\TasksDataTable;
use App\Http\Requests\Admin\TaskStoreRequest;
use App\Http\Requests\Admin\TaskUpdateRequest;


class TaskController extends Controller
{

    public function index(TasksDataTable $dataTable)
    {
        return $dataTable->render('admin.tasks.index');
    }

    public function show(Task $task)
    {   
        return view('admin.tasks.show', compact('task'));
    }

    public function create()
    {
        return view('admin.tasks.create');
    }

    public function store(TaskStoreRequest $request)
    {   
        $data = $request->validated();
        Task::create($data);
        notyf("Successfully added.");
        return redirect()->route('admin.tasks.index');
    }

    public function edit(Task $task)
    {
        return view('admin.tasks.edit' , compact('task'));
    }

    public function update(TaskUpdateRequest $request, Task $task)
    {
        $data = $request->validated();
        $task->update($data);
        notyf('Successfully updated.');
        return redirect()->route('admin.tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        notyf('Successfuly deleted.');
        return redirect()->route('admin.tasks.index');
    }

    public function sorted()
    {
        $tasks = Task::orderBy('priority', 'asc')->get();
        return view('admin.tasks.sorted', compact('tasks'));
    }
    
    public function makeSorting(Request $request)
    {
        $sortedIds = $request->input('sortedIds');
        foreach($sortedIds as $index => $id){
            Task::findOrFail($id)->update(['priority'=> $index + 1]);
        }
        return response()->json(null, 204);
    }
}
