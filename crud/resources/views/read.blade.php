<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="row justify-content-cneter">
<form action=''method="POST">
<div class="form-group"> 
</form>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">color</th>
      <th scope="col">Aciton</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $pro)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$pro->name}}</td>
      <td>{{$pro->age}}</td>
      <td>{{$pro->color}}</td>
      <td> <a href="{{route('editpath', $pro->id)}}" class="btn btn-primary">Edit</a></td>
      <td> <a href="{{route('deletepath', $pro->id)}}"class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
    
</table>

</body>
</html>