<?php
    require '../../includes/conection.php';
    header('Content-Type: application/json');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = json_decode(file_get_contents('php://input'), true);
        $docume = $_POST['docum'];
        
        $consul = "SELECT * FROM usuario WHERE DOCUMENTO = '$docume'";
        $query = mysqli_query($conexion, $consul);
        $file = mysqli_fetch_assoc($query);
        $res; 

        if($file){
            $res = array(
                'err' => false, 
                'status' => http_response_code(200),
                'statusText' => 'Usted hizo la consulta bien',
                'data' => $file
            ); 
        }
        else{
            $res = array(
                'err' => true, 
                'status' => http_response_code(200),
                'statusText' => 'Usted no hizo la consulta bien',
                'data' => []
            ); 
        }
        echo json_encode($res);

    }
    elseif($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $_PUT = json_decode(file_get_contents('php://input'), true);
        $telefono = $_PUT['tele'];
        $correo = $_PUT['cor'];
        $contra = $_PUT['contra'];
        $docume = $_PUT['docum'];

        $consul = "UPDATE usuario SET usuario.PASSWORD = '$contra', TELEFONO = $telefono, CORREO = '$correo' 
                    WHERE DOCUMENTO = '$docume'";
        $query = mysqli_query($conexion, $consul);
        $res;
        // UPDATE usuario SET usuario.PASSWORD = '54', TELEFONO = 3124124, CORREO = 'oscarllanos.com' WHERE DOCUMENTO = '1007'
        if($query){
            $res = array(
                'err' => false, 
                'status' => http_response_code(200),
                'statusText' => 'Hizo la consulta bien',
                'data' => $query
            ); 
            
        }
        else{
            $res = array(
                'err' => true, 
                'status' => http_response_code(500),
                'statusText' => 'No hizo la consulta bien',
                'data' => []
            ); 
        }
        echo json_encode($res);
    }

?>