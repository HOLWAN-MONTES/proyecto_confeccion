<?php
include('../includes/conection.php');
?>
<?php
    if(isset($_POST['cre_maqui'])){
        $serial=$_POST['serial'];
        $tipmaquina=$_POST['tipo_maqui'];
        $marca=$_POST['marca'];
        $color=$_POST['color'];
        $estado=$_POST['estado'];
        
            
        $sql="INSERT INTO `maquinaria` (`SERIAL`, `ID_TIP_MAQUI`, `ID_MARCA`, `ID_COLOR`, `ESTADO`) VALUES ('$serial', '$tipmaquina', '$marca', '$color', '$estado')";
            
        $resul=mysqli_query($conexion,$sql);
            if($resul){
                echo "<script language='JavaScript'>
                    alert('Se ha creado la maquina correctamente');
                    </script>";
            }else{
                echo "<script language='JavaScript'>
                    alert('Los datos no fueron ingresados correctamente');
                    </script>";
            }
            mysqli_close($conexion);
    }else{
            ?>
   
    
    <?php
    }
    ?>