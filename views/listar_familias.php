<?php 
include("header.php");
include("../models/connection.php");
include("../models/familia.php"); 


    
if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>





<table class="table table-striped table-bordered">
 <div class="container">
    <tr class="row"> 
        <td class="col"></td>
        <td class="col"></td>
    </tr>
    <tr class="row">
        <th class="col-sm">Nome</th>
        <th class="col-sm">Quantidade</th>
        <th class="col-sm">Ações</th>
        <th class="col-sm">Ações</th>

    </tr>
    <?php
        $familias = getFamilias($connection);
        foreach($familias as $familia) : ?>
        
    <tr class="row">
        <td class="col-sm"><?= $familia['nome'] ?></td>
        <td class="col-sm"><?= $familia['quantidade_membros'] ?></td>
        <td class="col-sm"><a class="btn btn-dark float-left" href="editar_familia.php?id=<?=$familia['id']?>">Editar</a></td>
        <td class="col-sm">
            <form action="../controllers/deletar_familia.php" method="post">
                <input type="hidden" name="id" value="<?=$familia['id']?>" />
                <button class="btn btn-outline-dark">Remover</button>
            </form>
        </td>
    </tr>
</div>
    <?php endforeach ?>

</table>

<a href="cadastrar_familia.php"> <button type="button" class="btn btn-primary">Cadastrar nova família</button></a>

<?php include("footer.php"); ?>