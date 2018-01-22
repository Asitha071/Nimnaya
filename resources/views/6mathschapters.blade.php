@extends('layouts.app')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h1><span class="glyphicon glyphicon-hand-right"></span> Grade 6 maths geometry chapters</h1>
</div>
<div class="row">

<div class="col-sm-4">
<div class="col-md-10 col-md-offset-3">
<h3>
<div>
<a href='{!! url('/about'); !!}'>chapter 1</a> 
</div>
<br>
<div>
<a href='{!! url('/about'); !!}'>chapter 2</a> 
</div>
<br>
<div>
<a href='{!! url('/about'); !!}'>chapter 3</a> 
</div>
<br>
<div>
<a href='{!! url('/about'); !!}'>chapter 4</a> 
</div>
<br>
<div>
<a href='{!! url('/about'); !!}'>chapter 5</a> 
</div>
<br>
</h3>
</div>
</div>
<div class="col-sm-4">
<img src="/uploads/avatars/icons/image21.jpg" style="width:780px; height:380px; align:right;">

</div>
</div>





@endsection
@section('sidebar')
@parent

@endsection
