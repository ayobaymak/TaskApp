@extends('layout.master')
@extends('layout.nav-default')


@section('content')
    <h1>Edit Task</h1>
    <div class="col-md-offset-3">
        <div class="col-md-6">

    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name of Task:', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
        </div>

         <div class="form-group">
            {!! Form::select('status', ['uncompleted' => 'Uncompleted', 'completed' => 'Completed'], ['class' => 'form-control']) !!}
        </div>
            <br>
    {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

            @if(count($errors ))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>


@endsection

@section('footer')
    @include('layout.footer')
@endsection