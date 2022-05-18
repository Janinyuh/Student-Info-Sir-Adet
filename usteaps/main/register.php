<?php


if(!isset($_SESSION)){
    session_start();
}

include_once("../connection/connections.php");
$con = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main/register.css">
    <title>Registration form</title>
</head>

<body id="form-login">
    

    <h2 id="home"><a href="../newdesign/index.php">> Back To Home</a></h2>

<form action="server.php" method="post">
    <div class="container">
        <h2>Sign up to Umbrella Academy</h2>
        <input type="text" name="username" placeholder="ID Number or Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="access" placeholder="Access" required>
        <button type="Submit" name="login">REGISTER</button>
        
    </div>

    <aside>
        <div id="login-pic">
            <img src="../imgs/login-bg2.png" alt="background">
        </div>
    </aside>
    
    <article>
        <div id="main-article">
            <p>Here in our academy, we offer only excellence</p>
        </div>
    </article>


</form>
    
   

</body>
</html>