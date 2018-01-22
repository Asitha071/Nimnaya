<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class fetchusertypeController extends Controller
{
     public function subject()
   {


   	$user = Auth::user();
   	$user = User ::select('name','email','dob','usertype')->whereusertype('teacher');
   return view('subject',array('user'=>Auth::user()));
   }
}
