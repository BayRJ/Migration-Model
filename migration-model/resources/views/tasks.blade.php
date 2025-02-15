@extends('layout.taskLayout')

@section('content')
<table style=' margin: 50px auto; padding:50px;'>

    <tr>
        <td><h1>Tasks List</h1></td>
       <td style="margin-bottom:20px;">
           <a href="{{ url('https://bookish-eureka-q7qg5497pwp9hx5w9-8000.app.github.dev/tasks/create') }}"  style="padding: 10px;background:	#90EE90; font-size:12px; text-decoration:none; border-radius:8px; font-weight:bold;">Add New Task</a>
       </td>
    </tr>

@foreach($tasks as $task)
    <tr>
        <td >
            <h1 class="text-3xl text-red-500">Title: {{ $task->title }}</h1>
            <p><span style="font-weight:bold;">Description: </span>{{ $task->description }}</p>
        </td>
        <td style="padding-left:25px;">
           <a href="{{ route('tasks.show', $task->id) }}" style="padding: 10px;background:	black; font-size:12px; text-decoration:none; border-radius:8px; font-weight:bold; color:white; display:inline-block; margin:0 auto; ">View Task</a>
        </td>
    </tr>
@endforeach
</table>

@if(session('success'))
    <div class="alert alert-success">
        alert({{ session('success') }})
    </div>
@endif
@endsection

