<?php
    require("../dbconfig.php");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $review = $_POST['review'];
    $img = $_FILES['img']['name'];
    $tmp = $_FILES['img'] ['tmp_name'];

    
    if($img){
        move_uploaded_file($tmp, "img/$img");
        
        echo $img;
        var_dump($img);
    exit();
    }

    

        $sql = "INSERT INTO `product`(`name`, `price`, `description`, `review`, `images`) VALUES ('$name','$price','$description', '$review','$img')";
        
        $result = $conn->query($sql);

        if($result){
            header('location:index.php');
        }else{
            $conn->error;
        }
    
    $conn->close();
?>