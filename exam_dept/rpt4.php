<?php
$title = "Report 4";
include('header.php');
?>
<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>Daily Report 4</span>
</h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
<div class="blank-page">
<h2>Modules and Lecturer Information</h2>
<br>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th>Module Code</th>
<th>Module Description</th>
<th>Lecturer Name</th>
<th>Email</th>
<th>Date of Exam</th>
</tr>
</thead>
<tbody>
<?php
$stmt = $conn->prepare("SELECT Distinct(moduleleader.ModuleCode), ModDesc, name, email, DateExam 
FROM moduleleader, moduleinfo, staffinfo, examsetup 
WHERE moduleleader.ModuleCode = moduleinfo.ModCode
AND examsetup.ModuleCode = moduleinfo.ModCode
AND moduleleader.StaffNumber = staffinfo.StaffNumber
ORDER BY ModuleCode");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module){
?>
<tr>
<td>
<?php echo $module['ModuleCode']; ?>
</td>
<td>
<?php echo $module['ModDesc']; ?>
</td>
<td>
<?php echo $module['name']; ?>
</td>
<td>
<?php echo $module['email']; ?>
</td>
<td>
<?php echo $module['DateExam']; ?>
</td>
<?php
}
?>
</tbody>
</table>

</div>
</div>

<!--//faq-->
<!---->

<?php
include('footer.php');
?>