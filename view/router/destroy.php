<?php

include('config/conecta.php');

  $query = mysqli_query($conecta, "DELETE FROM router WHERE idrouter = " . base64_decode($_GET['?idrouter']));


?>