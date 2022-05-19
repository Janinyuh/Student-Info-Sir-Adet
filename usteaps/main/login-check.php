<?php 
session_start(); 
include '../connection/connections.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: login.php");
        exit();
    }else if(empty($password)){
        header("Location: login.php");
        exit();
    }else{
        // hashing the password

        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password && $row['access'] == 'User' ) {
                $_SESSION['username'] = $row['username'];
                header("Location: dashboard.php");
                exit();
            }else if ($row['username'] === $username && $row['password'] === $password && $row['access'] == 'Administrator' ) {
                $_SESSION['username'] = $row['username'];
                header("Location: add grades.php");
                exit();
            }
            else{
                header("Location: login.php");
                exit();
            }
        }else{
            header("Location: login.php");
            exit();
        }
    }
    
}else{
    header("Location: login.php");
    exit();
}