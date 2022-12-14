<?php 

include('config/conecta.php');



?>

<h3>Todos os Roteiros</h3>


    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome do Roteiro</th>
      <th scope="col">Descrição</th>
      <th scope="col" class="px-5">Opções</th>
    </tr>
  </thead>
  <tbody>

    <?php

        $show = mysqli_query($conecta, "SELECT * FROM router ORDER BY idrouter");
        if(mysqli_num_rows($show) >= 1 ) {
            while($rshow = mysqli_fetch_assoc($show)){
    ?>
    <tr>
      <th><?php echo $rshow['idrouter']?></th>
      <td><?php echo $rshow['name'] ?></td>
      <td><?php echo $rshow['description'] ?></td>
      <td>
            <ul>
                <a class="btn btn-primary" href="<?php path('router-new?idrouter' . $rshow['idrouter']) ?>">  Alterar </a>            
                <a class="btn btn-danger" href="<?php path("router-destroy?idrouter=" . $rshow ['idrouter'] ) ?>" onclick="if (!confirm('confirma a exclusão')){ return false }"> Remover </a>
            </ul>
        </td>
        </tr>
        <?php } ?>
    <?php } ?>
  </tbody>
</table>

