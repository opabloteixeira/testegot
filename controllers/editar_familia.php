<?php 
include("../views/header.php");
include("../models/connection.php");
include("../models/familia.php");



$id                 = $_POST["id"];
$nome               = $_POST["nome"];
$quantidade_membros = $_POST["quantidade_membros"];


    if(editFamilia($connection, $id, $nome, $quantidade_membros)) { ?>



        <div class="alert alert-success">
            <strong>Concluído!</strong> A família <?= $nome; ?> foi alterada com sucesso.
        </div>
    <?php } else {
        $msg = mysqli_error($connection);
    ?>
        <div class="alert alert-danger">
            <strong>Erro!</strong> Não foi possível alterar a família.
        </div>
        <script>console.log( 'Erro ao excluir a família: " . <?= $msg ?> . "' );</script>
    <?php }



include("../views/footer.php"); 

