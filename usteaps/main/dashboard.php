<!DOCTYPE html>
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
        <?php if(isset($_SESSION['UserLogin'])){?>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="login.php">Login</a>
            <?php } ?>
    </div>
<!-- start table ---->
<div class="container-table">
	<table class="table1">		
  <tr>
    <th>Subject Codes</th>
    <th>Subject Name</th>
    <th>Grades</th>
  </tr>
  <tbody>
					<?php
						require '../connection/connections.php';
						$query = $conn->query("SELECT name2, amount, date_toclaim, date_claimed FROM `ayuda` WHERE userID = ('$userID2');") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['name2']?></td>
							<td><?php echo $fetch['amount']?></td>
							<td><?php echo $fetch['date_toclaim']?></td>
							<td><?php echo $fetch['date_claimed']?></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
</table>

<!--other table-->
<h2 id="title2">My 	Information</h2>
<div class="scrollable">
<table class="table2">
	 <tbody>
	 				<th>NAME</th>
					<?php
						require '../connection/connections.php';
						$query = $conn->query("SELECT ayuda.name2 FROM `ayuda` WHERE EXISTS (SELECT purok FROM users WHERE userID = ayuda.userID AND purok = ('$purok2') AND userID != ('$userID2'));") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
							
						<tr>
							<td><?php echo $fetch['name2']?></td>
						</tr>
					<?php
						}
					?>	
					</tbody>

</table>
</div>
</div>
<!-- end table ---->





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
			<p>© The Barangay Pandemic Management System</p>
		</div>
	</div>
</section>

</body>

</html>