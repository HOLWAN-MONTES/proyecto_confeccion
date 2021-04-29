<?php
require_once('../includes/conection.php');

$documento = $_POST["docuaprendiz"];
$clave = $_POST["claveaprendiz"];
$tipo = $_POST["tipodocu"];

if ($documento != "" and $clave != "" and $tipo != ""){

    $sql = "SELECT * from usuario where DOCUMENTO = $documento and PASSWORD = $clave and ID_TIPO_USU =$tipo";
    $consulta = mysqli_query($conexion,$sql);
    $dato_SQL = mysqli_fetch_assoc($consulta);

    if ($dato_SQL){

        $_SESSION['TIPO_USUARIO']= $dato_SQL['ID_TIP_USU'];
        $_SESSION['NOMBRE']= $dato_SQL['NOMBRE'];
        $_SESSION['APELLIDO']= $dato_SQL['APELLIDO'];
        $_SESSION['EDAD']= $dato_SQL['EDAD'];
        $_SESSION['CORREO']= $dato_SQL['CORREO'];
        $_SESSION['TELEFONO']= $dato_SQL['TELEFONO'];

        header("location: ../users/administrador/");

    }else {
        echo("<script>alert('DATOS INCORRECTOS')</script>");
        header("location: ../login.php");
    }

}else {
    echo("<script>alert('DATOS VACIOS')</script>");
    header("location: ../login.php");
}
?>
