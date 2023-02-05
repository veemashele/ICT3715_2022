<?php
		$title = "Exam Department Profile";
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
			<div class="col-md-4 profile-bottom-img">
				<img src="../images/pro.png" alt="">
			</div>
			<div class="col-md-8 profile-text">
				<h6><?php echo $_SESSION["staffname"]; ?></h6>
				<table>
				<tr><td>Staff Number</td>  
				<td>:</td>  
				<td><?php echo $_SESSION["staffnum"]; ?></td></tr>
				
				<tr>
				<td>Email</td>
				<td> :</td>
				<td><?php echo $_SESSION["email"]; ?></td>
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