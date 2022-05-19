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
        header("Location: login.php?error=User ID is required");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        // hashing the password
        $password = md5($password);

        
        $sql = "SELECT * FROM users WHERE userID='$userID' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['userID'] === $userID && $row['password'] === $password && $row['role'] == 'user' ) {
                $_SESSION['purok'] = $row['purok'];
                $_SESSION['userID'] = $row['userID'];
                header("Location: dashboard.php");
                exit();
            }else if ($row['userID'] === $userID && $row['password'] === $password && $row['role'] == 'admin' ) {
                $_SESSION['purok'] = $row['purok'];
                $_SESSION['userID'] = $row['userID'];
                header("Location: home page/home.php");
                exit();
            }
            else{
                header("Location: login.php?error=Incorect user ID or password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect user ID or password");
            exit();
        }
    }
    
}else{
    header("Location: login.php");
    exit();
}