<?php

    include('../../includes/conection.php');

    if($_POST['env-marca']){
        $marca=$_POST["agre_marca"];
    

        $consulta = "SELECT * FROM marca WHERE NOM_MARCA = '$marca'";
        $rray = $conexion->query($consulta);
        $arreg= $rray->num_rows;
        if($arreg >= 1){
            echo '<script> alert ("Esta Marca Ya Esta Registrada");</script>';
            echo '<script> window.location="../../users/instructor/instructor.php" </script>';
        }
        else{
            $consultar_m = "INSERT INTO marca (NOM_MARCA) VALUES('$marca')";
            $query_m = mysqli_query($conexion,$consultar_m);
        
            if(!$query_m){
                echo '<script> alert ("Error al registrar");</script>';
                echo '<script> window.location="../../users/instructor/instructor.php" </script>';
            }
            else{
                echo '<script> alert ("Datos guardados exitosamente");</script>';
                echo '<script> window.location="../../users/instructor/instructor.php" </script>';
            }
        }
    }
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.location="../../users/instructor/instructor.php" </script>';
    }
?>