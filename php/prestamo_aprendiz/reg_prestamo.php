<?php
include('../../includes/conection.php');
?>
<?php
if(isset($_POST['regis_prestamo'])){
    $insumo=$_POST['insumo'];
    $cant_insumo=$_POST['cant_insumo'];
    $ma_textil=$_POST['mate_textil'];
    $cant_textil=$_POST['cant_m_textil'];

    $regis_pres= "INSERT INTO detalle_prestamo(ID_PRES_MATE, ID_INSUMOS, CANTIDAD_INSU, ID_MATERIAL_TEXTIL, CANTIDAD_MAT_TEXT)
    VALUES ('','$insumo', '$cant_insumo', '$ma_textil', '$cant_textil')";
    $query = mysqli_query($conexion,$regis_pres);

    if(!$query){
        echo '<script> alert ("Error al registrar el prestamo");</script>';
        echo '<script> window.location="../../users/aprend_vocero/vocero.php" </script>';
    }
    else{
        echo '<script> alert ("Se guardaron los datos exitosamente, gracias por registrar el prestamo");</script>';
        echo '<script> window.location="../../users/aprend_vocero/vocero.php" </script>';
    }
}
else{
    echo '<script> alert ("Algo fallo, intentalo de nuevo");</script>';
    echo '<script> window.location="../../users/aprend_vocero/vocero.php" </script>';
}

?>
<?php
if(isset($_POST['regis_prestamo'])){
    $aprendiz=$_POST['aprendiz'];

    $insertar_pres= "INSERT INTO prestamo_material(ID_APRENDIZ) VALUES('$aprendiz')";
    $query = mysqli_query($conexion,$insertar_pres);

    if(!$query){
        echo '<script> alert ("Error al registrar el prestamo");</script>';
        echo '<script> window.location="../../users/aprend_vocero/vocero.php" </script>';
    }
    else{
        echo '<script> alert ("Se guardaron los datos exitosamente, gracias por registrar el prestamo");</script>';
        echo '<script> window.location="../../users/aprend_vocero/vocero.php" </script>';
    }
}
else{
    echo '<script> alert ("Algo fallo, intentalo de nuevo");</script>';
    echo '<script> window.location="../../users/aprend_vocero/vocero.php" </script>';
}

?>