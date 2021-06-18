<?php

    include('../../includes/conection.php');

    if($_POST['env-maquinaria']){
        $tipo_maquinaria=$_POST["agre_maquinaria"];

        $consulta = "SELECT * FROM tipo_maquinaria WHERE NOM_TIPO_MAQUI = '$tipo_maquinaria'";
        $rray = $conexion->query($consulta);
        $arreg= $rray->num_rows;
        if($arreg >= 1){
            echo '<script> alert ("Esta Maquinaria Ya Esta Registrada");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
        else{
            $consultar_maq = "INSERT INTO tipo_maquinaria (NOM_TIPO_MAQUI) VALUES('$tipo_maquinaria')";
            $query_maq = mysqli_query($conexion,$consultar_maq);
            
            if(!$query_maq){
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