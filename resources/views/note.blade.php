 @extends('layouts.app')
@section('content')

<style type="text/css">
  .help-block{
    color: red;
  }
</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<br>


<center><div class="panel panel-default" style="width: 600px; height: 200px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<div class="panel-heading" style="color:#190abd"><b>upload a note</b></div>

 <div class="panel-body">
<form enctype="multipart/form-data" action="/note" method="POST"  >

  
 <input type="text" name="title" class="form-control file_title_c" id="title_id" placeholder="Enter title">
 <br>
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
</form>
<script>
  @if(Session::has('message'))
  var type = "{{Session::get('alert-type','info')}}";
  switch(type){
    case 'success':
    toastr.success("{{Session::get('message')}}");
    break;
    case 'error':
    toastr.error("{{Session::get('message')}}");
    break;
  }
@endif
</script>
</div>
</div>



@endsection

@section('sidebar')
@parent

@endsection