<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
     integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Todo item</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">
            {{ $todo->name}}
        </h1>
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>
        <div class="card-body">
          <div class="row justify-content-center">
                <div class="col-md-6">
                    {{$todo->description}}
                </div>
          </div>
        </div>    
        </div>
    </div>
</body>
</html>