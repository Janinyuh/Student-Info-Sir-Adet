<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['Access'])){
    echo "<div class='message success'> Welcome fellow student, ".$_SESSION['UserLogin']."</div><br><br>";
}else{
    header("Location: try.php");
}

include_once("../connection/connections.php");
$con = connection();

$id = $_GET['ID'];

$sql = "SELECT * FROM tutor_list WHERE id ='$id'";
$tutors = $con->query($sql) or die ($con->error);
$row = $tutors->fetch_assoc();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main/detailss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Details</title>
</head>
<body>

<form action="delete.php" method="post">

        <section>
        <div class="container">

                        <div class = "heading1">
                            <h3><a href="try.php"> Back</a></h3>
                        </div>
                        <div class = "heading2">
                            <h3><a href="edit.php?ID=<?php echo $row['id'];?>">Edit</a></h3>
                        </div>

            <div class="contact-info">
                <div>
                    <h2 style ="color: black; font-weight: 900;">Tutor Contact Info</h2>
                    <ul class="info">
                         <li>
                             <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                            <h2 style = "color: white;"><?php echo $row['first_name'];?> <?php echo $row['last_name'];?> <br> <br>
                            is teaching <?php echo $row['subject'];?> subject </h2>
                        </li>
                        <li>
                            <span><img src="">➣</span>
                            <span>2912 Meadowbrook Road <br>
                                Los Angeles, CA <br>
                                </span>
                        </li>
                        <li>
                            <span><img src="">➣</span>
                            <span>tutor@gmail.com</span>
                        </li>
                        <li>
                            <span><img src="">➣</span>
                            <span>09266020972</span>
                        </li>
                    </ul>
                </div>
                <ul class="icons">
                    <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                </ul>
            </div>
            <div class="contactForm">
                    <h2>Send a Message</h2>
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="" required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
              </div>
            </div>
        </section>
    </form>

</body>
</html>