<?php


if(!isset($_SESSION)){
    session_start();
}

include_once("../connection/connections.php");
$con = connection();

mysqli_select_db($con, $student_system);

$name = $_POST['username'];
$password = $_POST['password'];
$access = $_POST['access'];

$sql = " SELECT * FROM student_users WHERE username = '$name'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if($num ==  1) {
    echo "Username already taken!";

}else {
    $reg = "INSERT INTO student_users(username, password,access) VALUES ('$name','$password','$access')";
    mysqli_query($con,$reg);
    header("Location: ../newdesign/index.php");


}




?>