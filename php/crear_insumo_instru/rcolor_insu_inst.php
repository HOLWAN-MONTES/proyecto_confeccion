<?php

    include('../../includes/conection.php');

    if($_POST['env-color']){
        $color=$_POST["agre_color"];
    
        $consultar_c = "INSERT INTO color (NOM_COLOR) VALUES('$color')";
        $query_c = mysqli_query($conexion,$consultar_c);
    
        if(!$query_c){
            echo '<script> alert ("Error al registrar el color del insumo");</script>';
            echo '<script> window.history.back();</script>';
        }
        else{
            echo '<scrip> alert ("Datos guardados correctamente al registrar el color del insumo");</scrip>';
            echo '<script> window.history.back();</script>';
        }
    
    }
    else{
        echo '<script> alert ("Ups algo salio mal, intentalo de nuevo ");</script>';
        echo '<script> window.history.back();</script>'; 
    }
?>