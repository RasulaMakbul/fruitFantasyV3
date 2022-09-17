<?php
include "./vendor/autoload.php";

use AppControl\WebFunctions;

require_once "./src/AllFunctions.php";

//require "../../src/AllFunctions.php";

if (isset($_SERVER["REQUEST_METHOD"]) != " GET") {
    echo "Only Get Method  allowed";
    die();
} else {
    $users = new WebFunctions;
    $userInfo  =  $users->viewUser();
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Users</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Fruit Fantasy</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <a href="login.php" type="button" class="btn btn-outline-secondary mx-3"><i class="fa-solid fa-user"></i></a>
                <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-cart-arrow-down"></i></button </div>
            </div>
    </nav>
    <div class="sidebar bg-secondary text-white">
        <div class="items">
            <li><i class="fa-solid fa-chart-pie"></i><a href="dashboard.php">Dashboard</a></li>
            <li><i class="fa-solid fa-border-all"></i><a href="categoryList.php">Categories</a></li>
            <li><i class="fa-solid fa-apple-whole"></i><a href="productList.php">Products</a></li>
            <li><i class="fa-solid fa-users"></i><a href="userList.php">Users</a></li>
            <li><i class="fa-solid fa-cart-arrow-down"></i><a href="#">Order List</a></li>
            <li><i class="fa-solid fa-file-invoice-dollar"></i><a href="#">Invoice</a></li>
            <li><i class="fa-solid fa-star-half-stroke"></i><a href="#">Reviews</a></li>

        </div>
    </div>
    <div class="container ">
        <div class="justify-content-md-center pb-2">
            <?php
            if (isset($_SESSION['massege'])) {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['massege'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            <?php
                unset($_SESSION['massege']);
            } else if (isset($_SESSION['deleteMassege'])) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['deleteMassege'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            <?php
                unset($_SESSION['deleteMassege']);
            }
            ?>
            <table class=" table table-success table-striped table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($userInfo as $key => $user) { ?>
                        <tr>
                            <td scope="row"><?= $user['id'] ?></td>
                            <td><?= $user['fName'] ?> <?= $user['lName'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['phone'] ?></td>
                            <td><?= $user['gender'] ?></td>
                            <td>
                                <a href="viewUser.php?id=<?php echo $user['id'] ?>" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                                <a href="editUser.php?id=<?php echo $user['id'] ?>" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="deleteUser.php?id=<?php echo $user['id'] ?>" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>