<?php

    include('../includes/conection.php');

    if($_POST['env-maquinaria']){
        $tipo_maquinaria=$_POST["agre_maquinaria"];
    
        $consultar_maq = "INSERT INTO tipo_maquinaria (NOM_TIPO_MAQUI) VALUES('$tipo_maquinaria')";
        $query_maq = mysqli_query($conexion,$consultar_maq);
    
        if(!$query_maq){
            echo '<script> alert ("Error al registrar el tipo de maquinaria");</script>';
            echo '<script> window.location="../crear/crear_maquinaria.php" </script>';
        }
        else{
            echo '<script> alert ("Datos guardados correctamente al registrar el tipo de maquinaria");</script>';
            echo '<script> window.location="../crear/crear_maquinaria.php" </script>';
        }
    
    }
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.location="../crear/crear_maquinaria.php" </script>';
    }
?>