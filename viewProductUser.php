

<?php
include "./vendor/autoload.php";

use AppControl\WebFunctions;

require_once "./src/AllFunctions.php";

if (isset($_SERVER["REQUEST_METHOD"]) != " GET") {
    echo "Only Get Method  allowed";
    die();
} else {
    $id = $_GET['id'];
    $fun = new WebFunctions;
    $productInfo  =  $fun->viewProductSingle($id);
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.84.0" />
  <title>View</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/" />

  <!-- Bootstrap core CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Custom styles for this template -->
  <link href="css/homeStyle.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/f3000c9832.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="d-flex flex-column h-100">
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Fruit Fantasy</a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle outline-secondary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./userPages/appleCategory.html">Apple</a></li>
                <li><a class="dropdown-item" href="#">Citrus</a></li>
                <li><a class="dropdown-item" href="#">Stone Fruit</a></li>
                <li><a class="dropdown-item" href="#">Tropical and Exotic</a></li>
                <li><a class="dropdown-item" href="#">Berries</a></li>
                <li><a class="dropdown-item" href="#">Melons</a></li>
                <li><a class="dropdown-item" href="#">Tomatoes and Avocados</a></li>
                <li><a class="dropdown-item" href="#">Summer Season Fruits</a></li>

                <li><a class="dropdown-item" href="#">Dry Fruits</a></li>
                <li><a class="dropdown-item" href="#">Green Fruit</a></li>
                <li><a class="dropdown-item" href="#">High Vitamin C</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex"><a href="login.php"><i class="fa-solid fa-arrow-right-to-bracket"> Login</i></a>
            <form class="d-flex"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </form>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid nav2">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">
          Search
        </button>
      </div>
    </nav>
  </header>

  <!-- Begin page content -->
  <main class="flex-shrink-0">
  <div class="container ">
        <div class="justify-content-md-center pb-2">
            <div class="main">
                <div class="row">
                    <div class="col-md-4 mt-1">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="mt3">
                                    <h3><?= $productInfo['name'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-1">
                        <div class="card mb-3 content">
                            <h1 class="m-3 pt-3">About</h1>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Product Name</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <?= $productInfo['name'] ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Category</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <?= $productInfo['categoryName'] ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        Available Quantity
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <?= $productInfo['quantity'] ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        Description
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <?= $productInfo['description'] ?>
                                    </div>
                                </div>

                                <div class=" justify-content-center fs-3 mb-3">
                                    <a href=#" class="btn btn-secondary w-50 mt-5" type="submit"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="./index.php" class="btn btn-success w-50 mt-1" type="submit">Back to List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>
    

  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <div class="footerItems">
        <div class="col-4">
          <h3>Address</h3>
          <p>
            House- <br />Road- <br />
            Dhaka - 1212
          </p>
        </div>
        <div class="col-4">
          <h3>Contact No</h3>
          <p>
            +8801000000000 <br />8801000000000<br />8801000000000 <br />
            abcr@abc.com
          </p>
        </div>
        <div class="col-4 footerLinks">
          <a href="./userPages/aboutUs.html">About Us</a>
          <a href="./userPages/contactUs.html">Contact Us</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    document.getElementById("signIn").onclick = function() {
      location.href = "./userPages/signin.html";
    };
  </script>

  <script>
    function addToCart() {
      alert("Added to cart");
    }
  </script>
</body>

</html>