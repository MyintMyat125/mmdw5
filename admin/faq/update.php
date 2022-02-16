<?php

    include("../dbconfig.php");

    $user_id = $_POST['user_id'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $sql = "UPDATE `faq` SET `user_id` = '$user_id', `question` = '$question', `answer` = '$answer'
    WHERE `faq`.`id` = ".$_GET['id'];

    $result = $conn->query($sql);

    if($result == TRUE){
        header('location:index.php');
    }else{
        echo $conn->error;
    }

    $conn->close();
    
    
?>