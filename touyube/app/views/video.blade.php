<!-- Video page -->
@extends('default')
@section('content')
<head>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src = "js/bootstrap.js"></script>
                  <script src = "js/jquery.min.js"></script>
    <!-- Custom CSS -->
    <link href="bootstrap/css/half-slider.css" rel="stylesheet">
   <style>
    .carousel-control {
      width:5%;
    }
   </style>
   <script>
    $(document.body).ready(function(){
      $('.carousel').carousel('pause');
    });
   </script>

</head>

<body>
  <!-- Show video -->
          <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
                  <div class="carousel-inner">
<!-- Wrapper for slides -->
                  <?php
                  $count = 0;
                  foreach($param['vdo_ls'] as $video){  
                    $count++;
                    ?>
                    <?php if($count % 3 == 1){ ?>
                    <div style="text-align: center;" class="item <?php echo $count == 1 ? 'active' : '';?>">
                    <?php } ?>
                      <video style="z-index:11" height="250px" style="margin: 0 auto;" width="350px" controls>
                        <source src="subjectfile/<?php echo $video->videoname; ?>" type="video/mp4" />
                      </video>
                    <?php if($count % 3 == 0){ ?></div><?php } ?>
                  <?php } ?>
                  </div>
                </div>                       

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div></div></div></div>
                 
<!-- Comment form -->        

<div class="well col-md-6 col-md-offset-3" style="height: 200px;overflow: auto;line-height: 25px;margin-top: 30px">

<?php
  foreach($param['comm'] as $comment){
    echo '
        '.$comment->username.' : '.$comment->textComment.'<br>
    ';
  }
  ?>
</div>


<!-- Input name and comment -->
<form name ="mentor" method ="post" action="/comment">
  <div class="well col-md-6 col-md-offset-3" >
  	<textarea class="form-control" rows="1" name ="mentid" placeholder="Input Your Name" required ="autofocus="""></textarea>
  	<p class="help-block">Please provide your username</p>
  	<textarea class="form-control" rows="2" name ="ment" placeholder="Input Your Comment" required ="autofocus="""></textarea>
    <p class="help-block">Please provide your comment</p>

	<br>

  <!-- Submit button -->
	<div class= "col-md-offset-10">

  	<button type="submit" class="btn btn-primary">POST</button>
  
  </div>
  <br>
</div>


  

</form>


	

  <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
@stop
