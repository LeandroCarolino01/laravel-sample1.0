<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
   <div class="container">
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
                        <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">
                            view
                        </a>
                    </li>
            @endforeach
        </ul>
    </div>
   </div>
</body>
</html>