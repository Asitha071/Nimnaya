@extends('layouts.app')
@section('content')
<br>
<center><div class="panel panel-default" style="width: 800px; height: 600px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<h1 ><span class="glyphicon glyphicon-phone-alt"></span> Contact</h1>
<div class="panel-body">
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group" align="left">
    	{{Form::label('name', 'name')}}
    	{{Form::text('name','',['class'=>'form-control','placeholder'=> 'Enter name'])}}
    </div>
    <div class="form-group" align="left">
    	{{Form::label('email', 'E-Mail Address')}}
    	{{Form::text('email', '',['class'=>'form-control','placeholder'=> 'Enter email'])}}
    </div>
    <div class="form-group" align="left">
    	{{Form::label('message', 'Message')}}
    	{{Form::textarea('message', '',['class'=>'form-control','placeholder'=> 'Enter message'])}}
    </div>
    <div>
    	{{Form::submit('submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
    </div>
    </div>



</center>


@endsection