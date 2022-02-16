<?php 
    session_start();
    require('./dbconfig.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if($row['email'] === $email AND $row['password'] === $password){
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];

        header("location:user/index.php");
    }else{
        header("location:index.php");
    }

?>