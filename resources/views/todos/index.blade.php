<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
     integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Todos</title>
</head>
<body>
    

  <div class="container">
    <h1 class="text-center my-5">TODOS PAGE</h1>
       <div class="row justify-content-center">
        <div class="col-md-8 ">
        <div class="card card-default">
             <div class="card-header">
                    Todos
            </div>
        <div class="card-body">
        <ul class="list-group">
            @foreach($todos as $todo)
            <li class="list-group-item">
                {{ $todo->name }}

                <a href="/todos/{{ $todo->id}}" class="btn btn-primary btn-sm float-right">
                    View
                </a>
            </li>
            @endforeach
        </ul>
        </div>
        </div>
        </div>
       </div>
  </div>

</body>
</html>