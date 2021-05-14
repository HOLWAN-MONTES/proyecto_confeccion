<?php

    include('../includes/conection.php');

    if($_POST['env-color']){
        $color=$_POST["agre_color"];
    
        $consultar_c = "INSERT INTO color (NOM_COLOR) VALUES('$color')";
        $query_c = mysqli_query($conexion,$consultar_c);
    
        if(!$query_c){
            echo '<script> alert ("Error al registrar el color del material textil");</script>';
            echo '<script> window.location="../crear/crear_material.php" </script>';
        }
        else{
            echo '<script> alert ("Datos guardados correctamente al registrar el color del material");</script>';
            echo '<script> window.location="../crear/crear_material.php" </script>';
        }
    
    }
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.location="../crear/crear_material.php" </script>';
    }
?>