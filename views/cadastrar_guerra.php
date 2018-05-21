<?php 
include("header.php");
include("../models/connection.php");
include("../models/guerra.php");
include("../models/familia.php");


$familias   = getFamilias($connection);

 


?>

<h1>Cadastrar Guerra</h1>
<div class="row justify-content-md-center user-edit">
    <div class="col col-lg-6">
        <form action="../controllers/cadastrar_guerra.php" method="POST" id="form-edit">
            <input type="hidden" name="id" value="<?=$guerra['id']?>" />

                <label class="label_select">Desafiante</label>
                <div class="input-group mb-3">
              
                  <select name="id_familia_desafiadora" class="custom-select" id="">
                    <option selected>Escolha a família desafiante</option>
                    
                    <?php foreach ($familias as $f){ ?>
                        <option value="<?=$f['id']?>"><?=$f['nome']?></option>
                    <?php } ?>
                  </select>
                </div>

             

              <label class="label_select">Desafiada</label>
                <div class="input-group mb-3">
                  <select name="id_familia_desafiada" class="custom-select" id="">
                    <option selected>Escolha a família desafiada</option>
                    <?php foreach ($familias as $f){ ?>
                        <option value="<?=$f['id']?>"><?=$f['nome']?></option>
                    <?php } ?>
                  </select>

                </div>

<br>


            <div class="col-12">
                <div class="group">      
                    <input type="text" name="data_inicio" required autofocus />
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Data Inicial (formato XX/XX/XXXX)</label>
                </div><!-- group -->
            </div><!-- col-12 -->



            <div class="col-12">
                <div class="group">      
                    <input type="text" name="data_fim" required autofocus />
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Data Fim (formato XX/XX/XXXX)</label>
                </div><!-- group -->
            </div><!-- col-12 -->




             <label class="label_select">Família Vencedora</label>
                <div class="input-group mb-3">
              
                  <select name="id_familia_vencedora" class="custom-select" id="">
                    <option selected>Escolha a família vencedora</option>
                    
                    <?php foreach ($familias as $f){ ?>
                        <option value="<?=$f['id']?>"><?=$f['nome']?></option>
                    <?php } ?>
                  </select>
                </div>




            <div class="buttons col-12">
                <button class="btn btn-dark" name="send" type="submit">Save</button>

            </div><!-- col-12 -->

        </form>
    </div><!-- col col-lg-6 -->
</div><!-- row justify-content-md-center user-add -->
<?php

 include("footer.php");

 function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
} 



?>