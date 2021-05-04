<?php
    require '../includes/conection.php';

    if($_POST["env-insumo"]){
        //Declaramos las variables para almacenar los datos digitados
        $tipo_insu = $_POST["tipo-insumo"];

        //Hacemos la consulta para que me seleccione los datos en la BD y valide
        $consul = "INSERT INTO tipo_insumo(NOM_INSUMO) VALUES('$tipo_insu')";
        $query = mysqli_query($conexion,$consul);

        if(!$query){
            echo '<script> alert ("Error al registrar el documento");</script>';
            echo '<script> window.location="../users/administrador/registro_users.php" </script>';
        }
        else{
            echo '<script> alert ("Exito al registrar el documento");</script>';
            echo '<script> window.location="../users/administrador/registro_users.php" </script>';
        }
    }
?>