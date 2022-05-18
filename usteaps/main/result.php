<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['UserLogin'])){
    echo "<div class='message success'>Welcome ".$_SESSION['UserLogin'].'</div>';
}else{
    echo "Welcome Student na gusto magpatutor.";
}

include_once("../connection/connections.php");

$con = connection();
$search = $_GET['search'];
$sql = "SELECT * FROM tutor_list WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' ORDER BY id DESC";
$tutors = $con->query($sql) or die ($con->error);
$row = $tutors->fetch_assoc();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main/tryss.css">
    <title>Tutor Search</title>
</head>
<body>
    
<div class="wrapper">
    <h1> AVAILABLE TUTORS </h1>

 <div class="search-container">
    <form action="result.php" method="get">
     <input type="text" name="search" id = "search" class="search-input" placeholder="Search Tutor">
     <button type="submit" class="search-button">Search</button>
    </form>
</div>

    <div class="button-container">
    <?php if(isset($_SESSION['UserLogin'])){?>
    <a href="logout.php">Logout</a>
    <?php } else { ?>
        <a href="login.php">Login</a>
        <?php } ?>
    <a href="add.php">Add Tutor</a>
    </div>
        
    <table>
        <thead>
        <tr>
            <th></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Subject To Teach</th>
        </tr>
        </thead>
        <tbody>
            <?php do{ ?>
        <tr>
            <td><a href="details.php?ID=<?php echo $row['id'];?>" class="button-small">view</a></td>
            <td><?php echo $row['first_name']; ?> </td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['subject']; ?></td>
        </tr>
        <?php }while($row = $tutors -> fetch_assoc())  ?>
        </tbody>
    </table>
 </div>

</body>
</html>