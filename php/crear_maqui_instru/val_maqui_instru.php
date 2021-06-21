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
elseif($_SERVER['REQUEST_METHOD'] == "GET"){
    $tabla = $_GET['tabla'];
    if($tabla === "maquina"){
        $sql="SELECT * FROM maquinaria";
        $query_maq=mysqli_query($conexion,$sql);
        $data = [];
        while($row=mysqli_fetch_array($query_maq)){
            array_push($data, $row);
        }
        if($query_maq){
            $res = array(
                "err" => false,
                "status" => http_response_code(200),
                "statusText" => "Datos Encontrados con Ezyto",
                "data" => $data,
            );
            echo json_encode($res);
        }
        else{
            $res = array(
                "err" => true,
                "status" => http_response_code(500),
                "statusText" => "Datos No Encontrados",
            );
            echo json_encode($res);
        }
    }
}
else{
    echo '<script> alert ("Error al registrar la maquinaria");</script>';
}

?>