<?php

    include('../../includes/conection.php');


    if($_POST['env-insumo']){
        $tip_insumo=$_POST["agre_tipo_insumo"];

        $consultar_t = "INSERT INTO tipo_insumo (NOM_INSUMO) VALUES('$tip_insumo')";
        $query_t = mysqli_query($conexion,$consultar_t);

        if(!$query_t){
            echo '<script> alert ("Error al registrar el tipo de insumo");</script>';
            echo '<script> window.location="../../users/instructor/instructor.php" </script>';
        }
        else{
            echo '<script> alert ("Datos guardados correctamente al registrar el tipo de insumo");</script>';
            echo '<script> window.location="../../users/instructor/instructor.php" </script>';
        }
    }
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.location="../../users/instructor/instructor.php" </script>';
    }
?>