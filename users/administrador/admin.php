<?php
session_start();
include('../../includes/conection.php');

$usario = $_SESSION["DOCUMENTO"];
if ($usario == "" || $usario == null) {
    header("location: ../../index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admi.css">
    <link rel="stylesheet" href="CSS/editar.css">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <div class="lateral">
            <div class="superior">
                <br>
                <h5 class="title_int">ADMINISTRADOR </h5>
            </div>
            <div class="navegacion">
                <div class="img_logo">
                    <img class="img_lo" src="../../img/COSTUD.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li class="suba_submenu" id="subm">ADMIN.USUARIOS⬇
                            <ul  class="most">
                                <li id="reg">REGISTRO DE USUARIOS</li>
                                <li>EDITAR USUARIOS</a></li>
                                <li>ELIMINAR USUARIOS</li>
                            </ul>
                        </li>
                        <li class="suba_submenu" id="subm">REGISTRO ⬇
                            <ul  class="mostr">
                                <li>CREAR INSUMOS</li>
                                <li>CREAR MAQUINARIA</li>
                                <li>CREAR MATERIAL TEXTIL</li>
                            </ul>
                        </li>
                        <li class="suba_submenu">INVENTARIO ⬇
                            <ul class="mostrar">
                                <li>INV DE MAQUINARIA</li>
                                <li>INV DE MATERIAL TEXTIL</li>
                                <li>INV DE INSUMOS</li>
                            </ul>
                        </li>
                        <li class="suba_submenu">REPORTES</li>
                    </ul>
                </div>
                <div class="logo_institu">
                    <img class="logo_inst" src="../../img/logo_sena.png" alt="">
                </div>
            </div>
        </div>

        <div class="grande">
            <div class="cabecera">
                <div class="info_per">
                    <div class="foto">
                        <img src="../../img/img_user.png" alt="">
                    </div>
                    <div class="men">
                        <ul>
                            <li class="sub_nom"> <?php echo $_SESSION['NOMBRE'];?> ⬇
                                <ul class="mos_nom">
                                    <li class="tetxt">EDITAR PERFIL</li>
                                    <li class="tetxt"><a href="../../includes/cerrar.php"> CERRAR SESION</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="info">

                <div class="usuariooo">
                    <div class="regusu">
                        
                    </div>
                    <div class="ediusu">
                        <form class="form" id="form" method="POST">
                            <input type="number" name="docu" id="docu" placeholder="DOCUMENTO" autocomplete="off" required> &nbsp;&nbsp;&nbsp;
                            <input type="text" name="nom" id="nom" placeholder="NOMBRE" autocomplete="off" required>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="apel" id="apel" placeholder="APELLIDO" autocomplete="off" required> <br><br>
                            <div class="user">
                                <label id="tex-use" for="">TIPO DE USUARIO</label><br>
                                <select name="tip_us" class="tip_usu" id="tip_usu" autocomplete="off" required>
                                    <option value="0">SELECCIONAR</option>
                                    <?php
                                        $tipo = "SELECT * FROM tipo_usu";
                                        $inser = mysqli_query($conexion,$tipo);
                                        while($tip = mysqli_fetch_array($inser)){
                                    ?>
                                    <option name="tip_user" value="<?php echo $tip[0]; ?>"><?php echo $tip[1]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select><br>
                            </div>
                            <div class="doc">
                                <label for="">TIPO DE DOCUMENTO</label><br>
                                <select name="tip_doc" id="tip_docu" autocomplete="off" required>
                                    <option value="0">SELECCIONAR</option>
                                    <?php
                                        $tipo2 = "SELECT * FROM tipo_docu";
                                        $inser2 = mysqli_query($conexion,$tipo2);
                                        while($tip2 = mysqli_fetch_array($inser2)){
                                    ?>
                                    <option name="tip_user" value="<?php echo $tip2[0]; ?>"><?php echo $tip2[1]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div><br>
                            
                            <input type="number" name="edad" id="edad" placeholder="EDAD" autocomplete="off" required>
                            <input type="password" name="contra" id="contra" placeholder="CONTRASEÑA" pattern="[A-Za-z0-9!?-]{2,12}" autocomplete="off" required>
                            <input type="number" name="tele" id="tele" placeholder="TELEFONO" min="1" max="3999999999" autocomplete="off" required>
                            <input type="text" name="cor" id="cor" placeholder="CORREO" autocomplete="off" required>
                            <input type="hidden" name="docume" id="docume">
                            <input type="submit" name="actualiza" id="edi" value="EDITAR">
                        </form>
                    </div>
                    <div class="elimiusu">

                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="JS/editar.js"></script>
</body>
</html>