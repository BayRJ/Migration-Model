@extends('layout.taskLayout')

@if(isset($id))
<form method="POST" action="/tasks/{{ $id }}">
    @method('PUT')
@else
<form method="POST" action="/tasks">
@endif

    @csrf

    @if(isset($id))
    <div style='width: 100%; height: 10%; display: flex; justify-content: center; align-items:center; flex-direction:column; margin-top: 80px;'>
        <h1>Edit Task ID:{{$id}}</h1>
        <p>Edit the story title and description to your liking</p>
    </div>
    <table style="margin: 50px auto; padding:50px; width: 500px; margin-top: -20px;">
        <tr>
            <td>
                <label for="titleEdit" style="font-weight: bold; font-size: 24px; margin-bottom: 15px;">Title:</label>
                <input type="text" name="title" value="{{ $title }}" id="titleEdit" placeholder="e.g.Adventure Time" style="padding:8px; padding-left: 15px; font-size:18px; width: 100%; border-radius:8px; " required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="descriptionEdit" style="font-weight: bold; font-size: 24px; margin-bottom: 15px;">Description:</label>
                <input type="text" name="description" value="{{ $description }}" id="descriptionEdit" placeholder="e.g.In the beginning of alien..." style="padding:8px; padding-left: 15px; font-size:18px; width: 100%; border-radius:8px;" required>
            </td>
        </tr>


    <input type="hidden" name="id" value="{{ $id }}">

    @else
    <div style='width: 100%; height: 10%; display: flex; justify-content: center; align-items:center; flex-direction:column; margin-top: 80px;'>
        <h1>Add New Task</h1>
        <p>Fill up the form to add new story to the list</p>
    </div>

    <table style='margin: 50px auto; padding:50px; width: 500px; margin-top: -20px;'>
        <tr>
            <td>
                <label for="title" style="font-weight: bold; font-size: 24px; margin-bottom: 15px;">Title:</label>
                <input type="text" name="title" id="title" placeholder="e.g.Adventure Time" style="padding:8px; padding-left: 15px; font-size:18px; width: 100%; border-radius:8px; " required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="description" style="font-weight: bold; font-size: 24px; ">Description:</label>
                <input type="text" name="description" id="description" placeholder="e.g.In the beginning of alien..." style="padding:8px; padding-left: 15px; font-size:18px; width:100%; border-radius:8px;"  required>
            </td>
        </tr>
        @endif
        <tr>
            <td style="padding-left: 125px;">
                <input type="submit" value="Submit" style="padding: 10px 40px;background:black; font-size:18px; text-decoration:none; border-radius:8px; font-weight:bold; color:white; display:inline-block;">
            </td>
        </tr>
    </table>
</form>