<?php

use AppControl\WebFunctions;

include "./vendor/autoload.php";
require_once "./src/AllFunctions.php";



if (isset($_SERVER['REQUEST_METHOD']) != "POST") {
    echo "Post Method Only!";
    die();
} else {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $fun = new WebFunctions;
        $fun->updateProduct($_POST, $id);
        //print_r($id);
        header('Location:productList.php');
    } else {
        echo "no ID";
    }
}
