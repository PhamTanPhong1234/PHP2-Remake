<?php 
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
} else {
    $controller = 'product';
    $action = 'index';
}
require_once('routes.php');
$route = new routes();
$route->checkRoute($controller, $action);
?> 