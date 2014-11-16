@extends('default')
@section('content')
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src = "/js/bootstrap.js"></script>
<script src = "/js/jquery.min.js"></script>

</head>
<body style = "background-color:#F2F2F2">
	<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">TOUYUBE</a>

     </li>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/interface"><i class="glyphicon glyphicon-home"></i> Main</a></li>
        <li><a href="/video"><i class="glyphicon glyphicon-facetime-video"></i> Video</a></li>
      <li><a href="/upload"><i class="glyphicon glyphicon-cloud-upload"></i> Upload</a></li>
 

        <li><a href="/profile"><i class="glyphicon glyphicon-user"></i>{{$name->username}}</a></li></a>

        <li><a href="/"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->



    
      
  <script src = "/js/bootstrap.js"></script>
  <script src = "/js/jquery.min.js"></script>
      
		

      
    
    @yield('content')
</body>
</html>
@stop