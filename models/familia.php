<?php 







//********************//
// Edit familias Function //
//********************//

function editFamilia($connection, $id, $nome, $quantidade_membros) {
    $query = "UPDATE familia SET nome = '{$nome}', quantidade_membros = '{$quantidade_membros}' WHERE id = '{$id}'";
    
       return mysqli_query($connection, $query);


    
}




//**************************//
// Get familias By ID Function //
//**************************//
function getFamiliaById($connection, $id) {

    $query = "SELECT * FROM familia WHERE id = {$id}";

    $result = mysqli_query($connection, $query);

    return mysqli_fetch_assoc($result);
}









//********************//
// Get familias Function //
//********************//
function getFamilias($connection) {
    $familias = array();
    $query = "SELECT * FROM familia";
    $result = mysqli_query($connection, $query);
    while($familia = mysqli_fetch_assoc($result)) {
        array_push($familias, $familia);
    }

    return $familias;
}



//**********************//
// Delete familia Function //
//**********************//
function deleteFamilia($connection, $id) {
    if ($id == 1){
        die('<script type="text/javascript">window.location.href="";</script>');
    }
    $query = "DELETE FROM familia WHERE id = {$id}";
    return mysqli_query($connection, $query);
}







//**********************//
// Insert Familia Function //
//**********************//
function insertFamilia($connection, $nome, $quantidade_membros) {
    $query = "INSERT INTO familia (nome, quantidade_membros) VALUES ('{$nome}', '{$quantidade_membros}')";
    
    return mysqli_query($connection, $query);
}







