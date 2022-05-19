<?php

if(!isset($_SESSION)){
    session_start();
}

include_once("../connection/connections.php");
$con = connection();

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student_users WHERE username = '$username' AND password = '$password'";
    $user = $con->query($sql) or die($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    if($total > 0){
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['Access'] = $row['access'];
        header("location: dashboard.php");
        
    }else{
        echo "No user found. Please create an account.";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main/login.css">
    <title>Login</title>
</head>
<body id = "main-body">
    

    <div class="login-container">
        <a href="../newdesign/index.php"> <-Back</a>

        <h2>Login to Umbrella Academy</h2>
        
        
<form action="" method="post">
    <div class="form-element">
        
            <input type="text" name="username" id="username" placeholder="Username">
        
            <input type="password" name="password" id="password" placeholder = "Password">
    </div>
        <button type="submit" name="login">Login</button>
            <h3>Don't have an account?</h3>
        <button type="Submit" name="login">
            <a href="register.php">CREATE ACCOUNT</a>
        </button>
    </div>
</form>

<aside>
        <div id="login-pic">
            <img src="../imgs/login-bg3.png" alt="background">
        </div>

    </aside>
    
    <article>
        <div id="main-article">
            <p>Where education meets excellence</p>
        </div>
    </article>


   
</body>
</html>