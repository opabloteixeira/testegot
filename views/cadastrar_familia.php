<?php 
include("header.php");
include("../models/connection.php");
include("../models/familia.php");


?>

<h1>Cadastrar Família</h1>
<div class="row justify-content-md-center user-edit">
    <div class="col col-lg-6">
        <form action="../controllers/cadastrar_familia.php" method="POST" id="form-edit">
 

            <div class="col-12">
                <div class="group">      
                    <input type="text" name="nome"  required autofocus />
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Nome</label>
                </div><!-- group -->
            </div><!-- col-12 -->

            <div class="col-12">
                <div class="group">      
                    <input type="text" name="quantidade_membros"  required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Quantidade de Membros</label>
                </div><!-- group -->
            </div><!-- col-12 -->


            <div class="buttons col-12">
                <button class="btn btn-dark" name="send" type="submit">Save</button>
<!--                 <button class="btn btn-outline-dark" onclick="goBack()">Cancelar</button> -->
            </div><!-- col-12 -->

        </form>
    </div><!-- col col-lg-6 -->
</div><!-- row justify-content-md-center user-add -->

<?php include("footer.php"); ?>