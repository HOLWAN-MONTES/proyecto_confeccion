<?php
include('../../includes/conection.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_POST = json_decode(file_get_contents('php://input'), true);
    $nom_mat = $_POST['nom_mat'];
    $tipo_tel = $_POST['tipo_tela'];
    $marca_tel = $_POST['marc_tel'];
    $color_tel = $_POST['col_tel'];
    $metraje = $_POST['metraje'];
    $canti_rol = $_POST['cant_rol'];

    $consul = "INSERT INTO material_textil(ID_MATERIAL_TEXTIL, NOM_M_TEXTIL, ID_TIPO_TELA, ID_MARCA, ID_COLOR, 
            METRAJE, CANT_ROLLO) VALUES('', '$nom_mat', '$tipo_tel', '$marca_tel', '$color_tel', '$metraje', '$canti_rol')";
    $query = mysqli_query($conexion, $consul);
    if($query){
        $res = array(
            "err" => false,
            "status" => http_response_code(201),
            "statusText" => "Se registro el material", 
            
        );
        echo json_encode($query);
    }
    else{
        $res = array(
            "err" => false,
            "status" => http_response_code(500),
            "statusText" => "No se registro el material", 
           
        );
        echo json_encode($query);
    }
}
else{
    echo '<script> alert ("Error al registrar el material textil");</script>';
}

?>