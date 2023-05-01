<?php
$servername='localhost';
$db_name='student_db_php';
$username='root';
$password='';
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){
    echo "Connection failed!";
}else{
    echo "Connection successfull!";
}
?>