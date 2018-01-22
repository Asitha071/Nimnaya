<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Lesson;
use Illuminate\Support\Facades\Input;
use App\Note;
use Validator;
use Redirect;
use Notification;

class LessonController extends Controller
{
    public function submit(){
    	


    	$grade=Input::get('grade');
    	$lesson=Input::get('lesson');
    $file = Input::file('file');
    $video=Input::get('video');
    
     $rules  = array('grade' =>'required' ,'lesson' =>'required' ,'file' =>'required|max:10000|mimes:doc,docx,pdf,jpeg,png,jpg','video' =>'required' );
     	$validator=Validator::make(Input::all(),$rules);

      if ($validator->fails()) {
      $messages=$validator->messages();

      return Redirect::to('lesson')->withInput()->withErrors(
        $validator);
      }
      elseif ($validator->passes()) {
        //echo "success validator";
if (Input::file('file')->isValid()) {
 $extension=Input::file('file')->getClientOriginalExtension();
 $filename = rand(11111,99999).'.'.$extension;


 $destinationPath = 'uploadednotes';


 $file->move($destinationPath, $filename);

 $data=array('grade'=>$grade,'lesson'=>$lesson,'file'=>$filename,'video'=>$video,);

Lesson::insert($data);
 return redirect('lesson')->with('success','lesson added successfully');

    
}
}
}
}
   

