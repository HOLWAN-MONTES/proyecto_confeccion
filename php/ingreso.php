<?php
session_start();
include('../includes/conection.php');

if($_POST["inicio"]){
    $documento = $_POST["docuaprendiz"];
    $clave = $_POST["claveaprendiz"];
    $tipo = $_POST["tipodocu"];

    if ($documento != "" and $clave != "" and $tipo != ""){

        $sql = "SELECT * from usuario where DOCUMENTO = '$documento' and PASSWORD = '$clave' and ID_TIPO_USU = '$tipo'";
        $consulta = mysqli_query($conexion,$sql);
        // if(!$consulta){
        //     var_dump(mysqli_error($conexion));
        //     exit;
        // }
        $dato_SQL = mysqli_fetch_assoc($consulta);

        if ($dato_SQL){
            $_SESSION['DOCUMENTO'] = $dato_SQL['DOCUMENTO'];
            $_SESSION['TIPO_USUARIO']= $dato_SQL['ID_TIPO_USU'];
            $_SESSION['NOMBRE']= $dato_SQL['NOMBRE'];
            $_SESSION['APELLIDO']= $dato_SQL['APELLIDO'];
            $_SESSION['EDAD']= $dato_SQL['EDAD'];
            $_SESSION['CORREO']= $dato_SQL['CORREO'];
            $_SESSION['TELEFONO']= $dato_SQL['TELEFONO'];

            if($_SESSION['TIPO_USUARIO'] == 1){
                header("location: ../users/administrador/admin.php");
            }
            elseif($_SESSION['TIPO_USUARIO'] == 2){
                header("location: ../users/instructor/instructor.php");
            }
            elseif($_SESSION['TIPO_USUARIO'] == 3){
                header("location: ../users/aprend_vocero/vocero.php");
            }
            else{
                echo "<script>alert('DATOS EQUIVOCADOS')</script>";
                header("location: ../login.php");
            }

        }else {
            echo "<script>alert('DATOS INCORRECTOS')</script>";
            header("location: ../login.php");
        }

        
    }else {
        echo "<script>alert('DATOS VACIOS')</script>";
        header("location: ../login.php");
    }
}
else{
    echo "<script>alert('DATOS VACIOS X2')</script>";
}
?>
