<?php
/*
$conecta = mysqli_connect("127.0.0.1","root","","projeto_pi");
*/
//$conecta = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
//mysqli_select_db($conecta, 'projeto_epi');


$conecta = mysqli_connect('localhost', 'root', '123456789');

mysqli_select_db($conecta, 'full');

?>