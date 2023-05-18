<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
</head>
<body >
       <br>
      <a href="add"><button class='btn btn-primary'>Add User</button></a>
     <table class="table" style=" border:1px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item )
    <tr>
      <th>{{$item['id']}}</th>
      <td>{{$item['name']}}</td>
      <td>{{$item['age']}}</td>
      <td>{{$item['city']}}</td>
      <td><a href="{{url('delete')}}/{{$item['id']}}"><button class='btn btn-primary'>Delete</button></a>
      <a href="{{route('user.update',['id'=>$item->id])}}"><button class='btn btn-primary'>Update</button></a></td>
    
      @endforeach
    </tr>
    
  </tbody>
</table>
</body>
</html>