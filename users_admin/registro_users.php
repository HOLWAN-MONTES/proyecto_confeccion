<?php
require '../conneccion/connec.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Registro De Usuarios</title>
</head>
<body>
    <h1>Registro De Usuarios</h1>
        <form class="form" action="../php/crear.php" method="POST">
            <input type="number" name="docu" id="docu" placeholder="DOCUMENTO" autocomplete="off"> &nbsp;&nbsp;&nbsp;
            <input type="text" name="nom" id="nom" placeholder="NOMBRE" autocomplete="off">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="apel" id="apel" placeholder="APELLIDO" autocomplete="off"> <br><br>
            <div class="user">
                <label id="tex-use" for="">TIPO DE USUARIO</label><br>
                <select name="tip_us" class="tip_usu" id="tip_usu" autocomplete="off">
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $tipo = "SELECT * FROM tipo_usu";
                        $inser = mysqli_query($mysqli,$tipo);
                        while($tip = mysqli_fetch_array($inser)){
                    ?>
                    <option name="tip_user" value="<?php echo $tip[0]; ?>"><?php echo $tip[1]; ?></option>
                    <?php
                    }
                    ?>
                </select><br>
                <a href="">CREAR TIPO DE USUARIO</a>
            </div>
            <div class="doc">
                <label for="">TIPO DE DOCUMENTO</label><br>
                <select name="tip_doc" id="tip_docu" autocomplete="off">
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $tipo2 = "SELECT * FROM tipo_docu";
                        $inser2 = mysqli_query($mysqli,$tipo2);
                        while($tip2 = mysqli_fetch_array($inser2)){
                    ?>
                    <option name="tip_user" value="<?php echo $tip2[0]; ?>"><?php echo $tip2[1]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div><br>
            
            <input type="number" name="edad" id="edad" placeholder="EDAD" autocomplete="off">
            <input type="password" name="contra" id="contra" placeholder="CONTRASEÑA" autocomplete="off">
            <input type="number" name="tele" id="tele" placeholder="TELEFONO" autocomplete="off">
            <input type="text" name="cor" id="cor" placeholder="CORREO" autocomplete="off">
            <input type="submit" name="registro" id="reg" value="REGISTRAR">
        </form>
</body>
</html>