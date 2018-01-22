<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Note;
use Validator;
use Redirect;
use Notification;

class noteController extends Controller
{

  //create new note
   public function submit(){
   	
 $title=Input::get('title');
    $file = Input::file('file');
    
     $rules  = array('title' =>'required' ,'file' =>'required|max:10000|mimes:doc,docx,pdf,jpeg,png,jpg' );
     	$validator=Validator::make(Input::all(),$rules);

      if ($validator->fails()) {
      $messages=$validator->messages();

      return Redirect::to('note')->withInput()->withErrors(
        $validator);
      }
      elseif ($validator->passes()) {
        //echo "success validator";
if (Input::file('file')->isValid()) {
 $extension=Input::file('file')->getClientOriginalExtension();
 $filename = rand(11111,99999).'.'.$extension;


 $destinationPath = 'uploadednotes';


 $file->move($destinationPath, $filename);

 $data=array('title'=>$title,'file'=>$filename,);

Note::insert($data);

 $notification = array('message'=>'file Uploaded successfully!','alert-type'=>'success');
 return Redirect::to('note')->with($notification);

}
else{
  $notification = array('message'=>'file is not valid!','alert-type'=>'error');
 return Redirect::to('note')->with($notification);

}




      }
  }
   	}
  

 