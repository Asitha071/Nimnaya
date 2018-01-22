@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius: 50px; margin-right: 25px; ">
<div class="col-md-10 col-md-offset-2">
<h2>{{$user->name}}'s profile</h2>
<div class="panel panel-default" style="width: 400px; height: 200px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<div class="panel-heading">Update Profile Picture</div>
 <div class="panel-body">

<form enctype="multipart/form-data" action="/profile" method="POST"  >


<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit" class="pull-right btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Update</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<img src="/uploads/avatars/wallpaper.jpg" style="width:1350px; height:500px;">


@endsection