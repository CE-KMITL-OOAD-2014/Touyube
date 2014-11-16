<?php

//Post controller for control about post comment
class PostController extends BaseController {

    //postComment function for save username and textcomment to database
    public function postComment(){
    	$comment = new Comment();
    	$comment->username = Input::get('mentid');
    	$comment->textComment = Input::get('ment');
    	$comment->save();
         return Redirect::route('video-view');
    }
}