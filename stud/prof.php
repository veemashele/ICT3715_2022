<?php
$title = "Student Profile";
include('header.php');
?>
<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>Profile</span>
</h2>
</div>
<!--//banner-->
<!--gallery-->
<div class=" profile">
<div class="profile-bottom">
<h3><i class="fa fa-user"></i>Profile</h3>
<div class="profile-bottom-top">
<div class="col-md-6 profile-bottom-img">
<img src="../images/pro.png" alt="">
</div>
<div class="col-md-10 profile-text">
<br/><h6><?php echo $_SESSION["studentname"]; ?></h6>
<table>
<br/>
<tr><td>Student Number</td>  
<td>:</td>  
<td><?php echo $_SESSION["studentnumber"]; ?></td></tr>
<tr>
<td>Email</td>
<td>:</td>
<td><?php echo $_SESSION["email"]; ?></td>
</tr>
<tr>
<td>Registered Module(s) Code</td>
<td> :</td>
<td><?php 
$studNum =  $_SESSION["studentnumber"]; 
$stmt = $conn->prepare("SELECT ModuleCode 
FROM studentmodule 
WHERE StudentNumber = '$studNum'");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module){
	echo $module['ModuleCode']. "<br/>"; 
}
?></td>
</tr>

</tr>
</table>
</div>
<div class="clearfix"></div>
</div>
<div class="profile-bottom-bottom">
<div class="col-md-6 profile-fo">
<a href="#" class="pro1"><i class="fa fa-user"></i>View Profile</a>
</div>
<div class="col-md-6 profile-fo">
<a href="index.php"><i class="fa fa-cog"></i>Dashboard</a>
</div>
<div class="clearfix"></div>
</div>


</div>
</div>


<?php
include('footer.php');
?>