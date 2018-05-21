<?php 
include("header.php");
include("../models/connection.php");
include("../models/guerra.php"); 
include("../models/familia.php"); 


    
if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>




    <div class="col-md-12">
        <form class="form-inline form-filtro" action="../views/listar_guerras.php" method="get">

        <div class="form-group">
          <label class="sr-only" for="filtro-data-inicial">Data inicial</label>
          <input type="date" name="data_inicio" class="form-control" id="filtro-data-inicial">
        </div>

        <div class="form-group">
          <label class="sr-only" for="filtro-data-final">Data final</label>
          <input type="date" name="data_fim" class="form-control" id="filtro-data-final">
        </div>


        <div class="form-group">
          <button type="submit" class="btn btn-primary">Filtrar</button>
          <button type="reset" class="btn btn-default">Limpar</button>
        </div>
      </form>
    </div>








<table class="table table-striped table-bordered">
 <div class="container">
    <tr class="row"> 
        <td class="col"></td>
        <td class="col"></td>
    </tr>
    <tr class="row">
        <th class="col-sm">Família desafiadora</th>
        <th class="col-sm">Família desafiada</th>
        <th class="col-sm">Data Inicio</th>
        <th class="col-sm">Data Fim</th>
        <th class="col-sm">Família vencedora</th>
        <th class="col-sm">Editar</th>
        <th class="col-sm">Remover</th>

    </tr>
    <?php

    $inicio ="";
    $fim ="";
    if ($_GET) {
    
        $inicio = $_GET["data_inicio"];
        $fim  = $_GET["data_fim"];
    }


        if ($inicio != "" && $fim != ""){
          $guerras = filtraGuerras($connection, $inicio, $fim);

         // echo "<pre>";
         // var_dump($guerras); die;


        }else{

          $guerras = getGuerras($connection);
        }
        // echo "<pre>";
        // var_dump($guerras); die;
        foreach($guerras as $guerra) : ?>




        
    <tr class="row">
        <?php 
            $desafiadora;
            $desafiada;
            $vencedora;

            $familias = getFamilias($connection);

            foreach ($familias as $familia) {

               if ($familia['id'] == $guerra["id_familia_desafiadora"] ) {
                  $desafiadora = $familia['nome'];
               }               
               
               if ($familia['id'] == $guerra["id_familia_desafiada"] ) {
                  $desafiada = $familia['nome'];
               }               

               if ($familia['id'] == $guerra["id_familia_vencedora"] ) {
                  $vencedora = $familia['nome'];
               }
            }   

        ?>

        <td class="col-sm"><?= $desafiadora; ?></td>
        <td class="col-sm"><?= $desafiada; ?></td>
        <td class="col-sm"><?= inverteData($guerra['data_inicio']) ?></td>
        <td class="col-sm"><?= inverteData($guerra['data_fim'])?></td>
        <td class="col-sm"><?= $vencedora ?></td>

        <td class="col-sm"><a class="btn btn-dark float-left" href="editar_guerra.php?id=<?=$guerra['id']?>">Editar</a></td>
        <td class="col-sm">
            <form action="../controllers/deletar_guerra.php" method="post">
                <input type="hidden" name="id" value="<?=$guerra['id']?>" />
                <button class="btn btn-outline-dark">Remover</button>
            </form>
        </td>
    </tr>
</div>
    <?php endforeach ?>

</table>

<a href="cadastrar_guerra.php"> <button type="button" class="btn btn-primary">Cadastrar nova guerra</button></a>


<?php include("footer.php"); 


 function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
} 
?>