@extends('default')
@section('content')
  <!-- Profile Page -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<div class="row" >
		<div class="text-center" style ="margin-top:10px;">
 		
                    <h1><strong>{{$name->username}}</strong></h1>
                    <p><strong>About: </strong>{{$name->about}}</p>
                    <p><strong>Contact: </strong>{{$name->contact}}</p>
                    
                </div>             

            </div>            
     	</div>
        <form action='/edit' method="get">
        <div class="control-group text-center">
      <!-- Edit profile button -->
      <div class="controls">
        <button class="text-center" type="submit" class="btn btn-success">Edit Profile</button>
      </div>
    </div>
</form>
    </div>
@stop
