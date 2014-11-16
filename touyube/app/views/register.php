<!-- Register page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<!-- Header Bar -->
<body style = "background-color:#F2F2F2">
   <div style ="background-color:#000000">
<div class="container">
  
<h1>TOUYUBE</h1>
</div>
</div>

  <nav class="navbar navbar-default" role="navigation">
  <div class="col-md-offset-1"><h3>Register</h3></nav>
  </div>

<div class="row" style="margin-top:10px"></div>


</div>

<!-- Register form -->
 <div class="container col-md-4 col-md-offset-2">
    <form class="form-horizontal" action='/register' method="POST">
  <fieldset>

    <div class="control-group">
      <!-- Username -->
     <h3>Yourname</h3>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="form-control input-lg" required =""autofocus="">
        <p class="help-block">Please provide your username</p>
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <h3>E-mail</h3>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="form-control input-lg" required =""autofocus="">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <h3>Password</h3>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="form-control input-lg" required =""autofocus="">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
    
    <div class="control-group">
      <!-- About-->
      <h3>About You</h3>
      <div class="controls">
        <input type="text" id="about" name="about" placeholder="" class="form-control input-lg" required =""autofocus="">
        <p class="help-block">Please provide something about you</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Contact-->
      <h3>Contact</h3>
      <div class="controls">
        <input type="text" id="contact" name="contact" placeholder="" class="form-control input-lg" required =""autofocus="">
        <p class="help-block">Please provide about how to contact you, tel. or facebook name</p>
      </div>
    </div>


    <div class="control-group">
      <!-- Submit button -->
      <div class="controls">
        <button type="submit" class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
</body>
</html>