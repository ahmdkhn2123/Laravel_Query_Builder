<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
@if (Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
@endif
<body>
<table class="table table-striped  table-bordered border-primary " style="margin-top:20px">
    <tr>
        <th><h3><b>ID</b></h3></th>
        <th><h3><b>Name</b></h3></th>
        <th><h3><b>Price</b></h3></th>
        <th><h3><b>Category</b></h3></th>
        <th><h3><b>Operations</b></h3></th>


    </tr>
    @foreach($data as $coll)
    <tr>
        <th>{{$coll->id}}</th>
        <th>{{$coll->name}}</th>
        <th>{{$coll->price}}</th>
        <th>{{$coll->category}}</th>
        <th><a href="delete/{{$coll->id}}"><button class="btn btn-danger">Delete</button></a>
        <a href="edit/{{$coll->id}}"><button class="btn btn-success">Edit</button></a></th>
    </tr>
    @endforeach

</body>
</html>
