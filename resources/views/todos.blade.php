@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    </br>

    <div class="panel-body" style="font-family:avenir;">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New todo Form -->
        <form action="{{ url('todo') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- todo name -->
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">To-do Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="todo-name" class="form-control">
                </div>
            </div>

            <!-- todo description -->
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Description</label>

                <div class="col-sm-6">
                    <input type="textarea" name="description" id="todo-description" class="form-control">
                </div>
            </div>

            <!-- Add Todo Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add To-do
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current todos -->
    <!-- Current todos -->
    @if (count($todos) > 0)
        <div class="panel panel-default" style="font-family:avenir;">
            <div class="panel-heading">
                Current To-dos
            </div>

            <div class="panel-body">
                <table class="table table-striped todo-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>To-do</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($todos as $todo)
                            <tr>
                                <!-- todo Name -->
                                <td class="table-text">
                                    <div> <a href="{{ route('todo.show', $todo->id, $todo->name) }}"> {{ $todo->name }} </a> </div>
                                </td>
                                <td>
                                    <!-- Delete Button -->
                                    <td>
                                        <form action="{{ url('todo/'.$todo->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <center> <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                            </center>
                                        </form>
                                    </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
