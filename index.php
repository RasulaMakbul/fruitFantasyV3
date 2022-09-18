<?php
include "./vendor/autoload.php";

use AppControl\WebFunctions;

require_once "./src/AllFunctions.php";

if (isset($_SERVER["REQUEST_METHOD"]) != " GET") {
  echo "Only Get Method  allowed";
  die();
} else {
  $fun = new WebFunctions;
  $productInfo  =  $fun->viewProduct();
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
  <title>Fruit Fantasy</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/" />

  <!-- Bootstrap core CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Custom styles for this template -->
  <link href="css/homeStyle.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/f3000c9832.js" crossorigin="anonymous"></script>
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
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/banana.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="./img/rMango.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="./img/Watermelon.jpg" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <ul>
            <li><a class="sideFilter" href="#">Apple</a></li>
            <li><a class="sideFilter" href="#">Citrus</a></li>
            <li><a class="sideFilter" href="#">Stone Fruit</a></li>
            <li><a class="sideFilter" href="#">Tropical and Exotic</a></li>
            <li><a class="sideFilter" href="#">Berries</a></li>
            <li><a class="sideFilter" href="#">Melons</a></li>
            <li><a class="sideFilter" href="#">Tomatoes and Avocados</a></li>
            <li><a class="sideFilter" href="#">Summer Season Fruits</a></li>
            <li><a class="sideFilter" href="#">Dry Fruits</a></li>
            <li><a class="sideFilter" href="#">Green Fruit</a></li>
            <li><a class="sideFilter" href="#">High Vitamin C</a></li>
          </ul>
        </div>
        <div class="col-9">

          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($productInfo as $key => $user) { ?>
              <div class="col">
                <div class="card">
                  <img src="./img/pinkLadyApple.jpg" class="card-img-top" alt="..." />
                  <div class="card-body">

                    <h5 class="card-title"><?= $user['name'] ?></h5>
                    <p class="card-text"><?= $user['categoryName'] ?></p>
                    <p class="card-text"><?= $user['description'] ?></p>
                  </div>
                </div>
                <a href="pinkLadyApple.html" class="btn btn-secondary">View</a>
                <button type="button" onclick="addToCart()" class="btn btn-success" id="cartAdd">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
    <div class="testomonial">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card text-center">
              <div class="card-header">Reviews</div>
              <div class="card-body">
                <h5 class="card-title">Apples were fresh</h5>
                <img src="./img/apple.jpg" alt="" />
                <p class="card-text">
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
                </p>
              </div>
              <div class="card-footer text-muted">2 days ago</div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card text-center">
              <div class="card-header">Reviews</div>
              <div class="card-body">
                <h5 class="card-title">Watermelon were fresh</h5>
                <img src="./img/Watermelon.jpg" alt="" />
                <p class="card-text">
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
                </p>
              </div>
              <div class="card-footer text-muted">2 days ago</div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card text-center">
              <div class="card-header">Reviews</div>
              <div class="card-body">
                <h5 class="card-title">Mangoes were fresh</h5>
                <img src="./img/rMango.jpg" alt="" />
                <p class="card-text">
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
                </p>
              </div>
              <div class="card-footer text-muted">2 days ago</div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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