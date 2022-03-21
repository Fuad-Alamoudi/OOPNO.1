<?php
require_once("../connection.php"); // For connection to database
$query = "select * from category  "; // Query to select all data about category table
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="../css/bootstrap.css">
    <title> category</title>
</head>

<body class="bg-light">
    <?php
    require_once("../nav.php")
    ?>

    <div class="container">
        <!-- add category -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 ">
                <div class="card mt-5 shadow">
                    <div class="card-title my-0">
                        <h3 class="bg-dark text-white text-center py-3"> add category</h3>
                    </div>
                    <div class="card-body">
                        <form action="insert.php" method="post">
                            <input type="text" class="form-control mb-3 fs-5" placeholder="Category Name" name="cate-name">
                            <input type="text" class="form-control mb-3 fs-5" placeholder="Category Description" name="cate-description">
                            <button type="submit" class="btn btn-dark d-inline-block w-100 fs-5" name="add-category">save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>