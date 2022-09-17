<?php

use AppControl\WebFunctions;

include "./vendor/autoload.php";
require_once "./src/AllFunctions.php";



if (isset($_SERVER['REQUEST_METHOD']) != "POST") {
    echo "Post Method Only!";
    die();
} else {
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    $users = new WebFunctions;
    if ($users->storeUser($_POST)) {
        header('Location: login.php');
    } else {
        die("ERROR!");
    }
}
