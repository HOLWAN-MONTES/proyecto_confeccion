<?php
include('../../includes/conection.php');
?>
<?php
if(isset($_POST['regis_material'])){
    $nom_material=$_POST['nom_material'];
    $tipo_tela=$_POST['tipo_tela'];
    $marca=$_POST['marca'];
    $color=$_POST['color'];
    $metraje=$_POST['metraje'];
    $cant_rollos=$_POST['cant_rollos'];

    $sql="INSERT INTO material_textil(NOM_M_TEXTIL, ID_TIPO_TELA, ID_MARCA, ID_COLOR, METRAJE, CANT_ROLLO) 
    VALUES('$nom_material', '$tipo_tela', '$marca', '$color', '$metraje', '$cant_rollos')";
    $query = mysqli_query($conexion,$sql);
    
    if(!$query){
        echo '<script> alert ("Error al registrar el material");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }
    else{
        echo '<script> alert ("Se guardaron los datos exitosamente, gracias por crear el material");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }

}
else{
    echo '<script> alert ("Algo fallo, intentalo de nuevo");</script>';
    echo '<script> window.location="../../users/administrador/admin.php" </script>';
}


?>