<!DOCTYPE html>

<!-- Login page -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </head>

  <body style = "background-color:#F2F2F2">

      <div style ="background-color:#000000">
    <!-- Header Bar -->
  <div class="container">
<h1>TOUYUBE</h>
<div class="row" style="margin-top:10px"></div>
</div></div>

    <!-- Login form -->
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

        <form action ='/willinterface' role="form" method="post">

            <fieldset>

              <h2>Please Sign In</h2>
        
                <hr class="colorgraph">
                <!-- Input email for login -->
                <div class="form-group">
                    <input type="email" name="inputemail" id="inputemail" class="form-control input-lg" placeholder="Email Address" required =""autofocus="">
                </div>
                <!-- Input password for login -->
                <div class="form-group">
                    <input type="password" name="inputpassword" id="inputpassword" class="form-control input-lg" placeholder="Password" required =""autofocus="">
                </div>
          
                <hr class="colorgraph">
                <div class="row">
                    <!-- Login button -->
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                    </div>
                    <!-- Register button -->
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="/register" class="btn btn-lg btn-primary btn-block">Register</a>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
</div>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>