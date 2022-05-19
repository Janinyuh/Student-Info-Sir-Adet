<?php 
	session_start();
	if(!ISSET($_SESSION['username'])){
		header("location:../newdesign/index.php");
	}