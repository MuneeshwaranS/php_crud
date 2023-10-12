 <?php
    include "config.php";
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>View page</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 </head>

 <body>

     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-12">
                <h3 class="text-center m-4">View Page</h3>
                 <div class="table-responsive card p-3 mt-5">
                     <table class="table align-middle">
                         <thead>
                             <th>S.No</th>
                             <th>Employee Name</th>
                             <th>Employee Mobile</th>
                             <th>Employee Age</th>
                             <th>Edit</th>
                             <th>Delete</th>

                         </thead>
                         <tbody>

                             <?php
                                $sql = "SELECT * FROM employee";
                                $result = $con->query($sql);
                                $i = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $i = $i + 1;
                                    $id = $row["id"];
                                    $name = $row["e_name"];
                                    $mobile = $row["e_mobile"];
                                    $age = $row["e_age"];

                                ?>
                                 <tr>
                                     <td> <?php echo "$i"; ?></td>
                                     <td> <?php echo "$name"; ?></td>
                                     <td> <?php echo "$mobile"; ?></td>
                                     <td> <?php echo "$age"; ?></td>
                                     <td><a href="edit_emp.php?id=<?php echo $id; ?>">Edit Now</a></td>
                                     <td><a href="view.php?d_id=<?php echo $id; ?>">Delete Now</a></td>

                                 </tr>

                             <?php } ?>

                         </tbody>
                     </table>


                     <?php
                        if (isset($_GET["d_id"])) {
                            $delete = $_GET["d_id"];

                            $sql = "DELETE FROM employee WHERE id='$delete' ";
                            if ($con->query($sql)) {
                                echo "<script> alert('Deleted Successfully'); window.location.replace('view.php')</script>";
                            } else {
                                echo "<script> alert('Deleted not Successfully,Try Again'); window.location.replace('view.php')</script>";
                            }
                        }
                        ?>
                 </div>
             </div>



         </div>
     </div>




 </body>

 </html>