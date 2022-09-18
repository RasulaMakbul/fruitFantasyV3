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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>

    <link rel="stylesheet" href="./css/emranStyle.css">

    <script src="https://kit.fontawesome.com/f3000c9832.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <!-- Side bar -->
    <section id="menu">
        <div class="logo">
            <a href="index.php" style="color:black ;text-decoration: none; text-align: center;">
                <h5>Fruit Fantasy</h5>
            </a>
        </div>
        <div class="items">
            <li><i class="fa-solid fa-chart-pie"></i><a href="dashboard.php">Dashboard</a></li>
            <li><i class="fa-solid fa-border-all"></i><a href="categoryList.php">Categories</a></li>
            <li><i class="fa-solid fa-apple-whole"></i><a href="productList.php">Products</a></li>
            <li><i class="fa-solid fa-users"></i><a href="userList.php">Users</a></li>
            <li><i class="fa-solid fa-cart-arrow-down"></i><a href="#">Order List</a></li>
            <li><i class="fa-solid fa-file-invoice-dollar"></i><a href="#">Invoice</a></li>
            <li><i class="fa-solid fa-star-half-stroke"></i><a href="#">Reviews</a></li>


        </div>
    </section>
    <!-- sidebar -->
    <section id="interface">
        <div class="nav">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa-solid fa-bars"></i>
                </div>
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="profile">
                <i class="fa-solid fa-circle-user"></i>
                <img src="#" alt="">
            </div>
        </div>
        <h3 class="i-name">dashboard</h3>

        <div class="values">
            <!-- new users -->
            <div class="val-box">
                <i class="fa-solid fa-user-group"></i>
                <div>
                    <h3>8,267</h3>
                    <span>New Users</span>
                </div>
            </div>

            <!-- item sold -->

            <div class="val-box">
                <i class="fa-solid fa-check-double"></i>
                <div>
                    <h3>8,267</h3>
                    <span>Total Sold</span>
                </div>
            </div>

            <!-- pending order -->

            <div class="val-box">
                <i class="fa-solid fa-pen-to-square"></i>
                <div>
                    <h3>8,267</h3>
                    <span>Order Pending</span>
                </div>
            </div>

            <!-- This Month Revenew -->

            <div class="val-box">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <div>
                    <h3>8,267</h3>
                    <span>This month Revenue</span>
                </div>
            </div>
        </div>
        <!-- Chart -->
        <h3 class="i-name">Chart</h3>
        <div class="chartShow">
            <div id="chartContainer" style="height: 370px; width: 94%;"></div>
        </div>
        <h3 class="i-name">Quantity Dropping</h3>
        <div class="board">
            <table class=" table table-success table-striped table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Available</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productInfo as $key => $user) { ?>
                        <tr>
                            <td scope="row"><?= $user['id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['categoryName'] ?></td>
                            <td><?= $user['quantity'] ?></td>
                            <td>
                                <a href="viewProduct.php?id=<?php echo $user['id'] ?>" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                                <a href="editProduct.php?id=<?php echo $user['id'] ?>" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="deleteProduct.php?id=<?php echo $user['id'] ?>" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <h3 class="i-name">Pending Order</h3>
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Invoice ID</td>
                        <td>Address</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>18765</h5>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>Address</p>
                        </td>
                        <td>
                            <p style="color:rgb(233, 81, 81); border-radius:4px;">Pending</p>
                        </td>

                        <td class="edit">
                            <a href="./editInvoice.html" style="background-color:rgb(165, 238, 165);padding: 6px; border-radius:4px;">Edit</a>
                            <a href=" #" style="background-color:rgb(245, 67, 67); padding: 6px; border-radius:4px;">Delete</a>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>18765</h5>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>Address</p>
                        </td>
                        <td>
                            <p style="color:rgb(233, 81, 81); border-radius:4px;">Pending</p>
                        </td>

                        <td class="edit">
                            <a href="./editInvoice.html" style="background-color:rgb(165, 238, 165);padding: 6px; border-radius:4px;">Edit</a>
                            <a href=" #" style="background-color:rgb(245, 67, 67); padding: 6px; border-radius:4px;">Delete</a>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>18765</h5>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>Address</p>
                        </td>
                        <td>
                            <p style="color:rgb(233, 81, 81); border-radius:4px;">Pending</p>
                        </td>

                        <td class="edit">
                            <a href="./editInvoice.html" style="background-color:rgb(165, 238, 165);padding: 6px; border-radius:4px;">Edit</a>
                            <a href=" #" style="background-color:rgb(245, 67, 67); padding: 6px; border-radius:4px;">Delete</a>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>18765</h5>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>Address</p>
                        </td>
                        <td>
                            <p style="color:rgb(233, 81, 81); border-radius:4px;">Pending</p>
                        </td>

                        <td class="edit">
                            <a href="./editInvoice.html" style="background-color:rgb(165, 238, 165);padding: 6px; border-radius:4px;">Edit</a>
                            <a href=" #" style="background-color:rgb(245, 67, 67); padding: 6px; border-radius:4px;">Delete</a>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>18765</h5>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>Address</p>
                        </td>
                        <td>
                            <p style="color:rgb(233, 81, 81); border-radius:4px;">Pending</p>
                        </td>

                        <td class="edit">
                            <a href="./editInvoice.html" style="background-color:rgb(165, 238, 165);padding: 6px; border-radius:4px;">Edit</a>
                            <a href=" #" style="background-color:rgb(245, 67, 67); padding: 6px; border-radius:4px;">Delete</a>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
        <h3 class="i-name">Reviews</h3>
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Product/Service</td>
                        <td>Invoice ID</td>
                        <td>Ratings</td>
                        <td>Comment</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <p>Mango</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>123456</p>
                        </td>
                        <td>
                            <p>8/10</p>
                        </td>

                        <td class="edit">
                            <p>Good Product</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <p>Delivery</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>123456</p>
                        </td>
                        <td>
                            <p>3/10</p>
                        </td>

                        <td class="edit">
                            <p>Very Bad packageing</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <p>Mango</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>123456</p>
                        </td>
                        <td>
                            <p>8/10</p>
                        </td>

                        <td class="edit">
                            <p>Good Product</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <p>Delivery</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>123456</p>
                        </td>
                        <td>
                            <p>3/10</p>
                        </td>

                        <td class="edit">
                            <p>Very Bad packageing</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <p>Mango</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>123456</p>
                        </td>
                        <td>
                            <p>8/10</p>
                        </td>

                        <td class="edit">
                            <p>Good Product</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <p>Delivery</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>123456</p>
                        </td>
                        <td>
                            <p>3/10</p>
                        </td>

                        <td class="edit">
                            <p>Very Bad packageing</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <p>Mango</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>123456</p>
                        </td>
                        <td>
                            <p>8/10</p>
                        </td>

                        <td class="edit">
                            <p>Good Product</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <p>Delivery</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <p>123456</p>
                        </td>
                        <td>
                            <p>3/10</p>
                        </td>

                        <td class="edit">
                            <p>Very Bad packageing</p>
                        </td>

                    </tr>


                </tbody>
            </table>
        </div>
    </section>








    <script>
        $('#menu-btn').click(function() {
            $('#menu').toggleClass("active");
        })
    </script>

    <script>
        window.onload = function() {

            var options = {
                exportEnabled: true,
                animationEnabled: true,
                title: {
                    text: "Units Sold VS Profit"
                },
                // subtitles: [{
                //     text: "Click Legend to Hide or Unhide Data Series"
                // }],
                axisX: {
                    title: "States"
                },
                axisY: {
                    // title: "Units Sold",
                    titleFontColor: "#4F81BC",
                    lineColor: "#4F81BC",
                    labelFontColor: "#4F81BC",
                    tickColor: "#4F81BC"
                },
                axisY2: {
                    // title: "Profit in USD",
                    titleFontColor: "#C0504E",
                    lineColor: "#C0504E",
                    labelFontColor: "#C0504E",
                    tickColor: "#C0504E"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                data: [{
                        type: "spline",
                        name: "Units Sold",
                        showInLegend: true,
                        xValueFormatString: "MMM YYYY",
                        yValueFormatString: "#,##0 Units",
                        dataPoints: [{
                                x: new Date(2016, 0, 1),
                                y: 120
                            },
                            {
                                x: new Date(2016, 1, 1),
                                y: 135
                            },
                            {
                                x: new Date(2016, 2, 1),
                                y: 144
                            },
                            {
                                x: new Date(2016, 3, 1),
                                y: 103
                            },
                            {
                                x: new Date(2016, 4, 1),
                                y: 93
                            },
                            {
                                x: new Date(2016, 5, 1),
                                y: 129
                            },
                            {
                                x: new Date(2016, 6, 1),
                                y: 143
                            },
                            {
                                x: new Date(2016, 7, 1),
                                y: 156
                            },
                            {
                                x: new Date(2016, 8, 1),
                                y: 122
                            },
                            {
                                x: new Date(2016, 9, 1),
                                y: 106
                            },
                            {
                                x: new Date(2016, 10, 1),
                                y: 137
                            },
                            {
                                x: new Date(2016, 11, 1),
                                y: 142
                            }
                        ]
                    },
                    {
                        type: "spline",
                        name: "Profit",
                        axisYType: "secondary",
                        showInLegend: true,
                        xValueFormatString: "MMM YYYY",
                        yValueFormatString: "$#,##0.#",
                        dataPoints: [{
                                x: new Date(2016, 0, 1),
                                y: 19034.5
                            },
                            {
                                x: new Date(2016, 1, 1),
                                y: 20015
                            },
                            {
                                x: new Date(2016, 2, 1),
                                y: 27342
                            },
                            {
                                x: new Date(2016, 3, 1),
                                y: 20088
                            },
                            {
                                x: new Date(2016, 4, 1),
                                y: 20234
                            },
                            {
                                x: new Date(2016, 5, 1),
                                y: 29034
                            },
                            {
                                x: new Date(2016, 6, 1),
                                y: 30487
                            },
                            {
                                x: new Date(2016, 7, 1),
                                y: 32523
                            },
                            {
                                x: new Date(2016, 8, 1),
                                y: 20234
                            },
                            {
                                x: new Date(2016, 9, 1),
                                y: 27234
                            },
                            {
                                x: new Date(2016, 10, 1),
                                y: 33548
                            },
                            {
                                x: new Date(2016, 11, 1),
                                y: 32534
                            }
                        ]
                    }
                ]
            };
            $("#chartContainer").CanvasJSChart(options);

            function toggleDataSeries(e) {
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                e.chart.render();
            }

        }
    </script>
</body>

</html>