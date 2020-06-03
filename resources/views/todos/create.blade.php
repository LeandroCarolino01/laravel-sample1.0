@extends('layouts.app')

@section('content')

<h1 class="text-center my-5">
    Create todos
</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create new card
            </div>
            <div class="card-body">
            <form action="/store-todos" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>

            <div class="form-group">
                <textarea name="description" placeholder="description" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Create todos</button>
            </div>
        </form>
            </div>
        </div>
    </div>
</div>

@endsection