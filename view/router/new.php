<?php
    include('config/conecta.php');

    if(isset($_POST['btnEnviar'])){
        
        //insert(julio)
        $prep = mysqli_prepare($conecta, "INSERT INTO router (name, description) VALUES (?, ?);");
        $prep->bind_param("ss", trim($_POST['txtName']), trim($_POST['txtDescription']));
        $prep->execute();

        //insert(felipe)
        // mysqli_query($conecta, "INSERT INTO router
        // (name, description)
        // VALUES(
        //     '" . (trim($_POST['txtName'])) . "',
        //     '" . (trim($_POST['txtDescription'])) . "' 
        //     )"
        // );
    }

?>


<h3>Crie</h3>

<form method="post">
    <div>
        <div>
            <input type="text" placeholder="Nome do Roteriro" name="txtName">
            <input type="text" placeholder="Descrição" name="txtDescription">
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary" name="btnEnviar"> Cadastrar</button>
    </div>
</form>