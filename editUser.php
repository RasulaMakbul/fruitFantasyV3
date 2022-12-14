<?php
include "./vendor/autoload.php";

use AppControl\WebFunctions;

require_once "./src/AllFunctions.php";

//require "../../src/AllFunctions.php";

if (isset($_SERVER["REQUEST_METHOD"]) != " GET") {
    echo "Only Get Method  allowed";
    die();
} else {
    $id = $_GET['id'];
    $users = new WebFunctions;
    $userInfo  =  $users->viewUserSingle($id);
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
    <title>Edit User</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Fruit Fantasy</a>
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

            <form action="./updateUser.php?=<?= $userInfo['id'] ?>" method="POST" class="form-login align-items-center">
                <div class="col-md-auto pb-2">
                    <input type="text" class="form-control" name="id" value="<?= $userInfo['id'] ?>" hidden required>
                </div>
                <div class="col-md-auto pb-2">
                    <label class="form-label">First name</label>
                    <input type="text" class="form-control" name="fName" value="<?= $userInfo['fName'] ?>" required>
                </div>
                <div class="col-md-auto pb-2">
                    <label class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lName" value="<?= $userInfo['lName'] ?>" required>
                </div>
                <div class="col-md-auto pb-2">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input type="email" class="form-control" name="email" value="<?= $userInfo['email'] ?>" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-auto pb-2">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?= $userInfo['phone'] ?>" required>
                </div>
                <div class="col-md-auto pb-2">
                    <label class="form-label">password</label>
                    <input type="text" class="form-control" name="passw" value="<?= $userInfo['passw'] ?>" required>
                </div>
                <div class="col-md-auto pb-2">
                    <label class="form-label">Retype Password</label>
                    <input type="text" class="form-control" placeholder="retype Password" required>
                </div>

                <div class="form-group mb-3">
                    <label>Gender</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($userInfo['gender'] == 'male') ? "checked" : ""; ?>>
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($userInfo['gender'] == 'female') ? "checked" : ""; ?>>
                    <label for="female" class="form-input-label">Female</label>
                </div>

                <div class="col-md-auto pb-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Agree to terms and conditions
                        </label>
                    </div>
                </div>
                <div class=" justify-content-center fs-3 mb-1 p-1">
                    <button class="btn btn-primary w-100" type="submit" name="submit">Save</button>
                </div>
                <div class=" justify-content-center fs-3 mb-5 p-1">
                    <a href="./userList.php" class="btn btn-success w-100" type="submit">Back</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>