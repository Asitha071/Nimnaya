
<html>
    <head>
        <title>
            Nimnaya
        </title>

        
        <link href="bootstrap/css1/bootstrap.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="bootstrap/css1/DT_bootstrap.css">

        <link rel="stylesheet" href="bootstrap/css1/font-awesome.min.css">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="bootstrap/css1/bootstrap-responsive.css" rel="stylesheet">

        <link href="bootstrap/style.css" media="screen" rel="stylesheet" type="text/css" />
        <!--sa poip up-->
        <script src="bootstrap/jeffartagame.js" type="text/javascript" charset="utf-8"></script>
        <script src="bootstrap/js1/application.js" type="text/javascript" charset="utf-8"></script>
        <link href="bootstrap/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
        <script src="bootstrap/lib/jquery.js" type="text/javascript"></script>
        <script src="bootstrap/src/facebox.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('a[rel*=facebox]').facebox({
                    loadingImage: 'src/loading.gif',
                    closeImage: 'src/closelabel.png'
                })
            })
        </script>
    </head>
    <?php

    function createRandomPassword() {
        $chars = "003232303232023232023456789";
        srand((double) microtime() * 1000000);
        $i = 0;
        $pass = '';
        while ($i <= 7) {

            $num = rand() % 33;

            $tmp = substr($chars, $num, 1);

            $pass = $pass . $tmp;

            $i++;
        }
        return $pass;
    }

    $finalcode = 'RS-' . createRandomPassword();
    ?>

    <script>
        function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;

            }

            var txtFirstNumberValue = document.getElementById('txt11').value;
            var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt22').value = result;
            }

            var txtFirstNumberValue = document.getElementById('txt11').value;
            var txtSecondNumberValue = document.getElementById('txt33').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt55').value = result;

            }

            var txtFirstNumberValue = document.getElementById('txt4').value;
            var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt5').value = result;
            }

        }
    </script>


    <script language="javascript" type="text/javascript">
        /* Visit http://www.yaldex.com/ for full source code
         and get more free JavaScript, CSS and DHTML scripts! */
        < !--Begin
        var timerID = null;
        var timerRunning = false;
        function stopclock() {
            if (timerRunning)
                clearTimeout(timerID);
            timerRunning = false;
        }
        function showtime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds()
            var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
            if (timeValue == "0")
                timeValue = 12;
            timeValue += ((minutes < 10) ? ":0" : ":") + minutes
            timeValue += ((seconds < 10) ? ":0" : ":") + seconds
            timeValue += (hours >= 12) ? " P.M." : " A.M."
            document.clock.face.value = timeValue;
            timerID = setTimeout("showtime()", 1000);
            timerRunning = true;
        }
        function startclock() {
            stopclock();
            showtime();
        }
        window.onload = startclock;
        // End -->
    </SCRIPT>

    <body>
     
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li><a href='{!! url('/admin'); !!}'><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
                            <li><a href="students.php"><i class="icon-group icon-2x"></i>Manage Students</a>  </li>
                            <li class="active"><a href="addstudent.php"><i class="icon-user icon-2x"></i>Add Student</a>     </li>

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
                        <i class="icon-table"></i> Add Exam
                    </div>
                    <ul class="breadcrumb">
                        <li><a href='{!! url('/admin'); !!}'>Dashboard</a></li> /
                        <li class="active">Add Exam</li>
                    </ul>


                    <div style="margin-top: -19px; margin-bottom: 21px;">
                        <a  href="index.php"><button class="btn btn-default btn-large" style="float: left;">
                                <i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
              
                            <center><h4><i class="icon-edit icon-large"></i> Add New Exam	</h4></center>
                            <hr><center>
                                <form name="examForm"  action="saveExam.php" method="post" enctype="multipart/form-data">
                                    <div id="ac">
                                        <input type="hidden" name="memi" value="<?php  ?>" />
                                        <span>Question 1: </span><input type="text" style="width:665px; height:60px;"  name="q1" Required /><br>
                                        <span>Answer 1 : </span><input type="text" style="width:465px; height:40px;"  name="q1a1" Required /><br>
                                        <span>Answer 2 : </span><input type="text" style="width:465px; height:40px;"  name="q1a2" Required /><br>
                                        <span>Answer 3 : </span><input type="text" style="width:465px; height:40px;"  name="q1a3" Required /><br>
                                        <span>Answer 4 : </span><input type="text" style="width:465px; height:40px;"  name="q1a4" Required /><br>
                                    </div>


                                    <div id="ac">
                                        <input type="hidden" name="memi" value="<?php  ?>" />
                                        <span>Question 2: </span><input type="text" style="width:665px; height:60px;"  name="q2" Required /><br>
                                        <span>Answer 1 : </span><input type="text" style="width:465px; height:40px;"  name="q2a1" Required /><br>
                                        <span>Answer 2 : </span><input type="text" style="width:465px; height:40px;"  name="q2a2" Required /><br>
                                        <span>Answer 3 : </span><input type="text" style="width:465px; height:40px;"  name="q2a3" Required /><br>
                                        <span>Answer 4 : </span><input type="text" style="width:465px; height:40px;"  name="q2a4" Required /><br>
                                    </div>

                                    <div id="ac">
                                        <input type="hidden" name="memi" value="<?php  ?>" />
                                        <span>Question 3: </span><input type="text" style="width:665px; height:60px;"  name="q3" Required /><br>
                                        <span>Answer 1 : </span><input type="text" style="width:465px; height:40px;"  name="q3a1" Required /><br>
                                        <span>Answer 2 : </span><input type="text" style="width:465px; height:40px;"  name="q3a2" Required /><br>
                                        <span>Answer 3 : </span><input type="text" style="width:465px; height:40px;"  name="q3a3" Required /><br>
                                        <span>Answer 4 : </span><input type="text" style="width:465px; height:40px;"  name="q3a4" Required /><br>
                                    </div>
                                    <div id="ac">
                                        <input type="hidden" name="memi" value="<?php  ?>" />
                                        <span>Question 4: </span><input type="text" style="width:665px; height:60px;"  name="q4" Required /><br>
                                        <span>Answer 1 : </span><input type="text" style="width:465px; height:40px;"  name="q4a1" Required /><br>
                                        <span>Answer 2 : </span><input type="text" style="width:465px; height:40px;"  name="q4a2" Required /><br>
                                        <span>Answer 3 : </span><input type="text" style="width:465px; height:40px;"  name="q4a3" Required /><br>
                                        <span>Answer 4 : </span><input type="text" style="width:465px; height:40px;"  name="q4a4" Required /><br>
                                    </div>
                                    <div id="ac">
                                        <input type="hidden" name="memi" value="<?php  ?>" />
                                        <span>Question 5: </span><input type="text" style="width:665px; height:60px;"  name="q5" Required /><br>
                                        <span>Answer 1 : </span><input type="text" style="width:465px; height:40px;"  name="q5a1" Required /><br>
                                        <span>Answer 2 : </span><input type="text" style="width:465px; height:40px;"  name="q5a2" Required /><br>
                                        <span>Answer 3 : </span><input type="text" style="width:465px; height:40px;"  name="q5a3" Required /><br>
                                        <span>Answer 4 : </span><input type="text" style="width:465px; height:40px;"  name="q5a4" Required /><br>
                                    </div>


                                    <div>
                                        <input type="submit" class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</input>
                                    </div>

                                </form>
                            </center>

                            <script src="js/jquery.js"></script>
                            <script type="text/javascript">
        $(function() {


            $(".delbutton").click(function() {

                //Save the link in a variable called element
                var element = $(this);

                //Find the id of the link that was clicked
                var del_id = element.attr("id");

                //Built a url to send
                var info = 'id=' + del_id;
                if (confirm("Sure you want to delete this Student? There is NO undo!"))
                {

                    $.ajax({
                        type: "GET",
                        url: "deletestudent.php",
                        data: info,
                        success: function() {

                        }
                    });
                    $(this).parents(".record").animate({backgroundColor: "#fbc7c7"}, "fast")
                            .animate({opacity: "hide"}, "slow");

                }

                return false;

            });

        });
                            </script>
                            </body>
                          
                            <?php
//	include('../connect.php');
//	$id=$_GET['id'];
//	$result = $db->prepare("DELETE FROM student WHERE id= :memid");
//	$result->bindParam(':memid', $id);
//	$result->execute();
//
//	header ("location: students.php");
                            ?>
                            </html>