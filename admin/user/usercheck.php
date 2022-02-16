<?php
    include('../dbconfig.php');
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(`name`,`email`,`password`)
            VALUES('$name', '$email', '$password')";

    $result = $conn->query($sql);

    if($result){
        header('location:index.php');
    }else{
        echo $conn->error;
    }
    $conn->close();

?>