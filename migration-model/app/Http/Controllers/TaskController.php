<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
public function index(){
    return view('tasks',[
        'tasks' => Task::all()
    ]);
}

public function create()
{
    return view('taskForm');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $record = $request->all();
    $tasks = new Task;
    $tasks->addItem($record);
    return redirect('/tasks')
        ->with('success', 'successfully inserted record');
}

/**
 * Display the specified resource.
 */
public function show($id)
{
    $fetchedRecord = Task::where('id', $id)->first();
    return view('taskShow', $fetchedRecord->toArray());
}

/**
 * Show the form for editing the specified resource.
 */
public function edit($id)
{
    $fetchedRecord = Task::where('id', $id)->first();
    return view('taskForm', $fetchedRecord->toArray());
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, Task $taskModel, $id)
{
    $record = $request->all();
    $tasks = new Task;
    $tasks->updateItem($id, $record);
    return redirect('/tasks');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    /*
    make this method functional
    1. complete the model method (delete a record by ID)
    2. redirect back to /tasks
    */
    
    $tasks = new Task;
    $tasks->deleteItem($id);

    return redirect('/tasks');

}

}
