@extends('layouts.app')

@section('content')
<br>
<br>
<center><div class="panel panel-default" style="width: 800px; height: 400px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<h3>Add Lesson</h3>

<form enctype="multipart/form-data" action="'url'=>'lesson/submit'" method="POST"  >
<div class="form-group" align="left">
<label style=" align=left;">select grade</label>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" ">
                               
                                   select grade <span class="caret"></span>
                                </a>
 <ul class="dropdown-menu" role="menu">
                                     <li>grade 6
                                    </li>
                                    <li>grade 7
                                    </li>
                                     <li>grade 8
                                    </li>
                                     <li>grade 9
                                    </li>
                                    <li>grade 10
                                    </li>
                                     <li>grade 11
                                    </li>
                                    </ul>
                                 

                                   

<div class="form-group" align="left">
{{Form::label('lesson','Lesson Name')}}
{{Form::text('lesson','',['class'=>'form-control','placeholder'=>'Enter lesson name'])}}
</div>
<label style=" align=left;">upload note</label>
 @if ($errors->has('title'))
   <p class="help-block">
  <strong>{{ $errors->first('title') }}</strong>
  </p>
   @endif
<input type="file" name="file">
 @if ($errors->has('file'))
   <p class="help-block">
  <strong>{{ $errors->first('file') }}</strong>
  </p>
   @endif
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit" class="pull-right btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Upload</button>
<div>{{Form::submit('Submit',['class'=>'btn btn-primary'])}}</div>
{!!Form::close()!!}
</div>
</form>
@endsection