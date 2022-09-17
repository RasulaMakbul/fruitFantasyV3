<?php

use AppControl\WebFunctions;

include "./vendor/autoload.php";
require_once "./src/AllFunctions.php";



if (isset($_SERVER['REQUEST_METHOD']) != "GET") {
    echo "Post Method Only!";
    die();
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $fun = new WebFunctions;
        $fun->deleteProduct($id);
        //print_r($id);
        header('Location:productList.php');
    } else {
        echo "no ID";
    }
}
