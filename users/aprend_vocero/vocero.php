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
    <script src="https://kit.fontawesome.com/7b875e4198.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="CSS_VOCERO/vocero.css">
    
    <title>VOCERO</title>
</head>

<body>
    <div class="principal">
        <div class="lateral">
            <div class="superior">
                <br>
                <h5 class="title_int"><a class="menuaaa" href="admin.php">APR. VOCERO</a> </h5>
            </div>
            <div class="navegacion">
                <div class="img_logo">
                    <img class="img_lo" src="../../img/COSTUD.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li class="suba_submenu" id="subm">PRESTAMOS 
                            <!-- <ul class="most">
                                <li id="regis">REGISTRO DE USUARIOS</li>
                                <li id="editaar">EDITAR USUARIOS</a></li>
                                <li id="eliminaar">ELIMINAR USUARIOS</li>
                            </ul> -->
                        </li>
                        <li class="suba_submenu" id="btn_ingreso">PRESTAMOS TEXTIL <!-- dar click y sacar un formulario  -->
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
                        <img src="../../images/<?php echo $_SESSION['FOTO']; ?>">
                    </div>
                    <div class="men">
                        <ul>
                            <li class="sub_nom">
                                <?php echo $_SESSION['NOMBRE'];?> ⬇
                                <ul class="mos_nom">
                                    <li class="tetxt">EDITAR PERFIL</li>
                                    <li class="tetxt"><a href="../../includes/cerrar.php"> CERRAR SESION</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--div que contiene todos los formularios-->
            <div class="info">

                <!--formularios de admin. usuarios-->
                <div class="usuar" id="usuar">
                    
                    <!--formulario de registro de usuarios-->
                    <div class="regusu" id="regi_usu">
                        <br>
                        <div class="regg">
                            <div class="tituloos">
                                <h1>REGISTRO DE USUARIOS</h1>
                            </div>

                            <form class="form1" action="../../php/usuario/crear.php" method="POST" enctype="multipart/form-data">
                            <div class="one1">
                                <input type="number" name="docu" id="docu" placeholder="DOCUMENTO" autocomplete="off" required> &nbsp;&nbsp;&nbsp;
                                <input type="text" name="nom" id="nom" placeholder="NOMBRE" autocomplete="off" required style="text-transform:uppercase">&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="apel" id="apel" placeholder="APELLIDO" autocomplete="off" required style="text-transform:uppercase"> <br><br>
                            </div>
                            <div class="one">
                                <div class="user">
                                    <label id="tex-use" for="">TIPO DE USUARIO</label><br>
                                    <select name="tip_us" class="tip_usu" id="tip_usu" autocomplete="off" required>
                                        <option value="">SELECCIONAR</option>
                                        <?php

                                            $tipo = "SELECT * FROM tipo_usu ORDER BY NOM_TIPO_USU ASC";                                
                                            $inser = mysqli_query($conexion,$tipo);
                                            while($tip = mysqli_fetch_array($inser)){
                                        ?>
                                            <option name="tip_user" value="<?php echo $tip[0]; ?>"
                                                style="text-transform:uppercase">
                                                <?php echo $tip[1]; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                        </select><br>
                                        <a class="crear-user" href="">CREAR TIPO DE USUARIO</a>
                                    </div>
                                    <br>
                                    <div class="doc">
                                        <label class="tipo-doc" for="">TIPO DE DOCUMENTO</label><br>
                                        <select name="tip_doc" id="tip_docu" autocomplete="off" required>
                                            <option value="">SELECCIONAR</option>
                                            <?php
                                            $tipo2 = "SELECT * FROM tipo_docu ORDER BY NOM_TIPO_DOCU ASC";
                                            $inser2 = mysqli_query($conexion,$tipo2);
                                            while($tip2 = mysqli_fetch_array($inser2)){
                                        ?>
                                            <option name="tip_user" value="<?php echo $tip2[0]; ?>"
                                                style="text-transform:uppercase">
                                                <?php echo $tip2[1]; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                        </select><br>
                                        <a class="crear-doc" href="">CREAR TIPO DE DOCUMENTO</a>
                                    </div>
                                    <br>

                                    <input type="number" name="edad" class="edadd" id="edad" placeholder="EDAD"
                                        autocomplete="off" min="1" max="100" required>
                                </div>
                                <input type="password" name="contra" id="contra" placeholder="CONTRASEÑA"
                                    autocomplete="off" pattern="[A-Za-z0-9!?-]{2,12}" required>&nbsp;&nbsp;&nbsp;
                                <input type="number" name="tele" id="tele" placeholder="TELEFONO" autocomplete="off"
                                    min="1" max="3999999999" required>
                                <input type="email" name="cor" id="cor" placeholder="CORREO" autocomplete="off"
                                    pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                                    required><br>

                                <input type="file" required name="imagen"/>

                                <input type="submit" name="registro" id="reg" value="REGISTRAR">
                            </form>
                            <div class="ven1">
                                <div class="ventana-modal1" id="ventana-modal1">
                                    <div class="modal1 modal-close1">
                                        <div class="cerrar1">
                                            <a href=""><i class="fas fa-times-circle"></i></a>
                                        </div>
                                        <div class="modal-text" id="modal-text">
                                            <h2 class="reg-user" id="reg-user">Agregar Tip. Usuario</h2>
                                            <form class="formul" action="../../php/usuario/registro_users_doc.php"
                                                method="POST">
                                                <label class="dig-user" for="">Digite Tipo Usuario</label><br><br>
                                                <input type="text" class="ti-user" name="tipo-user"
                                                    placeholder="TIPO USUARIO" autocomplete="off" required><br><br>
                                                <input type="submit" name="env-user" class="env-user" value="AGREGAR">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ven">
                                <div class="ventana-modal" id="ventana-modal">
                                    <div class="modal modal-close">
                                        <div class="cerrar">
                                            <a href=""><i class="fas fa-times-circle"></i></a>
                                        </div>
                                        <div class="modal-text" id="modal-text">
                                            <h2 class="reg-doc" id="reg-doc">Agregar Tip. Documento</h2>
                                            <form class="formu" action="../../php/usuario/registro_users_doc.php"
                                                method="post">
                                                <label class="dig-doc" for="">Digite Tipo Documento</label><br><br>
                                                <input type="text" class="ti-docu" name="tipo-docume"
                                                    placeholder="TIPO DOCUMENTO" autocomplete="off" required><br><br>
                                                <input type="submit" name="env-doc" class="env-doc" value="AGREGAR">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="imagen" src="../../img/fondo.jpg" alt="">
                    </div>

                    <!--formulario para editar usuarios-->
                    <div class="ediusu" id="edi_usu">
                        <br>
                        <div class="titulos">
                            <h1>EDITAR USUARIOS</h1>
                        </div>
                        <div class="nece">
                            <form class="form-edi" id="form-edi" method="POST">
                                <input type="number" name="docu" id="docu-edi" placeholder="DOCUMENTO"
                                    autocomplete="off" required> &nbsp;&nbsp;&nbsp;
                                <input type="text" name="nom" id="nom-edi" placeholder="NOMBRE" autocomplete="off"
                                    required>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="apel" id="apel-edi" placeholder="APELLIDO" autocomplete="off"
                                    required> <br><br>
                                <div class="forr">
                                    <div class="userR">
                                        <label id="tex-use" for="">TIPO DE USUARIO</label><br>
                                        <select name="tip_us" class="tip_usu_edi" id="tip_usu_edi" autocomplete="off"
                                            required>
                                            <option value="">SELECCIONAR</option>
                                            <?php
                                            $tipo = "SELECT * FROM tipo_usu";
                                            $inser = mysqli_query($conexion,$tipo);
                                            while($tip = mysqli_fetch_array($inser)){
                                        ?>
                                            <option name="tip_user" value="<?php echo $tip[0]; ?>">
                                                <?php echo $tip[1]; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                        </select><br>
                                    </div>
                                    <div class="docC">
                                        <label for="">TIPO DE DOCUMENTO</label><br>
                                        <select name="tip_doc" id="tip_docu_edi" autocomplete="off" required>
                                            <option value="">SELECCIONAR</option>
                                            <?php
                                            $tipo2 = "SELECT * FROM tipo_docu";
                                            $inser2 = mysqli_query($conexion,$tipo2);
                                            while($tip2 = mysqli_fetch_array($inser2)){
                                        ?>
                                            <option name="tip_user" value="<?php echo $tip2[0]; ?>">
                                                <?php echo $tip2[1]; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                        </select>
                                    </div><br>

                                    <input type="number" name="edad" id="edad-edi" placeholder="EDAD" autocomplete="off"
                                        required>
                                </div>
                                <input type="password" name="contra" id="contra-edi" placeholder="CONTRASEÑA"
                                    pattern="[A-Za-z0-9!?-]{2,12}" autocomplete="off" required>
                                <input type="number" name="tele" id="tele-edi" placeholder="TELEFONO" min="1"
                                    max="3999999999" autocomplete="off" required>
                                <input type="text" name="cor" id="cor-edi" placeholder="CORREO" autocomplete="off"
                                    required>
                                <input type="hidden" name="docume" id="docume-edi">
                                <input type="submit" name="actualiza" id="edi" value="EDITAR">
                            </form>
                            <img class="imagenn" src="../../img/fondo.jpg" alt="">
                        </div>
                    </div>

                    <!--formulario para eliminar usuarios-->
                    <div class="elimiusu" id="eli_usu">
                        <br>
                        <div class="titulo">
                            <h1>ELIMINAR USUARIOS</h1>
                        </div>
                        <form class="form-elim" id="form-elim" method="POST">
                            <input type="number" name="docu-elim" id="docu-elim" placeholder="DOCUMENTO"
                                autocomplete="off" required> &nbsp;&nbsp;&nbsp;
                            <input type="text" name="nom-elim" id="nom-elim" placeholder="NOMBRE" autocomplete="off"
                                required>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="apel-elim" id="apel-elim" placeholder="APELLIDO" autocomplete="off"
                                required> <br><br>
                            <div class="userr">
                                <label id="tex-use" for="">TIPO DE USUARIO</label><br>
                                <select name="tip_us_elim" class="tip_usu_elim" id="tip_usu_elim" autocomplete="off"
                                    required>
                                    <option value="">SELECCIONAR</option>
                                    <?php
                                        $tipo = "SELECT * FROM tipo_usu";
                                        $inser = mysqli_query($conexion,$tipo);
                                        while($tip = mysqli_fetch_array($inser)){
                                    ?>
                                    <option name="tip_user_elim" value="<?php echo $tip[0]; ?>">
                                        <?php echo $tip[1]; ?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select><br>
                            </div>
                            <div class="docc">
                                <label for="">TIPO DE DOCUMENTO</label><br>
                                <select name="tip_doc_elim" id="tip_docu_elim" autocomplete="off" required>
                                    <option value="">SELECCIONAR</option>
                                    <?php
                                        $tipo2 = "SELECT * FROM tipo_docu";
                                        $inser2 = mysqli_query($conexion,$tipo2);
                                        while($tip2 = mysqli_fetch_array($inser2)){
                                    ?>
                                    <option name="tip_user_elim" value="<?php echo $tip2[0]; ?>">
                                        <?php echo $tip2[1]; ?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div><br>

                            <input type="number" name="edad-elim" id="edad-elim" placeholder="EDAD" autocomplete="off"
                                required>
                            <input type="number" name="tele-elim" id="tele-elim" placeholder="TELEFONO"
                                autocomplete="off" required> <br>
                            <input type="text" name="cor-elim" id="cor-elim" placeholder="CORREO" autocomplete="off"
                                required><br>
                            <input type="hidden" name="docume-elim" id="docume-elim">
                            <input type="submit" name="eliminar-elim" id="elimi" value="ELIMINAR">
                        </form>
                    </div>

                </div>
                
    
            </div>

        </div>
        
    </div>


    <script src="JS_VOCERO/vocero.js"></script>
    
    
</body>

</html>