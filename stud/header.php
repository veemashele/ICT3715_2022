<?php
session_start();
include('../include/conn.php');

// Validating Session
if(strlen($_SESSION['email'])==0){
header('location:../stud_login.php');
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>OEP | <?php echo $title;?></title>
<link rel="shortcut icon" type="image/ico" href="../images/favicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"> </script>
<!-- Mainly scripts -->
<script src="../js/jquery.metisMenu.js"></script>
<script src="../js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="../css/custom.css" rel="stylesheet">
<script src="../css/custom.js"></script>
<script src="../js/screenfull.js"></script>
<script>
$(function () {
$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
if (!screenfull.enabled) {
return false;
}
$('#toggle').click(function () {
screenfull.toggle($('#container')[0]);
});
});
</script>
</head>

<body>
<div id="wrapper">
<!----->
<nav class="navbar-default navbar-static-top" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<h1><a class="navbar-brand" href="index.php">OEP</a></h1>         
</div>
<div class=" border-bottom">
<div class="full-left">
<div class="clearfix"> </div>
</div>
<!-- Brand and toggle get grouped for better mobile display -->

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="drop-men" >
<ul class=" nav_1">

<li class="dropdown">
<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown">
<span class=" name-caret">
<?php echo $_SESSION["studentname"]; ?>
<i class="caret"></i></span><img src="../images/pro.png"></a>
<ul class="dropdown-menu " role="menu">
<li><a href="calendar.php"><i class="fa fa-calendar"></i>Calender</a></li>
<li><a href="prof.php"><i class="fa fa-user"></i>Profile</a></li>
<li><a href="take_exam.php"><i class="fa fa-question-circle"></i>Exam</a></li>
<li><a href="logout.php"><i class="fa fa-sign-in"></i>Logout</a></li>
</ul>
</li>

</ul>
</div><!-- /.navbar-collapse -->
<div class="clearfix">
</div>

<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
<ul class="nav" id="side-menu">

<li>
<a href="index.php" class=" hvr-bounce-to-right">
<i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
</li>

<li>
<li><a href="calendar.php" class=" hvr-bounce-to-right"> <i class="fa fa-calendar nav_icon"></i>Calendar</a></li>
<li><a href="take_exam.php" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Take Exam</a></li>
<li><a href="upload.php" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Upload Exam</a></li>
<li><a href="prof.php" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Profile</a></li>
<li><a href="logout.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Logout</a></li>
</li>
</div>
</div>
</nav>
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main">
