<?php
    include('config/conecta.php');

    if(isset($_POST['btnEnviar'])){

        //insert
        mysqli_query($conecta, "INSERT INTO router
        (name, description)
        VALUES(
            '" . (trim($_POST['txtName'])) . "',
            '" . (trim($_POST['txtDescription'])) . "'
            
            )"
        );
    }
?>


<h3>Crie</h3>

<form method="post">
    <div>
        <div>
            <input type="text" placeholder="Nome do Roteriro" name="txtName">
        </div>
        <div>
            <input type="text" placeholder="Descrição" name="txtDescription">
        </div>
    </div>
    <div>
        <input type="submit" value="Enviar" class="btn btn-primary" name="btnEnviar">
    </div>
</form>