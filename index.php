<?php
include('complements.php');

define('HOST', 'http://localhost:8001/');
// define('HOST', 'http://fb.com/');

$routes = [
    '/oi' => 'view/oi.php',
    '/router' => 'view/router/index.php',
    '/router-new' => 'view/router/new.php',
    '/router-show' => 'view/router/show.php'

];
require($sidebar);



//somente final
require $routes[$_SERVER['REQUEST_URI']];

require($footer);
?>