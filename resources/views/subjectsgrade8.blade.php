@extends('layouts.app')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h1><span class="glyphicon glyphicon-hand-right"></span> Grade 8 subjects</h1>
</div>
<div class="row">

<div class="col-sm-4">
<div class="col-md-10 col-md-offset-3">
<h3>
<div>
<a href='{!! url('/about'); !!}'>Maths</a> 
</div>
<br>
<div>
<a href='{!! url('/about'); !!}'>Science</a> 
</div>
<br>
<div>
<a href='{!! url('/about'); !!}'>Sinhala</a> 
</div>
<br>
<div>
<a href='{!! url('/about'); !!}'>English</a> 
</div>
<br>
<div>
<a href='{!! url('/about'); !!}'>subject</a> 
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
