<?php

session_start();
if(!isset($_SESSION['name']))
{
    header('location: ../main/login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contact a tutor</title>
</head>
<body>
    
    <div class="header">
        <div class="navbar">
            <div class="logo">
                    <img src="../imgs/TEXT-LOGO-l2-Small.png" alt="Usteaps logo">
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

            <section>
                <div class="main-contact">
                    <form action="" method="get">
                        <h2>Welcome <?php echo $_SESSION['name'] . ","; ?> to USTEAPS Learning!</h2>
                        <h2>Need Help?</h2>
                        <input type="text" name="search" id="search" placeholder="Search for a tutor">
                        <a href="#">
                            <button class="button-contact" type="submit" name="">Search</button>
                        </a>
                        </form>
                </div>
            </section>
    

</body>
</html>