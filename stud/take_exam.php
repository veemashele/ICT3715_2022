<?php
$title = "Student Take Exam";
include('header.php');
?>
<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>Download Exam</span>
</h2>
</div>
<!--//banner-->

<div class="blank">
<div class="blank-page">
<h2>Download Exam(s)</h2>
<br>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th>Module Code</th>
<th>Module Description</th>
<th>Take Exam</th>
</tr>
</thead>
<tbody>
<?php 
$studNum =  $_SESSION["studentnumber"]; 
$stmt1 = $conn->prepare("SELECT ModuleCode 
FROM studentmodule 
WHERE StudentNumber = '$studNum'");
$stmt1->execute();
$modules1 = $stmt1->fetchAll();
foreach($modules1 as $module1){
//echo $module1['ModuleCode']. "<br/>"; 
}
$mod1 = $module1['ModuleCode'];
$stmt = $conn->prepare("SELECT examsetup.ModuleCode, ModDesc 
FROM examsetup, moduleinfo 
WHERE examsetup.ModuleCode = moduleinfo.ModCode 
AND DateExam = CURRENT_DATE
ORDER BY ModuleCode");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module)
{
?>
<tr>
<td><?php echo $module['ModuleCode']; ?></td>
<td><?php echo $module['ModDesc']; ?></td>
<td>
<a href="downloadPapers/<?php echo $module['ModuleCode'];?>_Exam.pdf" target="_blank">Download Exam | 
<?php echo $module['ModuleCode']; ?></a>
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