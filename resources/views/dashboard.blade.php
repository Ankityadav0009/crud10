<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
</head>
<body style=" background-color: green";>
<div class="container" >
            <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px; background-color: coral;">
<h4>wellcome to dashboard {{$data->name}}</h4>
           <hr>
            <table class="table">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Action </th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td><a href="logout">Logout</a></td>
                </tr>
            </tbody>
            </table>
  </div>

            </div>
        </div>


        <div class="container" >
            <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px; background-color: coral;">
<h4>crud operation Here</h4>

<a href="insert"><button type="submit" class="btn btn-block btn-primary">create user</button></a>

           <hr>
           
  </div>

            </div>
        </div>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>