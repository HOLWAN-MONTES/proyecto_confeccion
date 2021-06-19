<?php
include('../../includes/conection.php');
?>
<?php
if(isset($_POST['ingreso'])){
    $insumo = $_POST['insumo'];
    $cant_insumo = $_POST['cant_insumo'];
    $mate_textil = $_POST['mate_textil'];
    $cant_m_textil = $_POST['cant_m_textil'];
    $maquinaria = $_POST['maquinaria'];
    $cant_maquinaria = $_POST['cant_maquinaria'];
    $usuario = $_POST['usuario_ingreso']; 

    $seleccionar = "SELECT * FROM ingreso_material WHERE ID_INSTRUCTOR = '$usuario'";
    $query2 = mysqli_query($conexion,$seleccionar);
    $fila2 = mysqli_fetch_assoc($query2);
    $ingre = $fila2['ID_INGRESO_MATERIAL'];

    $sql = "INSERT INTO detalle_ingreso_materiales(ID_DETA_INGRESO, ID_INGRESO_MATERIAL, ID_INSUMOS, CANTIDAD_INSUMOS, 
    ID_MATERIAL_TEXTIL, CANTIDAD_MATERIAL_TEXTIL, detalle_ingreso_materiales.SERIAL, CANTIDAD_MAQUINARIA) VALUES ('', '$ingre', 
    '$insumo', '$cant_insumo','$mate_textil', '$cant_m_textil', '$maquinaria', '$cant_maquinaria')";
    $query = mysqli_query($conexion,$sql);
    
    if(!$query){
        echo '<script> alert ("Error al registrar");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }
    else{
        echo '<script> alert ("Se guardaron los datos de ingreso exitosamente.");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }

}
else{
    echo '<script> alert ("Algo fallo, intentalo de nuevo");</script>';
    echo '<script> window.location="../../users/administrador/admin.php" </script>';
}

?>