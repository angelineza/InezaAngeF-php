<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result='SELECT FROM users WHERE email="'.$email.'" AND password='.$password.';';
    if(!$result){
        echo 'Error: '.mysqli->error;
        exit();
    }
    if($result->num_rows>0){
        session_start();
        $_SESSION['email']=$email;
        header("location: display.php");
        exit();
    }else{
        echo "Invalid username or password";
    }
}
?>