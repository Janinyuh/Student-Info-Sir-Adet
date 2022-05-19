<?php 
session_start(); 
include "../connection/connections.php";

if (isset($_POST['submit'])) {

	$idnumber = $_POST['idnumber'];
	$scode = $_POST['scode'];
	$sname = $_POST['sname'];
	$sgrade = $_POST['sgrade'];


           $sql2 = "INSERT INTO grades(idnumber, scode, sname, sgrade) VALUES('$idnumber', '$scode', '$sname', '$sgrade')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: add grades.php?success=Student's grade has been submitted successfully.");
	         exit();
           }else {
	           	header("Location: add grades.php?error=unknown error occurred&$user_data");
		        exit();
           }

}else{
	header("Location: add grades.php");
	exit();
}
