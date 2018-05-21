<?php 
include("../views/header.php");
include("../models/connection.php");
include("../models/guerra.php");
include("../config/constants.php");

$id = $_POST['id'];

if(deleteGuerra($connection, $id)) { ?>
    
    <div class="alert alert-success">
        <strong>Concluído!</strong> Guerra removida com sucesso.
    </div>

<?php } else {
    $msg = mysqli_error($connection);
?>
    <div class="alert alert-danger">
        <strong>Erro!</strong> Não é possível remover esta guerra.
    </div>
    <script>console.log( 'Erro ao excluir a Guerra: " . <?= $msg ?> . "' );</script>
<?php }

?>