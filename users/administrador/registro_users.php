<?php
require '../../includes/conection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7b875e4198.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../styles/registro_users.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>Registro De Usuarios</title>
</head>
<body>
    <header>
        <div class="content_header">
            <div class="title" id="title">
                <h3>SISTEMA DE INFORMACION PARA LA ENTRADA, SALIDA Y ALMACENAMIENTO DE MATERIAL TEXTIL</h3>
            </div>
            <div class="user_min">
                <div class="content_img_user">
                    <img class="img_user" src="../../img/img_user.png" alt="">
                </div>
                <div class="content_us">
                    <div class="welcome_name">
                        <span class="nam">JOSE ALFREDO</span> 
                    </div>
                    <div class="icon">
                        <i class="opc fas fa-angle-down"></i>
                        <ul class="ul_users">
                            <div class="a">
                                <li><a href="#">ACTUALIZAR PERFIL</a></li>
                            </div>
                            <div class="a">
                                <li><a href="#"> CERRAR SESION</a></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <button id="btn" class="btn_menu"><i class="fas fa-align-justify"></i></button>
    </header>
    <main>
        <nav class="nav" id="nav">
            <div class="title_intruc">
                <h5 class="title_int">INSTRUCTOR</h5>
            </div>
            <div class="img_logo">
                <img class="img_logo" src="../img/lafea.jpg" alt="">
            </div>
           <div class="menu">
                <ul>
                    <li class="suba submenu" id="subm"><a href="">ADMIN. USUARIOS<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul  class="mos">
                            <li><a href="registro_users.php">Registro De Usuarios</a></li>
                            <li><a href="editar_users.php">Editar Usuario</a></li>
                            <li><a href="eliminar_users.php">Eliminar Usuario</a></li>
                        </ul>
                    </li>
                    <li class="suba submenu" id="subm"><a href="">REGISTRO<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul  class="mos">
                            <li><a href="../../crear/crear_insumo.php">Crear insumos</a></li>
                            <li><a href="../../crear/crear_maquinaria.php">Crear maquinaria</a></li>
                            <li><a href="../../crear/crear_material.php">Crear material textil</a></li>
                        </ul>
                    </li>
                    <li class="submenu"><a href="">INVENTARIO<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="#">sub Item 1</a></li>
                            <li><a href="#">sub Item 2</a></li>
                            <li><a href="#">sub Item 3</a></li>
                            <li><a href="#">sub Item 4</a></li>
                        </ul>
                    </li>
                    <li><a href="">AUTORIZACIONES </a></li>
                    <li><a href="">REPORTES</a></li>
                    <div class="logo_institu">
                        <img class="logo_institu" src="../../img/logo_sena.png" alt="">
                      </div>
                </ul>
            </div>
        </nav>
    </main> <br>
    <div class="titulo">
        <h1>Registro De Usuarios</h1>
    </div>
        <form class="form" action="../../php/crear.php" method="POST">
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
                <a class="crear-user" href="">CREAR TIPO DE USUARIO</a>
            </div><br>
            <div class="doc">
                <label class="tipo-doc" for="">TIPO DE DOCUMENTO</label><br>
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
                </select><br>
                <a class="crear-doc" href="">CREAR TIPO DE DOCUMENTO</a>
            </div><br>
            
            <input type="number" name="edad" id="edad" placeholder="EDAD" autocomplete="off" required>
            <input type="password" name="contra" id="contra" placeholder="CONTRASEÑA" autocomplete="off" required>&nbsp;&nbsp;&nbsp;
            <input type="number" name="tele" id="tele" placeholder="TELEFONO" autocomplete="off" required>
            <input type="text" name="cor" id="cor" placeholder="CORREO" autocomplete="off" required><br>
            <input type="submit" name="registro" id="reg" value="REGISTRAR">
        </form>
        <div class="ven1">
            <div class="ventana-modal1" id="ventana-modal1">
                <div class="modal1 modal-close1">
                    <a href=""><img class="cerrar1" src="../../img/cerrar.png" alt="Cerrar"></a>
                    <div class="modal-text" id="modal-text">
                        <h2 class="reg-user" id="reg-user">Agregar Tip. Usuario</h2>
                        <form class="formul" action="../../php/registro_users_doc.php" method="post">
                            <label class="dig-user" for="">Digite Tipo Usuario</label><br><br>
                            <input type="text" class="ti-user" name="tipo-user" placeholder="TIPO USUARIO" autocomplete="off" required><br><br>
                            <input type="submit" name="env-user" class="env-user" value="AGREGAR">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="ven">
            <div class="ventana-modal" id="ventana-modal">
                <div class="modal modal-close">
                    <a href=""><img class="cerrar" src="../../img/cerrar.png" alt="Cerrar"></a>
                    <div class="modal-text" id="modal-text">
                        <h2 class="reg-doc" id="reg-doc">Agregar Tip. Documento</h2>
                        <form class="formu" action="../../php/registro_users_doc.php" method="post">
                            <label class="dig-doc" for="">Digite Tipo Documento</label><br><br>
                            <input type="text" class="ti-docu" name="tipo-docume" placeholder="TIPO DOCUMENTO" autocomplete="off" required><br><br>
                            <input type="submit" name="env-doc" class="env-doc" value="AGREGAR">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script src="../../js/main.js"></script>
    <!-- <script src="../../js/registro_users.js"></script> -->
</body>
</html>