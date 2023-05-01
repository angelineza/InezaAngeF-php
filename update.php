<?php
include 'connection.php';
if(isset($_POST['update'])){
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $sql='UPDATE users SET fname="'.$firstName.'", lname="'.$lastName.'", email="'.$email.'", password='.$password.', gender="'.$gender.'" WHERE fname="'.$firstName.'";';
    $result=$conn->query($sql);
    if($result==true){
        echo 'User updated successfully!!';
    }else{
        echo 'Failed to update user';
    }
    $conn->close();
}
?>