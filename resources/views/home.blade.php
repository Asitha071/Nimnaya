@extends('layouts.app')
@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/pic1.jpg" alt="..." style="width: 100%; height: 100%;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="/images/pic2.jpg" alt="..." style="width: 100%; height: 100%;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
   <div class="item">
      <img src="/images/pic3.jpg" alt="..." style="width: 100%; height: 100%;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class=""panel panel-primary" >
<div class="row">
 <div class="panel-heading"><center><h3 style="background:  #746666; color: #000"><br><b>- our services for you -</b><br><br></h3></center></div>
    <div class="panel-body">
    <div class="col-sm-4">
<div class="well" style="background:#0f345e; color: #d6d6d6">
<div class="col-md-5">
<img src="/uploads/avatars/icons/press.png" style="width:80px; height:80px;">
 </div>
     <h4>offering Reading materials for each subject</h4>
    
     <br>
    </div>
    </div>
    

    <div class="col-sm-4">
    <div class="well" style="background:  #5c063f; color: #d6d6d6">
    <div class="col-md-5">
<img src="/uploads/avatars/icons/32226-200.png" style="width:80px; height:80px;">
 </div>
       <h4>uploading video tutorials for every lesson</h4>
       <br>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="well" style="background:    #9289d4; color: #d6d6d6">  
     <div class="col-md-5">
<img src="/uploads/avatars/icons/Final.png" style="width:80px; height:80px;">
 </div>
        <h4> providing test papers for every chapter </h4>
        <br>
    </div>
    </div>
  </div>
  </div>
  </div>
  <div class=""panel panel-primary" >
<div class="row">
 
    <div class="panel-body">
    <div class="col-sm-4">
<div class="well" style="background:#8d1414; color: #d6d6d6">
<div class="col-md-5">
<img src="/uploads/avatars/icons/251.jpg" style="width:80px; height:80px;">
 </div>
     <h4>conveying conversation about subject matters</h4>
    
     <br>
    </div>
    </div>
    

    <div class="col-sm-4">
    <div class="well" style="background:    #b6572e; color: #d6d6d6">
    <div class="col-md-5">
<img src="/uploads/avatars/icons/1.png" style="width:80px; height:80px;">
 </div>
       <h4>issueing progress reports for each subject</h4>
       <br>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="well" style="background:      #04a12b; color: #d6d6d6">  
     <div class="col-md-5">
<img src="/uploads/avatars/icons/office-clipart-exam-paper-5.png" style="width:80px; height:80px;">
 </div>
        <h4>online paper marking mechanism</h4>
        <br>
    </div>
    </div>
  </div>
  </div>
  </div>
<h1><span class="glyphicon glyphicon-home"></span> Home</h1>
<p>Nimnaya is an educational platform which facilitates students and teachers connected through web and mobile technologies and can provide free class education in a virtual world. Students nowadays tend to use internet to search for educational videos to learn their relevant subjects. And the teachers tend to upload the educational videos for the students to refer. But this is not done in a regular manner. They have failed to categorize the educational resources in internet based on the subjects, lessons and chapters. And the students are unable to ask questions regarding their doubts when they learn. And also, they are incapable of practice what they learnt by answering questions related to the lesson and chapters. Therefore, a web and mobile based educational platform for which most of the students and teachers have access to, could easily overcome these issues.</p>
<div>
<button> <a href='{!! url('/about'); !!}'>About</a> </button>
</div>

@endsection
@section('sidebar')
@parent

@endsection
