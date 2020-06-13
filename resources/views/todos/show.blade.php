@extends('layouts.app')

@section('title')
    Single todo {{ $todo->name}}
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center my-5">
            {{ $todo->name }}
            </h1>
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            
            </div>
        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info  my-5">Edit</a>

        <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger my-5">Delete</a>
    </div>
@endsection