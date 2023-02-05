<?php
$title = "Report 1";
include('header.php');
?>
<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>Daily Report 1</span>
</h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
<div class="blank-page">
<h2>View Modules</h2>
<br>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th>Module Code</th>
<th>Module Description</th>
<th>Module Date</th>
</tr>
</thead>
<tbody>
<?php
$stmt = $conn->prepare("SELECT examsetup.ModuleCode, ModDesc, DateExam 
FROM examsetup, moduleinfo 
WHERE examsetup.ModuleCode = moduleinfo.ModCode
ORDER BY ModuleCode");
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
<?php echo $module['DateExam']; ?>
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