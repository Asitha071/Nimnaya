<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;


class homepageController extends Controller
{

    public function index()
    {

        $user = User::select('name', 'email', 'dob', 'usertype')->whereusertype('student')
            ->get();

        $data = ['user' => $user];
        return view('assignSubject', $data);

    }

}