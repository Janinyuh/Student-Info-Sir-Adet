<?php

include_once("../connection/connections.php");
$con = connection();
$id = $_GET['ID'];

$sql = "SELECT * FROM tutor_list WHERE id = '$id'";
$tutors = $con->query($sql) or die ($con->error);
$row = $tutors->fetch_assoc(); 

if(isset($_POST['submit'])){
    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $subject = $_POST['subject'];

    
    $sql = "UPDATE tutor_list SET first_name ='$fname', last_name = '$lname', subject =  '$subject' 
            WHERE id = '$id'";
    $con->query($sql) or die ($con->error);

    header("location: details.php?ID=".$id);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main/edit.css">
    <title>Edit Tutor Info</title>
</head>
<body id = "id-container">
    

    <div class= "app-container">
        <form action="" method="post">
            <div class = "back">
            <a href="../main/try.php">< Go Back</a>
            </div>
            <label>First Name</label>
            <input type="text" name="firstname" id="firstname" placeholder ="First Name" value="<?php echo $row['first_name'];?>">

            <label>Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder ="Last Name" value="<?php echo $row['last_name'];?>">

            <label>Subject to Teach</label>
            <input type="text" name="subject" id="search" placeholder ="Subject To Teach" value="<?php echo $row['subject'];?>">

            <input type="submit" name="submit" value="Update">

        </form>
    </div>

</body>
</html>