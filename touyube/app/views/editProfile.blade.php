@extends('default')
@section('content')
<!-- Edit profile page -->
<div class="container col-md-4 col-md-offset-2">
    <form class="form-horizontal" action='/editprofile' method="post">
  <fieldset>

    <!-- Edit About you -->
	<div class="control-group">
     <h3>About</h3>
      <div class="controls">
        <input type="text" id="editabout" name="editabout" placeholder="About you" class="form-control input-lg" required =""autofocus="">
        <p class="help-block">Provide your detail.</p>
      </div>
    </div>

    <!-- Edit contact -->
    <div class="control-group">
     <h3>Contact</h3>
      <div class="controls">
        <input type="text" id="editcontact" name="editcontact" placeholder="" class="form-control input-lg" required =""autofocus="">
        <p class="help-block">Provide your contact, tel. or facebook name.</p>
      </div>
    </div>


    <!-- Submit button -->
     <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn btn-success">Edit</button>
      </div>
    </div>
    </fieldset>
  </form>

@stop