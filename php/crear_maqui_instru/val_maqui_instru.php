<?php
include('../../includes/conection.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_POST = json_decode(file_get_contents('php://input'), true);
    $serial = $_POST['serial'];
    $tipo_maqui = $_POST['tipo_maqui'];
    $marca_maqui = $_POST['marc_maqui'];
    $color_maqui = $_POST['col_maqui'];

    $consul = "INSERT INTO maquinaria(SERIAL, PLACA_SENA, ID_TIPO_MAQUI, ID_MARCA, ID_COLOR) VALUES ('$serial', '', 
            '$tipo_maqui', '$marca_maqui', '$color_maqui')";
    $query = mysqli_query($conexion, $consul);
    if($query){
        $res = array(
            "err" => false,
            "status" => http_response_code(201),
            "statusText" => "Se registro la maquinaria", 
            
        );
        echo json_encode($query);
    }
    else{
        $res = array(
            "err" => false,
            "status" => http_response_code(500),
            "statusText" => "No se registro la maquinaria", 
           
        );
        echo json_encode($query);
    }
}
else{
    echo '<script> alert ("Error al registrar la maquinaria");</script>';
}

?>