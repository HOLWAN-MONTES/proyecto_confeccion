<?php

    include('../../includes/conection.php');


    if($_POST['env-tela']){
        $tip_tela=$_POST["agre_tipo_tela"];

        $consultar_t = "INSERT INTO tipo_tela (NOM_TIPO_TELA) VALUES('$tip_tela')";
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
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }
?>