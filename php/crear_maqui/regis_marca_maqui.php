<?php

    include('../../includes/conection.php');

    if($_POST['env-marca']){
        $marca=$_POST["agre_marca"];
    
        $consultar_m = "INSERT INTO marca (NOM_MARCA) VALUES('$marca')";
        $query_m = mysqli_query($conexion,$consultar_m);
    
        if(!$query_m){
            echo '<script> alert ("Error al registrar la marca de la maquinaria");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
        else{
            echo '<script> alert ("Datos guardados correctamente al registrar la marca de la maquinaria");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
    
    }
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }
?>