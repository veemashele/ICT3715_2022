<?php
$title = "View Students";
include('header.php');
?>
<!--banner-->	
<div class="banner">
<h2><a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>View Students Info</span></h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
<div class="blank-page">
<h2>Students Information</h2>
<br>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th>Student Number</th>
<th>Full Name</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<?php
$staffNum = $_SESSION["staffnumber"];

$stmt = $conn->prepare("SELECT studentinfo.studentnumber, studentname, email
FROM studentinfo, moduleleader, studentmodule 
WHERE moduleleader.StaffNumber = $staffNum
AND moduleleader.ModuleCode = studentmodule.ModuleCode
AND studentmodule.StudentNumber = studentinfo.studentnumber
ORDER BY studentname, studentinfo.studentnumber");
$stmt->execute();
$students = $stmt->fetchAll();
foreach($students as $student)
{
?>
<tr>
<td>
<?php echo $student['studentnumber']; ?>
</td>
<td>
<?php echo $student['studentname']; ?>
</td>
<td>
<?php echo $student['email']; ?>
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