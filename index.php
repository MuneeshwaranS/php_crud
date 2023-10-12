 <?php
        include "config.php";
        ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12"></div>


            <div class="col-lg-4 col-md-4 col-12 card shadow mt-4 p-4">
                <form action="" method="post">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Employee Name</label>
                        <input type="text"  name="e_name"  class="form-control" placeholder="Employee Name">
                    </div>
                    <div class="mb-3">
                        <label for="Employee Mobile  No" class="form-label">Employee Mobile No</label>
                        <input type="text" name="e_mobile" class="form-control" placeholder="Employee Mobile  No">
                    </div>

                    <div class="mb-3">
                        <label for="Employee Mobile  No" class="form-label">Employee Age</label>
                        <input type="text"  name="e_age" class="form-control" placeholder="Employee Age">
                    </div>

                    <button class="btn btn-info" name="add" type="submit">Add Data</button>

                </form>


                <?php
                if (isset($_POST["add"])) {
                    $name = $_POST["e_name"];
                    $e_mobile = $_POST["e_mobile"];
                    $age = $_POST["e_age"];

                    $sql = "INSERT INTO employee(id, e_name, e_mobile, e_age) VALUES(Null, '$name', '$e_mobile', '$age')";

                    if ($con->query($sql)) {
                        echo "<script> alert('Inserted Successfully'); window.location.replace('view.php')</script>";
                    } else {
                        echo "<script> alert('Inserted  not Successfully,Try again'); window.location.replace('index.php')</script>";
                    }
                }

                ?>
            </div>


            <div class="col-lg-4 col-md-4 col-12"></div>
        </div>
    </div>




</body>

</html>