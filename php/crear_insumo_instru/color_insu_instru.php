<?php

    include('../../includes/conection.php');

    if($_POST['env-color']){
        $color=$_POST["agre_color"];

        $consulta = "SELECT * FROM color WHERE NOM_COLOR = '$color'";
        $rray = $conexion->query($consulta);
        $arreg= $rray->num_rows;
        if($arreg >= 1){
            echo '<script> alert ("Este Color Ya Esta Registrado");</script>';
            echo '<script> window.history.back();</script>';
        }
        else{
            $consultar_c = "INSERT INTO color (NOM_COLOR) VALUES('$color')";
        $query_c = mysqli_query($conexion,$consultar_c);
    
        if(!$query_c){
            echo '<script> alert ("Error al registrar");</script>';
            echo '<script> window.history.back();</script>';
        }
        else{
            echo '<scrip> alert ("Datos guardados exitosamente");</scrip>';
            echo '<script> window.history.back();</script>';
        }

        }
    
    
    }
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.history.back();</script>'; 
    }
?>