 <?php
        include "config.php";
        ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12"></div>


            <div class="col-lg-4 col-md-4 col-12 card shadow mt-4 p-4">
            <?php 
   if(isset($_GET["id"])){
    $edit_id=$_GET["id"];
    $sql ="SELECT * FROM employee WHERE id='$edit_id'";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();

    $id=$row["id"];
    $name=$row["e_name"];
    $mobile=$row["e_mobile"];
    $age=$row["e_age"];

   }
  
   ?>
                <form action="" method="post">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Employee Name</label>
                        <input type="text"  name="e_name" value="<?php echo "$name"; ?>"  class="form-control" placeholder="Employee Name">
                    </div>
                    <div class="mb-3">
                        <label for="Employee Mobile  No" class="form-label">Employee Mobile No</label>
                        <input type="text" name="e_mobile" value="<?php echo "$mobile"; ?>" class="form-control" placeholder="Employee Mobile  No">
                    </div>

                    <div class="mb-3">
                        <label for="Employee Mobile  No" class="form-label">Employee Age</label>
                        <input type="text"  name="e_age" value="<?php echo "$age"; ?>" class="form-control" placeholder="Employee Age">
                    </div>

                    <button class="btn btn-info" name="update" type="submit">Update Data</button>

                </form>

            
                <?php 
    if(isset($_POST["update"])){
        $name=$_POST["e_name"];
        $mobile=$_POST["e_mobile"];
        $age=$_POST["e_age"];

        $sql = "UPDATE employee SET e_name='$name', e_mobile='$mobile', e_age='$age' WHERE id='$id' ";

        if($con->query($sql)){
            echo "<script> alert('Updated Successfully'); window.location.replace('view.php')</script>";
        }

        else{
            echo "<script> alert('Updated not Successfully,Try Again'); window.location.replace('view.php')</script>";
        }
    }
    ?>

            </div>


            <div class="col-lg-4 col-md-4 col-12"></div>
        </div>
    </div>




</body>

</html>