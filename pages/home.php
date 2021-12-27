<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>To-do-Task App</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" >
            <div class="row">
                <div class="col-xl-8">
                    <input type="email" class="form-control" id="email" placeholder="Enter Task" name="email">
                </div>
                <div class="col-sm-4 col-xl-4 ">
                        <input type="submit" name="submit_btn"/>
                </div>
             
            </div>
           
        </form><br> <br>
        <div class="form-group">   
            <div class="row">   
                <div class="col-sm-offset-2 col-xl-6">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Task 1</label>
                    </div>
                </div>
                <div class="col-xl-2">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-times"></i>
                </div>
            </div>  
        </div>
    </div>
<!--
<div class="container">
<div class="col-xl-2">
</div>
<div class="col-xl-8">
<div class="row">
<form  action="">
<div class="form-group">
    <input type="text" name="new_task" placeholder='Add new task'/>
    <input type="submit" name="submit_btn"/>
</div>

</form>
</div>
<div class="row">
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
        <input type="checkbox" name="selected_task"/>Hello
        </div>
    
    </div>


<i class="fas fa-times"></i>
</div>
</div>
</div>
<div class="col-xl-2">

</div>
</div> 
-->
</body>
</html>