<?php
$title = "Report 3";
include('header.php');
?>
<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>Daily Report 3</span>
</h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
<div class="blank-page">
<h2>Count # of Students</h2>
<br>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th>Student #</th>
</tr>
</thead>
<tbody>
<?php
$stmt = $conn->prepare("SELECT count(*) as NumberOfStudent
FROM studentinfo");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module)
{
?>
<tr>
<td>
<?php echo $module['NumberOfStudent']; ?>
</td>
<?php
}
?>
</tbody>
</table>
<br>
<h2>Count # of Lecturer</h2>
<br>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th>Lecturer #</th>
</tr>
</thead>
<tbody>
<?php
$stmt = $conn->prepare("SELECT count(*) as NumberOfLecturer
FROM staffinfo");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module)
{
?>
<tr>
<td>
<?php echo $module['NumberOfLecturer']; ?>
</td>
<?php
}
?>
</tbody>
</table>
<br>
<h2>Count # of Module</h2>
<br>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th>Module #</th>
</tr>
</thead>
<tbody>
<?php
$stmt = $conn->prepare("SELECT count(*) as NumberOfModule
FROM moduleinfo");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module)
{
?>
<tr>
<td>
<?php echo $module['NumberOfModule']; ?>
</td>
<?php
}
?>
</tbody>
</table>
</div>

</div>
</div>

<!--//faq-->
<!---->

<?php
include('footer.php');
?>