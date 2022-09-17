<?php

use AppControl\WebFunctions;

include "./vendor/autoload.php";
require_once "./src/AllFunctions.php";



if (isset($_SERVER['REQUEST_METHOD']) != "POST") {
    echo "Post Method Only!";
    die();
} else {
    $cat = new WebFunctions;

    if ($cat->storeCategory($_POST)) {

        header('Location: categoryList.php');
    } else {
        die("ERROR!");
    }
}
