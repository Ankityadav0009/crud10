<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
</head>
<style>
            .container1 {
  width: 1278px;
  height: 574px;
  margin: 50px;                                                 
  display: flex;
  justify-content: center;
  align-items: center;
}
        </style>
        <body>

           
            <div>

            
            <table class="table " >
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
      <td>{{$item['city']}}</td>
      @endforeach
    </tr>
    
  </tbody>
</table>
</div>
            
        
        </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>