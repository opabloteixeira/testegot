<?php 
include("../views/header.php");
include("../models/connection.php");
include("../models/familia.php");

$nome                = $_POST["nome"];
$quantidade_membros  = $_POST["quantidade_membros"];

if (insertFamilia($connection, $nome, $quantidade_membros)) { ?>

    <div class="alert alert-success">
        <strong>Concluído!</strong> Família cadastrada com sucesso.
    </div>

<?php } else {
    $msg = mysqli_error($connection);
?>

    <div class="alert alert-danger">
        <strong>Erro!</strong> Não foi possível adicionar a família.
    </div>


<?php
}
    
include("../views/footer.php"); ?>