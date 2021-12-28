<?php
    include 'db_connect.php';
    if( isset($_POST['submit_btn'] )) {
    $task_name=$_POST['taskname'];
    if( empty($task_name) ) {
        header( "Location: ../pages/home.php?error=field_empty" );
        exit();
    } else {
        $query=mysqli_prepare( $db_connection,"INSERT INTO todotask(taskname) VALUES(?)" );
        if( $query ){
            mysqli_stmt_bind_param( $query,"s",$task_name );
            mysqli_stmt_execute( $query );
            header( "Location:../pages/home.php?success=insertsuccess" );
            echo "Data inserted succssfully";
        } else {
            echo "Error occured";
        }
    }
}
