<?php /**
 * @var \App\Models\Task $taskList
 * @var \App\Models\Task $task
 */ ?>
@extends("admin.layouts.main")
@section('title','Admin Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Task List</h3>
                    <x-forms.button type="create" form-id="createTaskModal"></x-forms.button>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-bordered table-hover">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Task Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($taskList as $task)
                                <tr>
                                    <th>{{$task->id}}</th>
                                    <th>{{$task->name}}</th>
                                    <th>{{$task->status}}</th>
                                    <th>
                                        <x-forms.button type="update"
                                                        form-id="updateTaskModal{{$task->id}}">
                                        </x-forms.button>
                                        <a href="{{route('admin.task.delete',['id'=>$task->id])}}"
                                           class="btn btn-danger">Delete</a>
                                    </th>
                                </tr>
                                <x-forms.update form-id="updateTaskModal{{$task->id}}" form-name="Task"
                                                :route="route('admin.task.update',['id'=>$task->id])">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Task name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{$task->name}}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" name="status" id="status">
                                            <option
                                                value="doing" {{$task->status == 'doing' ? 'selected' : ''}}>
                                                Doing
                                            </option>
                                            <option
                                                value="done" {{$task->status == 'done' ? 'selected' : ''}}>
                                                Done
                                            </option>
                                        </select>
                                    </div>
                                </x-forms.update>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-forms.create form-id="createTaskModal" form-name="Task" :route="route('admin.task.create')">
        <x-inputs.text label="Task name" name="name"></x-inputs.text>
    </x-forms.create>
@endsection
