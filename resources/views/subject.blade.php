@extends('layouts.app')
@section('content')

<br>
<br>
<center><div class="panel panel-default" style="width: 300px; height: 200px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
    <div class="panel-heading" style="color:#190abd"><b>Assign your subject now</b></div>
    
    <form class="form-horizontal" method="POST" >
                        {{ csrf_field() }}
<br>
                       
 <div class="panel-body">
     

 <div class="form-group" align="center">
    {{Form::label('subject', 'Select your Subject here')}}
    <br>
     {{Form::select('subject', array('maths' => 'Maths', 'science' => 'Science','geography' => 'Geography','health' => 'Health','history' => 'History'))}};
</div>
                            <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span>  
                                    Assign
                                </button>
                                </div>
    </div>

</form>

@endsection