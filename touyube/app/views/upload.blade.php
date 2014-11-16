<!-- Upload page -->
@extends('default')
@section('content')
<head>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">

</head>

<body>

<h2 class="intro-text text-center">Show your video</h2><br>

<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive" src="img/slide-1.jpg" >
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="img/slide-2.jpg" >
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div><br>

<!-- Button trigger modal -->
<div class="text-center">
<button class="text-center" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  UPLOAD
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload your video</h4>
      </div>
      <div class="modal-body">
       
<!--upload-->

       <form name ="up" method ="post" action="/upup" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputFile">Video input</label>
    <input type="file" name="subject_file" id="subject_file">
    <p class="help-block">Example .mp4 .mov </p>

    <button class="text-center" type="submit" class="btn btn-primary">UPLOAD</button>
    
      </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br>
</div>

<script>
  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
  
</script>


  <script>
    $('.carousel').carousel({
        interval:  2000 //changes the speed
    })
    </script>
    
    <script src = "/js/bootstrap.js"></script>
    <script src = "/js/jquery.min.js"></script>
    
  </div>
  </div>
</form>

    </div>
  </div>
</div>

 </body>

@stop

