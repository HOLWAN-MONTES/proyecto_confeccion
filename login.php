<?php
require_once('includes/conection.php');
?>
<?php
    $sql_re = "SELECT * FROM tipo_usu";
    $query_re = mysqli_query($conexion, $sql_re);
    $fila_re = mysqli_fetch_assoc($query_re);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/inicio/login.css">
    <title>Document</title>
</head>
<body>
    <div class="general">

        <div class="uno">
        </div>
        <div class="dos">
        </div>
    </div>

    <div class="infor">
        <h1 class="tet">S.I PARA LA ENTRADA, SALIDA Y ALMACENAMIENTO DE MATERIAL TEXTIL</h1>
        <div class="log">
            <h2>INICIO DE SESION</h2>
            <img src="img/login.png" alt="">
            <form method="post" id="form" action="php/ingreso.php" autocomplete="off">
                    <input type="number" name="docuaprendiz" id="usuario" placeholder="DOCUMENTO" maxlength="12"  style="text-transform:uppercase">
                 
                    <input type="password" name="claveaprendiz" id="password" placeholder="Ingrese Clave" maxlength="20"  style="text-transform:uppercase">
                    <select class="seleccionTipo" id="tipodocu" name="tipodocu">
                        <option value="0">Seleccione su cargo</option>
                        <?php
                        foreach ($query_re as $tipo) : ?>
    
                        <option value="<?php echo $tipo['ID_TIPO_USU'] ?>">
                            <?php echo $tipo['ID_TIPO_USU'] ?>
                            <?php echo $tipo['NOM_TIPO_USU'] ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select><br> 
                <input type="submit" name="inicio" id="inicio" value="INGRESAR">
            </form>
        </div>
    </div>
</body>
</html>