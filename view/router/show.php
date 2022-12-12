<?php 


?>

<h3>Todos os Roteiros</h3>

<div>

    <table>

        <thead>

            <tr>

                <th>Nome do Roteiro</th>
                <th>Descrição</th>

            </tr>

        </thead>
        <tbody>

            <?php
                include('config/conecta.php');
                $query = mysqli_query($conecta, "SELECT * FROM router ORDER BY name") or die(mysqli_error());
            ?>

        </tbody>

    </table>

</div>