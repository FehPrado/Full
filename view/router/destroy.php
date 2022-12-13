<?php

include('config/conecta.php');

$query = mysqli_query($conecta, "DELETE FROM router WHERE idrouter = " . $_GET['idrouter']);



// $query = mysqli_query($conecta, "DELETE FROM itinerary WHERE id = " . base64_decode($_GET["id"]));

if($query) {
	$type = base64_encode("alert-success");
	$msg = base64_encode("Roteiro removido com sucesso!");
} else {
	$type = base64_encode("alert-danger");
	$msg = base64_encode("Falha ao tentar remover o roteiro!");
}

?>
oi