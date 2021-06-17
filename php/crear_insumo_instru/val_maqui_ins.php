<?php
include('../../includes/conection.php');
?>
<?php
if(isset($_POST['registrar_maquina'])){
    $serial=$_POST['serial'];
    $tipmaquina=$_POST['tipo_maqui'];
    $marca=$_POST['marca'];
    $color=$_POST['color'];

    $sql = "INSERT INTO maquinaria (SERIAL, ID_TIPO_MAQUI, ID_MARCA, ID_COLOR) VALUES 
    ('$serial', '$tipmaquina', '$marca', '$color')";
    $query = mysqli_query($conexion,$sql);
    
    if(!$query){
        echo '<script> alert ("Error al registrar la maquinaria");</script>';
        echo '<script> window.location="../../users/instructor/instructor.php" </script>';
    }
    else{
        echo '<script> alert ("Se guardaron los datos de la maquinaria exitosamente");</script>';
        echo '<script> window.location="../../users/instructor/instructor.php" </script>';
    }
}
else{
    echo '<script> alert ("Algo fallo, intentalo de nuevo");</script>';
    echo '<script> window.location="../../users/instructor/instructor.php" </script>';
}

?>