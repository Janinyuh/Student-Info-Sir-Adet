<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'session.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Umbrella Academy Grades</title>
	<link rel="stylesheet" href="dashboard.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
	<section id="header">
		<div class="header-box">
			<span></span>
			<img src="../imgs/TEXT-LOGO-l2-Small.png" class="logo">

		</div>
	
		
			<div class="Ayuda">
				<h1>GRADES</h1>
			</div>
	</section>

	<div class="button-container">    
            <a href="logout.php">Logout</a>
    </div>

<br><br>
 <!--other table-->
<h2 id="title2">My 	Information</h2>
<div class="scrollable">
<table class="table2">
	 <tbody>
	 				<th>ID Number</th>
	 				<th>NAME</th>
	 				<th>Gender</th>
	 				<th>Course</th>
	 				<th>Year</th>
					<?php
						require '../connection/connections.php';
						$query = $conn->query("SELECT idnumber, name, gender, course, cyear  FROM `information` WHERE idnumber = ('$username');") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
							
						<tr>
							<td><?php echo $fetch['idnumber']?></td>
							<td><?php echo $fetch['name']?></td>
							<td><?php echo $fetch['gender']?></td>
							<td><?php echo $fetch['course']?></td>
							<td><?php echo $fetch['cyear']?></td>
						</tr>
					<?php
						}
					?>	
					</tbody>

</table>
</div>
</div>
<!-- end table ---->
<!-- start table ---->
<div class="container-table">
	<table class="table1">		
  <tr>
    <th>Subject Codes</th>
    <th>Subject Name</th>
    <th>Grade</th>
  </tr>
  <tbody>
					<?php
						require '../connection/connections.php';
						$query = $conn->query("SELECT scode, sname, sgrade FROM `grades` WHERE idnumber = ('$username');") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['scode']?></td>
							<td><?php echo $fetch['sname']?></td>
							<td><?php echo $fetch['sgrade']?></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
</table>






	<script>
		var menu = document.getElementById("menu");
		var sideNav = document.getElementById("sideNav");

		sideNav.style.right='-250px';
		menu.onclick = function(){
			if(sideNav.style.right=='-250px'){
				sideNav.style.right ="0";
			}
			else{
				sideNav.style.right = "-250px";
			}
		}
	</script>

	<section id="footer">
	<div class="container footer-row">
		<hr>
		<div class="footer-left-col">
			<p>© Umbrella Academy Grades</p>
		</div>
	</div>
</section>

</body>

</html>