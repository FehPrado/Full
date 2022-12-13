<?php
include('complements.php');

define('HOST', 'http://localhost:8000/');
// define('HOST', 'http://fb.com/');

function path ($path) {
    echo HOST . $path;
}

$routes = [
    '/router' => 'view/router/index.php',
    '/router-new' => 'view/router/new.php',
    '/router-show' => 'view/router/show.php',
    '/router-destroy' => 'view/router/destroy.php',

];


$parms = $_REQUEST;

require($sidebar);



//somente final
require $routes[$_SERVER['REQUEST_URI']];

require($footer);
?>