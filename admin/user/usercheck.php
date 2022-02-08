<?php
    include('../dbconfig.php');
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(`name`,`email`,`password`)
            VALUES('$name', '$email', '$password')";

    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:index.php');
    }else{
        echo $conn->error;
    }
    $conn->close();

?>