<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

        $task = new Task();
        $task->title = "story6";
        $task->description = "In the beginning...";
        $task->is_completed = true;
        $task->save();

        return view('try');
    
}
}
