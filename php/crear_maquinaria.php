<?php
include('../includes/conection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso maquinaria</title>
    <link rel="stylesheet" href="../styles/crear_maquinaria.css">
</head>
<body>
    <div class="primer_form">
        <h1 class="titulo_maqui">INGRESO DE MAQUINARIA</h1>
        <div class="form_reg_maquina">
            <form action="#" method="POST" autocomplete="off">
                <input type="text" name="serial" id="serial" placeholder="Serial" required>
                <br>
                <label for="maquina">TIPO DE MAQUINARIA</label>
                <select name="tipo_maquinaria" id="tipo_maquinaria">
                    <option value="0">Seleccionar</option>
                </select>
                <br>
                <a href="#">CREAR TIPO DE MAQUINARIA</a>
                <br>
                <label for="marca">MARCA</label>
                <select name="marca" id="marca">
                    <option value="0">Seleccionar</option>
                </select>
                <br>
                <a href="#">CREAR MARCA</a>
                <br><br>
                <input type="text" name="estado" id="estado" placeholder="Estado" required>
                <input type="submit" class="continuar" name="registrar_maquina" id="registrar_maquina" value="CONTINUAR">    
            </form>
        </div>

    </div>
    
    
</body>
</html>
