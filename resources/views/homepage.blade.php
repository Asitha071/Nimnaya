@extends('layouts.app')
@section('content')
    <br>
    <img src="/uploads/avatars/{{Auth::user()->avatar}}"
         style="width:80px; height:80px; float:left; border-radius: 50px; margin-right: 25px;"><h1>user profile</h1>
    <br>
    <p>Nimnaya is an educational platform which facilitates students and teachers connected through web and mobile
        technologies and can provide free class education in a virtual world. Students nowadays tend to use internet to
        search for educational videos to learn their relevant subjects.</p>

    <br>
@endsection

@section('sidebar')
    @parent

@endsection