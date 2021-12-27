<?php
    require "../backend/db_connect.php";
?>
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
    <?php
        if(isset($_GET['success'])){
            if($_GET['success']=="updatesuccess"){
                echo '<script type="text/javascript">alert("Your task has been updated successfully");</script>';
            }
            if($_GET['success']=="deletesuccess"){
                echo '<script type="text/javascript">alert("Selected task has been removed successfully");</script>';
            }
            if($_GET['success']=="insertsuccess"){
                echo '<script type="text/javascript">alert("New task has been added successfully");</script>';
            }
        }
       
       
    ?>
    <div class="container">
        <h2>To-do-Task App</h2><br>
        <form action="../backend/addtask.php" method="POST" >
            <div class="row">
                <div class="col-xl-4">
                    <input type="text" class="form-control"  placeholder="Enter Task" name="taskname">
                </div>
                <div class="col-sm-4 col-xl-4 ">
                        <input type="submit" name="submit_btn"/>
                </div>
             
            </div>
            <p id="error_display">
                <?php
                    if(isset($_GET['error'])=="field_empty"){
                        echo "Please enter any task";
                    }
                ?>
            </p>
           
        </form><br> 
        <form action="../backend/removetask.php" method="POST">
        <div class="form-group task_displayer">   
        <?php
            $query=mysqli_prepare($db_connection,"SELECT * FROM todotask");
            if($query){
                mysqli_stmt_bind_result($query,$id,$task_name);
                mysqli_stmt_execute($query);
                while(mysqli_stmt_fetch($query)){
            ?>
              <div class="row">   
                <div class="col-sm-offset-2 col-xl-4">
                    <div class="checkbox">
                        <label><input type="checkbox" value="<?php echo $id; ?>" name="ids[]"><span id="task_name"><?php echo $task_name; ?></span></label>
                    </div>
                </div>
                <div class="col-xl-2">
                    <a href="edit_task.php?id=<?php echo $id; ?>"><i class="fas fa-edit" ></i></a>
                </div>
            </div>  
            <?php        
                }
            }
        ?>
          
        </div>
        <input type="submit" name="delete_task_btn" value="DELETE SELECTED"/>
        </form>

    </div>

</body>
</html>