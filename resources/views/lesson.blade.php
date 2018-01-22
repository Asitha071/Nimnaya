@extends('layouts.app')

@section('content')
<br>
<br>
<center><div class="panel panel-default" style="width: 800px; height: 580px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<h3>Add chapter</h3>

<form enctype="multipart/form-data" action="/lesson" method="POST"  >
<div class="form-group" align="left" style="width:780px;">

    {{Form::label('grade', 'Select grade')}}
    <br>
     {{Form::select('grade', array('6' => 'Grade 6', '7' => 'grade 7','8' => 'grade 8','9' => 'Grade 9','10' => 'Grade 10'),'',['class'=>'form-control'])}};
</div>
                               <hr>

                                    <br>

<div class="form-group" align="left" >
{{Form::label('lesson','Lesson Name')}}
{{Form::text('lesson','',['class'=>'form-control','placeholder'=>'Enter lesson name'])}}

 <hr>
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
    <hr>
   <label style=" align=left;">upload video link</label>
   <input type="text" name="video" class="form-control file_title_c" id="video" placeholder="upload youtube video link">
   <br>
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit" class="pull-right btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Upload</button>
</div>
{!!Form::close()!!}
</div>
</form>
@endsection