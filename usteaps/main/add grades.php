<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'session.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Account</title>
	<link rel="stylesheet" type="text/css" href="add grades.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="log_out">
			<a href="logout.php" class="logout_btn"><h5>LOG OUT</h5></a>
		</div>
		<div class="title">
			<h5>UMBRELLA ACADEMY GRADES</h5>
		</div>
		<div class="logobox">
			<img src="../imgs/TEXT-LOGO-l2-Small.png" class="logo">
		</div>
		
	</header>
	<div class="sidebar">
		<a href="../Add account/add grades.php" id="main"><span>Add Grades</span></a>
	</div>

	<div class="content">
		<form action="add grades-check.php" id="addGrade" method="POST">
			<h2>Please input the needed details in the fields.</h2>
			<?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
			<div class="first">
				<label for="idnumber">ID Number</label>
				<input type="text" name="idnumber" id="idnumber" required>
			</div>
			<div class="first">
				<label for="scode">Subject Code</label>
				<select name="scode" id="scode">
					<option>All</option>
					<option value="IT321">IT321</option>
					<option value="IT322">IT322</option>
					<option value="IT323">IT323</option>
					<option value="IT324">IT324</option>
					<option value="PICPE">PICPE</option>
					<option value="FreeElec">FreeElec</option>
					<option value="IT325">IT325</option>
				</select>
				</div>
			<div class="first">
				<label for="sname">Subject Name</label>
				<select name="sname" id="sname">
					<option>All</option>
					<option value="CAPSTONE Project and Research 1">CAPSTONE Project and Research 1</option>
					<option value="Integrative Programming and Technologies">Integrative Programming and Technologies</option>
					<option value="Applications Development and Emerging Technologies">Applications Development and Emerging 
Technologies</option>
					<option value="Philippine Indigenous Communities and Peace Education">Philippine Indigenous Communities and Peace Education</option>
					<option value="Foreign Language">Foreign Language</option>
					<option value="IT Elective 2">IT Elective 2</option>
				</select>
			</div>
			<br>
			<br>
	
			
			<div class="third">
				<div>
				<label for="sgrade">Grade</label>
				<select name="sgrade" id="sgrade">
					<option>All</option>
					<option value="1.00">1.00</option>
					<option value="1.25">1.25</option>
					<option value="1.50">1.50</option>
					<option value="1.75">1.75</option>
					<option value="2.00">2.00</option>
					<option value="2.25">2.25</option>
					<option value="2.50">2.50</option>
					<option value="2.75">2.75</option>
					<option value="3.00">3.00</option>
					<option value="5.00">5.00</option>
					<option value="P">P</option>
				</select>
				</div>
				
			<div class="fourth">
				<button type="reset" name="reset" onclick="resetForm('addGrade'); return false;" class="reset">Reset</button>
				<button type="submit" name="submit" class="submit">Submit</button>
			</div>
		</form>
	</div>


<script type="text/javascript">
   function resetForm(myFormId)
   {
       var myForm = document.getElementById(addAccount);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</body>
</html>