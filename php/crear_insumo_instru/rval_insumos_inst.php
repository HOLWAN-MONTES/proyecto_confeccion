<?php
require '../../includes/conection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_POST = json_decode(file_get_contents('php://input'), true);
    $tip_insu = $_POST['tip_ins'];
    $nom_insu = $_POST['nom_insu'];
    $marca_insu = $_POST['marc_insu'];
    $color_insu = $_POST['col_insu'];

    $cosul_insu = "SELECT * FROM insumos WHERE NOM_INSUMOS = '$nom_insu' AND ID_TIPO_INSUMO = '$tip_insu' 
                    AND ID_MARCA = '$marca_insu' AND ID_COLOR = '$color_insu'";
    $ray = $conexion->query($cosul_insu);
    $arre = $ray->num_rows;
    // if(!$arre) {
    //     var_dump(mysqli_error($conexion));
    //     exit;
    // }
    if($arre >= 1){
        // echo '<script> alert ("Usuario Ya Esta Registrado") </script>'; 
        $res = array(
            "err" => false,
            "status" => http_response_code(500),
            "statusText" => "No se registro el insumo",
            
        );
        echo json_encode($arre);
        // echo '<script> alert ("Usuario Ya Esta Registrado"); 
        //         window.location="../../users/instructor/instructor.php"; 
        //       </script>';
    }
    else{
        $consul = "INSERT INTO insumos(ID_INSUMOS, NOM_INSUMOS, ID_TIPO_INSUMO, ID_MARCA, ID_COLOR) VALUES('', '$nom_insu',
                '$tip_insu', '$marca_insu', '$color_insu')";
        $query = mysqli_query($conexion, $consul);
        if($query){
            $res = array(
            "err" => false,
            "status" => http_response_code(201),
            "statusText" => "Se registro el insumo",
        
        
            );
            echo json_encode($query);
        }
        else{
            $res = array(
            "err" => false,
            "status" => http_response_code(500),
            "statusText" => "No se registro el insumo",
            
            );
            echo json_encode($query);
        
        }
    }
        
}
elseif($_SERVER['REQUEST_METHOD'] == "GET"){
    $tabla = $_GET['tabla'];
    if($tabla === "insumo"){
        $sql="SELECT * FROM insumos";
        $query_insu=mysqli_query($conexion,$sql);
        $data = [];
        while($row=mysqli_fetch_array($query_insu)){
        array_push($data, $row);
        
        }
        if($query_insu){
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
    echo '<script> alert("Error al registrar el insumo");</scripwindow.location=>';
}
?>