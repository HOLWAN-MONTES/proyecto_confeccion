<?php
include('../../includes/conection.php');
?>

<?php
    if(isset($_POST['cre_insumo'])){
        $tipinsumo=$_POST['tipinsumo'];
        $nombre=$_POST['nominsumo'];
        $marca=$_POST['marca'];
        $color=$_POST['color'];
        
        
            
        $sql="INSERT INTO `insumos` (`ID_TIPO_INSUMO`, `NOM_INSUMOS`, `ID_MARCA`, `ID_COLOR`) VALUES ('$tipinsumo', '$nombre', '$marca', '$color')";
            
        $resul=mysqli_query($conexion,$sql);
            if($resul){
                echo "<script language='JavaScript'>
                    alert('Se guardaron los datos del insumo correctamente');
                    </script>";
                echo '<script> window.location="../../users/instructor/instructor.php" </script>';
            }else{
                echo "<script language='JavaScript'>
                    alert('Error al registrar');
                    </script>";
                echo '<script> window.location="../../users/instructor/instructor.php" </script>';
            }
            mysqli_close($conexion);
    }else{
            echo("fallo");
    }
    ?>