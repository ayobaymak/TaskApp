@extends('layout.master')
@extends('layout.nav-default')


@section('content')

    <h1>All Tasks</h1>
    <div class="col-md-offset-3">
        <div class="col-md-9">
            <table class="table table-responsive table-striped">
                <thead>
                <th>Name</th>
                <th>Status</th>
                <th>Time Elapsed</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if(!empty($tasks))
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->name}}</td>
                            <td>{{$task->status}}</td>
                            <td>{{$task->updated_at->diffForHumans()}}</td>
                            <td><a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary fa fa-edit"></a></td>
                            <td>{!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE']) !!}

                                {!! Form::submit('Delete Task', ['class' => 'btn btn-danger fa fa-trash']) !!}

                                {!! Form::close() !!}</td>

                            {{--<td><a href="{{ url('/delete') }}" class="btn btn-danger fa fa-trash"></a></td>--}}

                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>

    </div>

@endsection

@section('footer')
    @include('layout.footer')
@endsection