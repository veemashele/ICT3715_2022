<?php
$title = "Report 2";
include('header.php');
?>
<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>Daily Report 2</span>
</h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
<div class="blank-page">
<h2>Count # of Students Registered per Module</h2>
<br>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th>Module Code</th>
<th>Module Description</th>
<th>No of Students</th>
</tr>
</thead>
<tbody>
<?php
$stmt = $conn->prepare("SELECT studentmodule.ModuleCode, ModDesc, 
count(studentmodule.ModuleCode) as NoOfStudentRegistered 
FROM studentmodule, moduleinfo
WHERE studentmodule.ModuleCode = moduleinfo.ModCode
GROUP BY studentmodule.ModuleCode
HAVING COUNT(ModuleCode) > 1");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module)
{
?>
<tr>
<td>
<?php echo $module['ModuleCode']; ?>
</td>
<td>
<?php echo $module['ModDesc']; ?>
</td>
<td>
<?php echo $module['NoOfStudentRegistered']; ?>
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