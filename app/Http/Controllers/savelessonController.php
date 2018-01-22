<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Notifications\ConfirmThread;


class savelessonController extends Controller
{
     public function submit(Request $request,Lesson $lesson){
     	$this->validate($request,[
     		'name'=>'required',
     		'lesson'=>'required',
     		'email'=>'required']);
     	$lesson = new Lesson;
     	$lesson->name = $request->input('name');
     	$lesson->lesson = $request->input('lesson');
     	$lesson->email = $request->input('email');

    	$lesson->save();
         auth()->user()->notify(new ConfirmThread($lesson));
    	return redirect('/homepage')->with('success','Added new lesson successfully!');


    }
    public function getLessons(){
    	$lesson = Lesson::all();
    	return view('addedlessons')->with('lesson',$lesson);
    }

}
