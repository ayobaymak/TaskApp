@extends('layout.master')
@extends('layout.nav-default')

@section('content')

    <h1>Add A New Task</h1>
    <div class="col-md-offset-3">
        <div class="col-md-6">


        <form method="POST" action="/tasks">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name of Task:</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
            </div>

            @if(count($errors ))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="uncompleted" aria-selected="true">Uncompleted</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>



        </div>

    </div>

@endsection

@section('footer')
    @include('layout.footer')
@endsection