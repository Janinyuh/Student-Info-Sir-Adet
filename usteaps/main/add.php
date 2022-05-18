<?php

include_once("../connection/connections.php");
$con = connection();

if(isset($_POST['submit'])){
    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $subject = $_POST['subject'];

    $sql = "INSERT INTO `tutor_list`(`first_name`, `last_name`, `subject`) 
            VALUES ('$fname','$lname','$subject')";
    $con->query($sql) or die ($con->error);

    header("location: ../main/try.php");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main/add.css">
    <title>Add Tutor</title>
</head>
<body>

<div class="header">
        <div class="navbar">
            <div class="logo">
                    <img src="../imgs/textlogo.png" alt="Usteaps logo" width = "150">
            </div>
            <div class="menu">
               <ul>
                <li><a href="../newdesign/index.php">Home</a></li>
                <li><a href="../main/about.php">About us</a></li>
                <li><a href="../main/contact.php">Contact a Tutor</a></li>
                <li> | </li>
                <li id="log-out"><a href="../main/logout.php">Logout</a></li>
               </ul>
            </div>
    
<form action="" method="post">

    <div class="application-container">
        
    <h1>Tutor Application</h1>
        
        <input type="text" name="firstname" id="firstname" placeholder = "First Name">

        
        <input type="text" name="lastname" id="lastname" placeholder = "Last Name">

        
        <input type="text" name="subject" id="search" placeholder = "Subject To Teach">

        
        <input type="text" name="" id="" placeholder = "ID Number">

        
        <input type="text" name="" id="" placeholder = "Contact Number">

        <select id="course-become">
            <option value="">Select Course</option>
            <option value="it">BSIT</option>
            <option value="tcm">BSTCM</option>
            <option value="cpe">BSCPE</option>
         </select>

         
        <input type="text" name="" id="" placeholder = "Email Address">

        
        <input type="text" name="" id="" placeholder = "Year Level">

        <input type="submit" name="submit" value="Submit Form">
    </div>        
</form>
    

</body>
</html>