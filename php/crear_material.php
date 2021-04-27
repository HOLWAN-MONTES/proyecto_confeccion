<?php
include('../includes/conection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar material textil</title>
    <link rel="stylesheet" href="../styles/crear_material.css">
</head>
<body>
    <div class="primer_from">
        <h1 class="titulo_material">INGRESO DE MATERIAL TEXTIL</h1>
        <div class="formul">
            <form action="" method="" autocomplete="off">
                <label for="tela">TIPO DE TELA</label>
                <select class="tela" id="tipo_tela" name="tipo_tela">           
                    <?php
                        $sql="SELECT * FROM tipo_tela";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_TIPO_TELA']?>"> <?php echo $row['NOM_TIPO_TELA']?></option> 

                    <?php
                    }
                    ?>
                </select>
                <br>
                <a href="#">CREAR TIPO TELA</a>
                <br>
                <label for="color">COLOR</label>
                <select class="color" id="color" name="color">           
                    <?php
                        $sql="SELECT * FROM color";
                        $query=mysqli_query($conexion,$sql);
                        while($row = mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_COLOR']?>"> <?php echo $row['NOM_COLOR']?></option> 

                    <?php
                    }
                    ?>
                </select>
                <br>
                <a href="#">CREAR COLOR</a>
                <br>
                <input type="text" class="ancho" name="ancho" id="ancho" placeholder="ANCHO" required>
                <br>
                <label for="marca">MARCA</label>
                <select class="marca" id="marca" name="marca">           
                    <?php
                        $sql="SELECT * FROM marca";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_MARCA']?>"> <?php echo $row['NOM_MARCA']?></option> 

                    <?php
                    }
                    ?>
                </select>
                <br>
                <a href="#">CREAR MARCA</a>
                <br>
                <input type="text" class="largo" name="largo" id="largo" placeholder="LARGO" required>
                <input type="submit" class="continuar" name="regis_material" id="regis_material" value="CONTINUAR">

            </form>
        </div>
    </div>   
</body>
</html>