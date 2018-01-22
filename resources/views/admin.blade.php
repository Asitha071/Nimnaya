@include('navfixed')

<!DOCTYPE html>
<html>
<head>
<title>
Nimnaya
</title>
 <link href="bootstrap/css1/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="bootstrap/css1/DT_bootstrap.css">

  <link rel="stylesheet" href="bootstrap/css1/font-awesome.min.css">
    <style type="text/css">

      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="bootstrap/css1/bootstrap-responsive.css" rel="stylesheet">
<link href="bootstrap/style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="bootstrap/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="bootstrap/lib/jquery.js" type="text/javascript"></script>
<script src="bootstrap/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'bootstrap/src/loading.gif',
      closeImage   : 'bootstrap/src/closelabel.png'
    })
  })
</script>

<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
</head>
<body>


<a href="../index.php">Logout</a>


	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li class="active"><a href='{!! url('/admin'); !!}'><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
			<li><a href="students.php"><i class="icon-group icon-2x"></i>Manage Students</a>       </li>
			<li><a href='{!! url('/addstudent'); !!}'><i class="icon-user icon-2x"></i>Add Student</a>         </li>
      <li><a href='{!! url('/addexam'); !!}'><i class="icon-group icon-2x"></i>Add Exam</a>         </li>


			<br><br>
			<li>
			 <div class="hero-unit-clock">

			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>

				</ul>
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 44px 'Aleo'; color:#722290;"><center>Nimnaya</center></font>
<div id="mainmain">



<a href="students.php"><i class="icon-group icon-2x"></i><br> Students</a>
<a href='{!! url('/addstudent'); !!}'><i class="icon-user icon-2x"></i><br> Add Student</a>
<a href='{!! url('/addexam'); !!}'><i class="icon-user icon-2x"></i><br> Add Exam</a>
<a href="../index.php"><font color="red"><i class="icon-off icon-2x"></i></font><br> Logout</a>

<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>

</html>
