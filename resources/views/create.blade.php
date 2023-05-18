<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
</head>
<body style=" background-color: #00ccaf"; class ="container1">
    
        <div class="container">
            <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
<h4>{{$title}}</h4>
            <form action="{{$url}}" method="post">
              @if(Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              @if(Session::has('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
              @endif
                @csrf
            <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name" value="{{$data['name']}}">
    <span class="text-danger">@error('name')*{{$message}} @enderror </span>
  </div>
  <div class="form-group">
    <label for="Email1">age</label>
    <input type="text" name="age" class="form-control" id="age" aria-describedby="emailHelp" placeholder="Age" value="{{$data['age']}}">
    <span class="text-danger">@error('email')*{{$message}} @enderror </span>
  </div>
  <div class="form-group">
    <label for="Password1">city</label>
    <input type="text" name="city" class="form-control" id="city" placeholder="City" value="{{$data['city']}}" >
    <span class="text-danger">@error('password')*{{$message}} @enderror </span>
  </div>
  <br>
  <button type="submit" class="btn btn-block btn-primary">Submit</button>
  
 
</form>

            </div>
        </div>

  
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>