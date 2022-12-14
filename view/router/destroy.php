<?php

include('config/conecta.php');



$query = mysqli_prepare($conecta, "DELETE FROM router WHERE idrouter = " . base64_decode($_GET['?idrouter=9']));







?>


fdgdfgdfg