<?php
include 'connection.php';
if(isset($_POST['delete'])){
    $firstName=$_POST['fname'];
    $password=$_POST['password'];
    $sql='DELETE FROM users WHERE fname="'.$firstName.'";';
    $result=$conn->query($sql);
    if($result==true){
        echo 'data deleted successfully';
    }else{
        echo 'Failed to delete the data';
    }
    $conn->close();
}
?>