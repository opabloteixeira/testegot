<?php 
include("../views/header.php");
include("../models/connection.php");
include("../models/familia.php");
include("../config/constants.php");

$id = $_POST['id'];

if(deleteFamilia($connection, $id)) { ?>
    
    <div class="alert alert-success">
        <strong>Concluído!</strong> Família removida com sucesso.
    </div>

<?php } else {
    $msg = mysqli_error($connection);
?>
    <div class="alert alert-danger">
        <strong>Erro!</strong> Não é possível remover esta família.
    </div>
    <script>console.log( 'Erro ao excluir a família: " . <?= $msg ?> . "' );</script>
<?php }

?>