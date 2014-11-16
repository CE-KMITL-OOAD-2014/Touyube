<?php

//Upload controller for control upload page
class UploadController extends BaseController {

	//getVideo function for get comment and video file from database
	public function getVideo (){
		$comments=DB::table('comments')->get();
		$vdo_ls=DB::table('uploads')->get();
		return View::make('video')->with('param', array(
			'comm'=>$comments, 
			'vdo_ls'=>$vdo_ls
		));

	}

	//uploadFile function for save video file to database
    public function uploadFile(){	
    		
			if (Input::hasFile('subject_file')) {
					$file 			 = Input::file('subject_file');
				 	$destinationPath = app_path().'/../public/subjectfile';
					$filename        = $file->getClientOriginalName();  
					$uploadSuccess   = $file->move($destinationPath, $filename);
			$subjects = new Upload;
			$subjects->videoname = $filename;
			$subjects->save();

			return Redirect::to('upload');
			}else{
				echo "<h2>UPLOAD=FAIL</h2>";
			}
			}	
			
	}


	