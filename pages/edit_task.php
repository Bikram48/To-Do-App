<?php require "../backend/db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/home.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Update Task</h2><br>
        <?php 
            if( isset($_GET['id']) ){
                $task_id=$_GET['id'];
                $query=mysqli_prepare( $db_connection,"SELECT * FROM todotask WHERE id=?" );
                if( $query ){
                    mysqli_stmt_bind_param( $query,"s",$task_id );
                    mysqli_stmt_bind_result( $query,$id,$task_name );
                    mysqli_stmt_execute( $query );
                    mysqli_stmt_fetch( $query );   
        ?>
        <form action="../backend/updatetask.php?id=<?php echo $id; ?>" method="POST">
            <div class="row">
                <div class="col-xl-4">
                    <input type="text" class="form-control"  name="task_name" value="<?php echo $task_name; ?>"> 
                </div>
                <div class="col-sm-4 col-xl-4 ">
                    <input type="submit" value="UPDATE" name="update_btn"/>
                </div>
            </div>
            <p id="error_display">
                <?php
                    if( isset($_GET['error'])=="field_empty" ){
                        echo "Please enter any task";
                    }
                ?>
            </p>
        </form><br> 
        <?php
                }
            }
        ?>
    </div>
</body>
</html>