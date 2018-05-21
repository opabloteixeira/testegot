<?php 
include("../views/header.php");
include("../models/connection.php");
include("../models/guerra.php");

$id                          = $_POST["id"];
$id_familia_desafiadora      = $_POST["id_familia_desafiadora"];
$id_familia_desafiada        = $_POST["id_familia_desafiada"];
$data_inicio                 = inverteData($_POST["data_inicio"]);
$data_fim                    = inverteData($_POST["data_fim"]);
$id_familia_vencedora        = $_POST["id_familia_vencedora"];



    if(insertGuerra($connection, $id_familia_desafiadora, $id_familia_desafiada, $data_inicio,$data_fim, $id_familia_vencedora)) { ?>

    <div class="alert alert-success">
        <strong>Concluído!</strong> Guerra cadastrada com sucesso.
    </div>

<?php } else {
    $msg = mysqli_error($connection);
?>

    <div class="alert alert-danger">
        <strong>Erro!</strong> Não foi possível adicionar a Guerra.
    </div>


<?php
}
    
include("../views/footer.php");
 function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
} 



 ?>