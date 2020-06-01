@extends('layouts.app')
@section('content')

<h1 class="text-center my-5">Todos</h1>
    <div class="card card-default">
        <div class="card-header">
            todos
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($todos as $todo)
                    <li class="list-group-item">
                        {{ $todo->name }}
                        <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                    </li>
            @endforeach
        </ul>
    </div>
@endsection