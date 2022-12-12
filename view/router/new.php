<?php
    include('config/conecta.php');

    if(isset($_POST['btnSend'])){

        //insert
        mysqli_query($conecta, "INSERT INTO router
        (name, description)
        VALUES(
            '" . strtoupper(trim($_POST['txtName'])) . "',
            '" . (trim($_POST['txtDescription'])) . "'
            
            )"
        );
    }else{
        echo 'morreyu';
    };
?>


<h3>Crie</h3>

<form name="newRouter" method="post">
    <div>
        <div>
            <input type="text" placeholder="Nome do Roteriro" name="txtName">
        </div>
        <div>
            <input type="text" placeholder="Descrição" name="txtDescription">
        </div>
    </div>
    <div>
        <input type="submit" value="Enviar" class="btn btn-primary" name="btnSend">
    </div>
</form>