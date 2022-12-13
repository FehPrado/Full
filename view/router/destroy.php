<?php

include('config/conecta.php');

$protocolo = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=="on") ? "https" : "http");
$url = '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

var_dump(parse_url($url, PHP_URL_QUERY));

$query = mysqli_prepare($conecta, "DELETE FROM router WHERE idrouter = " . base64_decode($_GET['$cap']));

echo ($cap);





?>

<br><br>
ajbfiausuiaekjdagfuadkasdnasbngvuasbdgiadsbkgjasdiugb
