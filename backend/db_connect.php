<?php
    $hostname="localhost";
    $username="root";
    $database="todo";
    $password="";
    $db_connection=mysqli_connect($hostname,$username,$password,$database);
    if( mysqli_connect_errno() ) {
        echo "Connection failed";
    }
