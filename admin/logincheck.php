<?php 
    require('./dbconfig.php');

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    

    if($row['name'] === $name AND $row['password'] === $password){
        header("location:index.php");
    }else{
        
        header("location:login.php");
    }
  

?>