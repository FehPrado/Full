<?php 

include('config/conecta.php');



?>

<h3>Todos os Roteiros</h3>

<div>

    <table>

        <thead>

            <tr>

                <th class="px-4">Nome do Roteiro</th>

                <th>Descrição</th>

            </tr>

        </thead>

        <tbody>

            <?php

                $show = mysqli_query($conecta, "SELECT * FROM router ORDER BY idrouter");
                if(mysqli_num_rows($show) >= 1 ) {
                    while($rshow = mysqli_fetch_assoc($show)){
            ?>
                <tr>
                    <td class="px-4"><?php echo $rshow['name'] ?></td>
                    <td><?php echo $rshow['description'] ?></td>
                    <td>
                        <div>

                            <ul>
                                <li>
                                    <a href="<?php path('router-new?idrouter' . $rshow['idrouter']) ?>">
                                        Alterar
                                    </a>
                                </li>
                                <li><a href="<?php path("router-destroy?idrouter=" . $rshow['idrouter']) ?>" onclick="if (!confirm('confirma a exclusão')){ return false }"> Remover </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>



                    <?php } ?>
               <?php } ?>

        </tbody>
        
    </table>

</div>