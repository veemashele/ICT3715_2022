<?php
$title = "Exam Department Dashboard";
include('header.php');
?>

<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>Dashboard</span>
</h2>
</div>

<div class="blank">
<div class="blank-page">
<div id="content" style="text-align: center;">
Welcome <?php echo $_SESSION["staffname"]; ?>
<br/><br/>
You work as an Exam Department Staff
<br/><br/>
Here is a list of what you can do:<br/><br/>
1. View Daily Reports <br/>
2. View Weekly Reports <br/>
3. View MIS Reports <br/>
4. Many More...<br/>
<br/>
</div>
</div>
</div>

<?php
include('footer.php');
?>