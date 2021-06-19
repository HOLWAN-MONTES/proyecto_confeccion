<?php

    include('../../includes/conection.php');


    if($_POST['env-insumo']){
        $tip_insumo=$_POST["agre_tipo_insumo"];

        $consulta = "SELECT * FROM tipo_insumo WHERE NOM_INSUMO = '$tip_insumo'";
        $rray = $conexion->query($consulta);
        $arreg= $rray->num_rows;
        if($arreg >= 1){
            echo '<script> alert ("Este Insumo Ya Esta Registrado");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
        else{
            $consultar_t = "INSERT INTO tipo_insumo (NOM_INSUMO) VALUES('$tip_insumo')";
            $query_t = mysqli_query($conexion,$consultar_t);

            if(!$query_t){
                echo '<script> alert ("Error al registrar");</script>';
                echo '<script> window.location="../../users/administrador/admin.php" </script>';
            }
            else{
                echo '<script> alert ("Datos guardados exitosamente");</script>';
                echo '<script> window.location="../../users/administrador/admin.php" </script>';
            }
        }
    }
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }
?>