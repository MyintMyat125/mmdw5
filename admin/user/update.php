<?php
    require_once("../dbconfig.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE users 
            SET `name` = '$name', `email` = '$email', `password` = '$password'
            WHERE id=".$_GET['id'];

    $result = mysqli_query($conn, $sql);

    if($result == TRUE){
        header('location:index.php');
    }else{
        echo $conn->error;
    }

?>