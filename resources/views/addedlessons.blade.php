@extends('layouts.app')
@section('content')
<h1>Lessons</h1>
<div class="panel panel-default" style=" padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
@if(count($lesson)>0)
@foreach($lesson as $lesson)

<ul class="list-group">
<li class="list-group-item">Lesson Name : {{$lesson->lesson}}
</li>
	
</ul>

@endforeach
@endif
</div>
@endsection
@section('sidebar')
@parent

@endsection