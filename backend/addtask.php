<?php
    include 'db_connect.php';
    $task_name=$_POST['taskname'];
    
    if(empty($task_name)){
        header("Location: ../pages/home.php?error=field_empty");
        exit();
    }else{
        $query=mysqli_query($db_connection,"INSERT INTO todotask(id,taskname) VALUES('',$task_name)");
        if($query){
            echo "Data inserted succssfully";
        }else{
            echo "Error occured";
        }
    }
?>