@extends('layout.taskLayout')

<h1 style="text-align:center; margin-top: 20px;">Show Task</h1>


<table style=' margin: 50px auto; padding:50px; margin-top: -20px;'>
    <tr>
        <td>Title:</td>
        <td>{{$title}}</td>
    </tr>
    <tr>
        <td>Description:</td>
        <td>{{$description}}</td>
    </tr>
    <tr>
        <td>Task Finished:</td>
        <td>{{$is_completed ? "Yes": "No"}}</td>
    </tr>
    <tr>
        <td>
            <a href="{{ route('tasks.edit', $id) }}" style="padding: 10px;background: #FFDE21; font-size:18px; text-decoration:none; border-radius:8px; font-weight:bold; color:black; display:inline-block; margin:0 auto; ">Edit Task</a>
        </td>
        <td >
        <form action="{{ route('tasks.destroy', $id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="padding: 10px;background: #c70000; font-size:18px; text-decoration:none; border-radius:8px; font-weight:bold; color:black; display:inline-block; margin:0 auto; border:none;">Delete</button>
        </form>
        </td>
    </tr>
</table>


