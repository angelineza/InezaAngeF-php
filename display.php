<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display page</title>
</head>
<style>
    body{
        background-color:aliceblue;
    }
</style>
<body>
    <div>
            <?php
    include 'connection.php';
    $sql='SELECT * FROM users;';
    $result=mysqli_query($conn,$sql);
    if ($result){
        echo '<table>';
        echo '<br><br><button><a href="signup.html">Add a new user</a></button><br>
        <table border="1px">
            <tr><th>Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Operations</th></tr>';
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $firstName=$row['fname'];
            $lastName=$row['lname'];
            $email=$row['email'];
            $password=$row['password'];
            $gender=$row['gender'];
            $hashed=password_hash($password,PASSWORD_DEFAULT);
            echo '<tr><td>'.$id.'</td><td>'.$firstName.'</td>
            <td>'.$lastName.'</td>
            <td>'.$email.'</td>
            <td>'.$gender.'</td>
            <td>
            <button><a href="delete.php?deleteid="'.$id.'">Delete</a></button>
            <button><a href="update.php?updateid="'.$id.'">Update</a></button>
            </td>';
        }
    }
    /*
    To verify if the hashed password is correct:
        echo $password_verify($password,$hashed);
        if it prints 1 then the passwords are matching. 
        */
    ?>
    </div>
</body>
</html>