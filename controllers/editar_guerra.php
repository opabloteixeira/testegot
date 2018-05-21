<?php 
include("../views/header.php");
include("../models/connection.php");
include("../models/guerra.php");
include("../config/constants.php");


$id                          = $_POST["id"];
$id_familia_desafiadora      = $_POST["id_familia_desafiadora"];
$id_familia_desafiada        = $_POST["id_familia_desafiada"];
$data_inicio                 = inverteData($_POST["data_inicio"]);
$data_fim                    = inverteData($_POST["data_fim"]);
$id_familia_vencedora        = $_POST["id_familia_vencedora"];


    if(editGuerra($connection, $id, $id_familia_desafiadora, $id_familia_desafiada, $data_inicio,$data_fim, $id_familia_vencedora)) { ?>

        <div class="alert alert-success">
            <strong>Concluído!</strong> A Guerra foi alterada com sucesso.
        </div>
    <?php } else {
        $msg = mysqli_error($connection);
    ?>
        <div class="alert alert-danger">
            <strong>Erro!</strong> Não foi possível alterar a guerra.
        </div>
        <script>console.log( 'Erro ao excluir a guerra: " . <?= $msg ?> . "' );</script>
    <?php }



include("../views/footer.php"); 


 function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
} 



