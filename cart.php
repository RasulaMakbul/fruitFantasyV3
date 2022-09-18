<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.84.0" />
  <title>Cart</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/" />

  <!-- Bootstrap core CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Custom styles for this template -->
  <link href="css/emranStyle.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/f3000c9832.js" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Fruit Fantasy</a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle outline-secondary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./appleCategory.html">Apple</a></li>
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
          <form class="d-flex"><a href="./signin.php"><i class="fa-solid fa-arrow-right-to-bracket"> Login</i></a>
            <form class="d-flex"><a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
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
      <div class="row">
        <div class="col-12">
          <div class="cart-table clearfix">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="cart_product_img d-flex align-items-center">
                    <a href="#"><img src="img/apple.jpg" alt="Product"></a>
                    <h6>Green Apple</h6>
                  </td>
                  <td class="price"><span>49.88 tk</span></td>
                  <td class="qty">
                    <div class="quantity">
                      <span class="qty-minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                      <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="1">
                      <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                    </div>
                  </td>
                  <td class="total_price"><span>49.88 tk</span></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="cart-footer d-flex mt-30">
            <div class="back-to-shop w-50">
              <a href="index.php" class="btn btn-secondary">Continue Shopping</a>
            </div>
            <div class="update-checkout w-50 text-right">
              <a href="#" class="btn btn-secondary">clear cart</a>
              <a href="#" class="btn btn-secondary">Update cart</a>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="coupon-code-area mt-70">
            <div class="cart-page-heading">
              <h5>Cupon code</h5>
              <p>Enter your cupone code</p>
            </div>
            <form action="#">
              <input type="search" name="search" placeholder="#569ab15">
              <button type="submit">Apply</button>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="shipping-method-area mt-70">
            <div class="cart-page-heading">
              <h5>Shipping method</h5>
              <p>Select the one you want</p>
            </div>

            <div class="custom-control custom-radio mb-30">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Next day delivery</span><span>4.99 tk</span></label>
            </div>

            <div class="custom-control custom-radio mb-30">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
              <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Standard delivery</span><span>1.99 tk</span></label>
            </div>

            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
              <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3"><span>Personal Pickup</span><span>Free</span></label>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="cart-total-area mt-70">
            <div class="cart-page-heading">
              <h5>Cart total</h5>
              <p>Final info</p>
            </div>

            <ul class="cart-total-chart">
              <li><span>Subtotal</span> <span>59.90 tk</span></li>
              <li><span>Shipping</span> <span>Free</span></li>
              <li><span><strong>Total</strong></span> <span><strong>59.90 tk</strong></span></li>
            </ul>
            <a href="checkout.html" class="btn karl-checkout-btn">Proceed to checkout</a>
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
          <a href="./aboutUs.html">About Us</a>
          <a href="./contactUs.html">Contact Us</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>