<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .container {
  width: 1278px;
  height: 574px;
  margin: 50px;                                                 
  display: flex;
  justify-content: center;
  align-items: center;
  background-color:orange;
}
        </style>
        
    </head>
    <body class="antialiased">
        <div  class='container'>
    <a href="login"><button type="button" class="btn btn-primary btn-lg">login user managment </button></a> &nbsp
    <a href="crud"><button type="button" class="btn btn-primary btn-lg">crud operation</button></a>
    </div>

    </body>
</html>
