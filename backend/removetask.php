<?php
    include 'db_connect.php';
    if(isset($_POST['delete_task_btn'])){
        if(empty($_POST['ids'])){
            echo "Please select any task to perform this action";
            exit();
        }else{
            foreach($_POST['ids'] as $id){
                $query=mysqli_prepare($db_connection,"DELETE FROM todotask WHERE id=?");
                if($query){
                    mysqli_stmt_bind_param($query,"s",$id);
                    mysqli_stmt_execute($query);
                    header("Location:../pages/home.php?success=deletesuccess");
                 
                }else{
                    echo "Error occured";
                }
                echo $task;
            }
        }
    }
?>