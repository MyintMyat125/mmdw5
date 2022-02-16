<?php

    require("../dbconfig.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM product WHERE id =".$id;
    $result = $conn->query($sql);

    if($result == TRUE){
        header('location:index.php');
    }else{
        echo $conn->error;
    }

?>