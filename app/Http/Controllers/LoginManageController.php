<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Database\Query\Builder;

class LoginManageController extends Controller
{
    public function login(Request $request){
       

        if (Auth::attempt([

'email'=>$request->email,
'password'=>$request->password,

            ])) {
            $user=User::where('email',$request->email)->first();

        if($user->is_teacher()) {

           return redirect()->route('homepage');
        }
           return redirect()->route('studenthome');
        }
        return redirect()->back();
    }
}
