<?php
require '../../includes/conection.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_POST = json_decode(file_get_contents('php://input'), true);
    $insumo = $_POST['insumo'];
    $cant_insumo = $_POST['cant_insumo'];
    $mate_textil = $_POST['mate_textil'];
    $cant_m_textil = $_POST['cant_m_textil'];
    $maquinaria = $_POST['maquinaria'];
    $cant_maquinaria = $_POST['cant_maquinaria'];

    $consul = "INSERT INTO detalle_ingreso_materiales(ID_INGRESO_MATERIAL, ID_INSUMOS, CANTIDAD_INSUMOS, 
        ID_MATERIAL_TEXTIL, CANTIDAD_MATERIAL_TEXTIL, SERIAL, CANTIDAD_MAQUINARIA) VALUES('$')";
    $query = mysqli_query($conexion, $consul);
    if($query){
        $res = array(
            "err" => false,
            "status" => http_response_code(201)
            "statusText" => "Se registro el user", 

        );
        echo json_encode($res);
    }
    else{
        $res = array(
            "err" => false,
            "status" => http_response_code(500),
            "statusText" => "No se registro el user", 

        );
        echo json_encode($res);
    }
}