<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql='DELETE FROM users WHERE id="'.$id.'";';
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data deleted successfully"
        header('location: display.php');
    }else{
        echo 'Failed to delete the data';
    }
    $conn->close();
}
?>