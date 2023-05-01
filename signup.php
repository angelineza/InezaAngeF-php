<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $firstName=$_POST['firstname'];
    $lastName=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $sql="INSERT INTO users(fname,lname,email,password,gender) VALUES ('$firstName','$lastName','$email','$password','$gender')";
    $result=$conn->query($sql);
    if($result==true){
        echo "Data recorded successfully!🥳🥳";
        header('location: display.php');
    }else{echo "Data was not recorded ☹️☹️☹️";}
    // if()
    $conn->close();
}
?>
<html>
    <a class="btn-btn-info" href="signup.html">Back</a>
    <a class="btn-btn-info" href="read.php">View record form database</a>
</html>