<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
</head>
<body>
    <form action="update.php" method="post">
    <input type="text" name="fname" placeholder="Enter your firstname"><br>
            <input type="text" name="lname" placeholder="Enter your lastname"><br>
            <input type="text" name="email" placeholder="Enter your email"><br>
            <input type="password" name="password" placeholder="Enter your password"><br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br>
            <input type="submit" value="Update" name="update">
    </form>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['update'])){
    $id=$_GET['updateid'];
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $sql='UPDATE users SET fname="'.$firstName.'", lname="'.$lastName.'", email="'.$email.'", password='.$password.', gender="'.$gender.'" WHERE id='.$id.';';
    $result=$conn->query($sql);
    if($result==true){
        echo 'User updated successfully!!';
        header('location: display.php');
    }else{
        echo 'Failed to update user';
    }
    $conn->close();
}
?>