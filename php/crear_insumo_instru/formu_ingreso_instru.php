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
    $docu_pro = $_POST['doc_pro'];
    $user = $_POST['user'];

    date_default_timezone_set("America/Bogota");
    $fecha = date("o-m-d");
    $hora = date("H:i:s");
    $cons_ing = "INSERT INTO ingreso_material(ID_INGRESO_MATERIAL, ID_INSTRUCTOR, DOCUMENTO_PROVE, FECHA, HORA) 
            VALUES('', '$user', '$docu_pro', '$fecha', '$hora')";
    $query = mysqli_query($conexion, $cons_ing);

    $selec = "SELECT * FROM ingreso_material WHERE ID_INSTRUCTOR = '$user' ORDER BY ID_INGRESO_MATERIAL DESC LIMIT 1";
    $query2 = mysqli_query($conexion,$selec);
    $fila2 = mysqli_fetch_assoc($query2);
    $ingre = $fila2['ID_INGRESO_MATERIAL'];

    $consul = "INSERT INTO detalle_ingreso_materiales(ID_DETA_INGRESO, ID_INGRESO_MATERIAL, ID_INSUMOS, CANTIDAD_INSUMOS, 
            ID_MATERIAL_TEXTIL, CANTIDAD_MATERIAL_TEXTIL, detalle_ingreso_materiales.SERIAL, CANTIDAD_MAQUINARIA) VALUES('', '$ingre', '$insumo', '$cant_insumo',
            '$mate_textil', '$cant_m_textil', '$maquinaria', '$cant_maquinaria')";
    $query = mysqli_query($conexion, $consul);
    if($query){
        $res = array(
            "err" => false,
            "status" => http_response_code(201),
            "statusText" => "Se registro el user", 
            
        );
        echo json_encode($query);
    }
    else{
        $res = array(
            "err" => false,
            "status" => http_response_code(500),
            "statusText" => "No se registro el user", 
           
        );
        echo json_encode($query);
    }
}