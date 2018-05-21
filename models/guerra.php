<?php 












//********************//
// Get Guerras Function //
//********************//
function getGuerras($connection) {
    $guerras = array();

    $query = "SELECT * FROM guerra";


    $result = mysqli_query($connection, $query);
    while($guerra = mysqli_fetch_assoc($result)) {
        array_push($guerras, $guerra);
    }

    return $guerras;
}




//**************************//
// Get guerra By ID Function //
//**************************//
function getGuerraById($connection, $id) {

    $query = "SELECT * FROM guerra WHERE id = {$id}";

    $result = mysqli_query($connection, $query);

    return mysqli_fetch_assoc($result);
}


//**************************//
// Filtra pesquisa Function //
//**************************//
function filtraGuerras($connection, $inicio, $fim) {


    $query = "SELECT * FROM guerra WHERE data_inicio >='$inicio' and data_fim <= '$fim' ORDER BY data_inicio ASC";

    $result = mysqli_query($connection, $query);

    // return mysqli_fetch_assoc($result);

    if ($result->num_rows > 0) {
        return  $result->fetch_all(MYSQLI_ASSOC);
    }  
}









//********************//
// Edit guerra Function //
//********************//

function editGuerra($connection, $id, $id_familia_desafiadora, $id_familia_desafiada, $data_inicio,$data_fim, $id_familia_vencedora) {

    $query = "UPDATE guerra SET id_familia_desafiadora = '{$id_familia_desafiadora}',
                                id_familia_desafiada   = '{$id_familia_desafiada}',
                                data_inicio            = '{$data_inicio}',
                                data_fim               = '{$data_fim}',
                                id_familia_vencedora   = '{$id_familia_vencedora}'
                                WHERE id = '{$id}'";
    
       return mysqli_query($connection, $query);
    
}



//**********************//
function insertGuerra($connection, $id_familia_desafiadora, $id_familia_desafiada, $data_inicio,$data_fim, $id_familia_vencedora) {
    $query = "INSERT INTO guerra (id_familia_desafiadora, id_familia_desafiada,data_inicio, data_fim, id_familia_vencedora) VALUES ('{$id_familia_desafiadora}', '{$id_familia_desafiada}','{$data_inicio}','{$data_fim }','{$id_familia_vencedora }')";
    
    return mysqli_query($connection, $query);
}








//**********************//
// Delete Guerra Function //
//**********************//
function deleteGuerra($connection, $id) {
    if ($id == 1){
        die('<script type="text/javascript">window.location.href="";</script>');
    }
    $query = "DELETE FROM guerra WHERE id = {$id}";
    return mysqli_query($connection, $query);
}





