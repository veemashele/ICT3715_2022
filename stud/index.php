<?php
$title = "Student Dashboard";
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
<!--//banner-->
<!--faq-->
<div class="blank">
<div class="blank-page">
<div id="content" style="text-align: center;">
Welcome <?php echo $_SESSION["studentname"]; ?>
<br/><br/>
You are currently registered for :<br/>
<?php 
$studNum =  $_SESSION["studentnumber"]; 
$stmt = $conn->prepare("SELECT ModuleCode 
FROM studentmodule 
WHERE StudentNumber = '$studNum'");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module){
echo $module['ModuleCode']. "<br/>"; 
}
?>
</div>
</div>
</div>
<!---->

<?php
include('footer.php');
?>