<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class subjectController extends Controller
{
    public function submit(Request $request){
    	
    	//create new msg
    	$subject = new Subject;
    	$subject->subject = $request->input('subject');
    
    	//save msg
    	$subject->save();
    	//redirect
    	return redirect('homepage')->with('success','you have assigned successfully');
}
}