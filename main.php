<?php
header("Content-type: application/json; charset=UTF-8");

include "app/Routes/ProductRoutes.php";

use app\Routes\ProductRoutes;

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$productRoute = new ProductRoutes();
$productRoute->handle($method, $path);
