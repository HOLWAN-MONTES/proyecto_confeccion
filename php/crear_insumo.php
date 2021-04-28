<?php
include('../includes/conection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR INSUMOS</title>
</head>
<body>

<h2>CREAR INSUMO</h2>
<form method="POST">                            
    <label for="tipinsu">TIPO DE INSUMO</label>              
    <select id="tipinsumo" name="tipinsumo">           
            <?php
                $sql="SELECT*FROM tipo_insumo";
                $query=mysqli_query($conexion,$sql);
                while($row=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $row['ID_TIPO_INSUMO']?>"> <?php echo $row['NOM_INSUMO']?></option> 

            <?php
            }
            ?>
    </select>
    <a href="cre_tip_ins.php">Crear tipo de insumo</a>


    <label for="">NOMBRE DEL INSUMO</label>
    <input type="text" name="nominsumo" id="nominsumo" placeholder="Tijeras punta redonda" auto-complete="off" requied>
    <label for="">MARCA DEL INSUMo</label>
    <select id="marca" name="marca">
            <?php
                $sql="SELECT*FROM marca";
                $query=mysqli_query($conexion,$sql);
                while($row=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $row['ID_MARCA']?>"> <?php echo $row['NOM_MARCA']?></option> 

            <?php
            }
            ?>
    </select>
    <a href="cre_marc_ins.php">Crear marca de insumo</a>


    <label for="">COLOR DEL INSUMO</label>
    <select id="color" name="color">
            <?php
                $sql="SELECT*FROM color";
                $query=mysqli_query($conexion,$sql);
                while($row=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $row['ID_COLOR']?>"> <?php echo $row['NOM_COLOR']?></option> 

            <?php
            }
            ?>
    </select>
    <a href="cre_color_ins.php">Crear color de insumo</a>

    
    <label for="">ESTADO DEL INSUMO</label>
    <input type="text" name="estado" id="estado" placeholder="Buen estado" auto-complete="off" requied>
    <input type="hidden" name="cre_insumo" value="crearmoto">
    <input type="submit" value="CREAR INSUMO" class="form-control">
  
</form>

    
<?php
    if(isset($_POST['cre_insumo'])){
        $tipinsumo=$_POST['tipinsumo'];
        $nombre=$_POST['nominsumo'];
        $marca=$_POST['marca'];
        $color=$_POST['color'];
        $estado=$_POST['estado'];
        
            
        $sql="INSERT INTO `insumos` (`ID_TIPO_INSUMO`, `NOMBRE`, `ID_MARCA`, `ID_COLOR`, `ESTADO`) VALUES ('$tipinsumo', '$nombre', '$marca', '$color', '$estado')";
            
        $resul=mysqli_query($conexion,$sql);
            if($resul){
                echo "<script language='JavaScript'>
                    alert('Se ha creado el insumo correctamente');
                    </script>";
            }else{
                echo "<script language='JavaScript'>
                    alert('los datos no fueron ingresados correctamente');
                    </script>";
            }
            mysqli_close($conexion);
    }else{
            ?>
   
    
    <?php
    }
    ?>
    
</body>
</html>