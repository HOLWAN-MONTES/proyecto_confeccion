<?php
include('../../includes/conection.php');
?>
<?php

if(isset($_POST['crear_insumo'])){
    $tipinsumo=$_POST['tipinsumo'];
    $nombre=$_POST['nominsumo'];
    $marca=$_POST['marca'];
    $color=$_POST['color'];

    $sql = "INSERT INTO insumos (NOM_INSUMOS, ID_TIPO_INSUMO, ID_MARCA, ID_COLOR) VALUES 
    ('$nombre', '$tipinsumo', '$marca', '$color')";
    $query = mysqli_query($conexion,$sql);
    
    if(!$query){
        echo '<script> alert ("Error al registrar el insumo");</script>';
        echo '<script> window.location="../../users/instructor/instructor.php" </script>';
    }
    else{
        echo '<script> alert ("Se guardaron los datos del insumo correctamente.");</script>';
        echo '<script> window.location="../../users/instructor/instructor.php" </script>';
    }
}
else{
    echo '<script> alert ("Algo fallo, intentalo de nuevo");</script>';
    echo '<script> window.location="../../users/instructor/instructor.php" </script>';
}


?>