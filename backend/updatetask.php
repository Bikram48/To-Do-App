<?php
    require "db_connect.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    if(isset($_POST['update_btn'])){
        $task_name=$_POST['task_name'];
        echo $task_name;
        if(empty($task_name)){
            header("Location: ../pages/edit_task.php?error=field_empty");
            exit();
        }else{
            $query=mysqli_prepare($db_connection,"UPDATE todotask SET taskname=? where id=?");

            if($query){
                mysqli_stmt_bind_param($query,"ss",$task_name,$id);
                mysqli_stmt_execute($query);
                header("Location:../pages/home.php?success=updatesuccess");
            }else{
                echo "Error occured";
            }
        }
    }
