<?php
include('../../includes/conection.php');
?>
<?php
    if(isset($_POST['cre_maqui'])){
        $serial=$_POST['serial'];
        $tipmaquina=$_POST['tipo_maqui'];
        $marca=$_POST['marca'];
        $color=$_POST['color'];
        
        
            
        $sql="INSERT INTO `maquinaria` (`SERIAL`, `ID_TIPO_MAQUI`, `ID_MARCA`, `ID_COLOR`) VALUES ('$serial', '$tipmaquina', '$marca', '$color')";
            
        $resul=mysqli_query($conexion,$sql);
            if($resul){
                echo '<script> alert ("Se guardaron los datos de la maquinaria correctamente");</script>';
                echo '<script> window.location="../../users/administrador/admin.php" </script>';
            }else{
                echo "<script language='JavaScript'>
                    alert('Error al registrar');
                    </script>";
                echo '<script> window.location="../../users/administrador/admin.php" </script>';
            }
            mysqli_close($conexion);
    }else{
            ?>
   
    
    <?php
    }
    ?>