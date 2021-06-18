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
    <link rel="stylesheet" href="CSS_USU/admi.css">
    <link rel="stylesheet" href="CSS_USU/regi_usu.css">
    <link rel="stylesheet" href="CSS_USU/editar_usu.css">
    <link rel="stylesheet" href="CSS_USU/eliminar_usu.css">
    <link rel="stylesheet" href="CSS_CREAR/inv-maquinarias.css">
    <link rel="stylesheet" href="CSS_CREAR/insumos.css">
    <link rel="stylesheet" href="CSS_CREAR/material_textil.css">
    <link rel="stylesheet" href="CSS_CREAR/maquina.css">
    
    <link rel="stylesheet" href="CSS_USU/form-ingreso.css">
    <title>ADMINISTRADOR</title>
</head>

<body>
    <div class="principal">
        <div class="lateral">
            <div class="superior">
                <br>
                <h5 class="title_int"><a class="menuaaa" href="admin.php">ADMINISTRADOR</a> </h5>
            </div>
            <div class="navegacion">
                <div class="img_logo">
                    <img class="img_lo" src="../../img/COSTUD.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li class="suba_submenu" id="subm">ADMIN.USUARIOS⬇
                            <ul class="most">
                                <li id="regis">REGISTRO DE USUARIOS</li>
                                <li id="editaar">EDITAR USUARIOS</a></li>
                                <li id="eliminaar">ELIMINAR USUARIOS</li>
                            </ul>
                        </li>
                        <li class="suba_submenu" id="btn_ingreso">INGRESO <!-- dar click y sacar un formulario  -->
                          <!--   <ul class="mostr">
                                <li id="insu">CREAR INSUMOS</li>
                                <li id="maquinaa">CREAR MAQUINARIA</li>
                                <li id="mate_tex">CREAR MATERIAL TEXTIL</li>
                                
                            </ul> -->
                        </li>
                        <li class="suba_submenu"> PRESTAMOS <!-- clicl el formulario de prestamos  -->

                        </li>
                        <li class="suba_submenu"> DEVOLUCIONES <!-- clicl el formulario de DEVOLUCIONES  -->

                        </li>

                        <li class="suba_submenu">INVENTARIO ⬇
                            <ul class="mostrar">
                                <li id="btn-inv-maquinaria">INV DE MAQUINARIA</li>
                                <li id="btn-inv-maquinarial-textil">INV DE MATERIAL TEXTIL</li>
                                <li id="btn-inv-insumos">INV DE INSUMOS</li>
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
                                    <select name="tip_us" class="tip_usu" id="tip_usu" autocomplete="off" required style="text-transform:uppercase">
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
                                        <select name="tip_doc" id="tip_docu" autocomplete="off" required style="text-transform:uppercase">
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
                                <select name="tip_us_elim" class="tip_usu_elim" id="tip_usu_elim" autocomplete="off" style="text-transform:uppercase"
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
                                <select name="tip_doc_elim" id="tip_docu_elim" autocomplete="off" required style="text-transform:uppercase">
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
                
                <!--formularios de registros-->
                <div class="crear" id="crear">
                    
                    <!--formulario de registro de maquinaria-->
                    <div class="maquina" id="crea_maquinn">

                        <div class="primer_form">
                            <br>
                            <h1 class="titulo_maqui">INGRESO DE MAQUINARIA</h1>
                            <div class="form_reg_maquina">
                                <form class="formu_maquinn" action="../../php/crear_maqui/val_maqui.php" method="POST"
                                    autocomplete="off">
                                    <label id="serial_maq">SERIAL</label>
                                    <input type="number" name="serial" id="serial" placeholder="SERIAL" required style="text-transform:uppercase">
                                    <br>
                                    <label id="l_maquinn" for="">TIPO DE MAQUINARIA</label>
                                    <select id="tipo_maqui" name="tipo_maqui" required style="text-transform:uppercase">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                                $sql="SELECT * FROM tipo_maquinaria ORDER BY NOM_TIPO_MAQUI ASC";
                                                $query=mysqli_query($conexion,$sql);
                                                while($row=mysqli_fetch_array($query)){
                                            ?>
                                        <option value="<?php echo $row['ID_TIPO_MAQUI']?>"
                                            style="text-transform:uppercase">
                                            <?php echo $row['NOM_TIPO_MAQUI']?>
                                        </option>

                                        <?php
                                            }
                                            ?>
                                    </select>
                                    <br>
                                    <a id="btn_SalirMaquinarias" class="maquis_fo" href="#">CREAR TIPO DE MAQUINARIA</a>
                                    <br>
                                    <label class="l_marca" for="marca">MARCA DE MAQUINARIA</label>
                                    <select id="marca" name="marca" required style="text-transform:uppercase">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                                $sql="SELECT * FROM marca ORDER BY NOM_MARCA ASC";
                                                $query=mysqli_query($conexion,$sql);
                                                while($row=mysqli_fetch_array($query)){
                                            ?>
                                        <option value="<?php echo $row['ID_MARCA']?>" style="text-transform:uppercase">
                                            <?php echo $row['NOM_MARCA']?>
                                        </option>

                                        <?php
                                            }
                                            ?>
                                    </select>
                                    <br>
                                    <a id="btn_salirmarca" class="tress" href="#">CREAR MARCA</a>
                                    <br>
                                    <label id="t_color" for="">COLOR DE MAQUINARIA</label>
                                    <select id="color" name="color"required style="text-transform:uppercase">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                                $sql="SELECT*FROM color ORDER BY NOM_COLOR ASC";
                                                $query=mysqli_query($conexion,$sql);
                                                while($row=mysqli_fetch_array($query)){
                                            ?>
                                        <option value="<?php echo $row['ID_COLOR']?>" style="text-transform:uppercase">
                                            <?php echo $row['NOM_COLOR']?>
                                        </option>

                                        <?php
                                            }
                                            ?>
                                    </select>
                                    <a id="btn_salircolor" href="#" class="d_color">CREAR COLOR</a>
                                    <br>

                                    <input type="hidden" name="cre_maqui" value="crearmaquina">
                                    <input type="submit" class="continuar" name="registrar_maquina"
                                        id="registrar_maquina" value="CONTINUAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear tipo de maquinaria-->
                        <div class="crear_maquinaria" id="crear_maquinaria">
                            <div class="content_formMaquinaria">
                                <div id="cerrar_ventana_maquinaria"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_maquinaria">AGREGAR TIP. MAQUINARIA</h2>
                                <form action="../../php/crear_maqui/regis_tip_maqui.php" class="formularioMaquinaria"
                                    method="POST" autocomplete="off">
                                    <label class="dig-tip-maqu" for="">Digite Tipo Maquinaria</label>
                                    <input type="text" class="ti_maquinaria" name="agre_maquinaria" id="agre_maquinaria"
                                        placeholder="TIPO DE MAQUINARIA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-maquinaria" name="env-maquinaria" value="AGREGAR">
                                </form>
                            </div>
                        </div>
                        
                        <!--formulario para crear la marca de maquinaria-->
                        <div class="crear_marca" id="crear_marca">
                            <div class="content_formMarca">
                                <div id="cerrar_ventanaMarca"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_marca">AGREGAR MARCA</h2>
                                <form action="../../php/crear_maqui/regis_marca_maqui.php" class="formularioMarca" method="POST" autocomplete="off">
                                    <label class="dig-mar" for="">Digite Marca</label>
                                    <input type="text" class="ti_marca" name="agre_marca" id="agre_marca" placeholder="MARCA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-marca" name="env-marca" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear el color de maquinaria-->
                        <div class="crear_color" id="crear_color">
                            <div class="content_formColor">
                                <div id="cerrar_ventanaColor"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_color">AGREGAR COLOR</h2>
                                <form action="../../php/crear_maqui/regis_color_maqui.php" class="formularioColor" method="POST" autocomplete="off">
                                    <label class="dig-colores" for="">Digite Color</label>
                                    <input type="text" class="ti_color" name="agre_color" id="agre_color" placeholder="COLOR" required style="text-transform:uppercase">
                                    <input type="submit" class="env-color" name="env-color" value="AGREGAR">
                                </form>
                            </div>
                        </div> 
                        
                    </div>


                    <!--formulario de registro de material textil-->
                    <div class="crear_mtextil" id=cre_mate>
                        <div class="primer_from">
                            <br>
                            <h1 class="titulo_material">INGRESO DE MATERIAL TEXTIL</h1>
                            <div class="formul_TEXT">
                                <form class="for_mtex" action="../../php/crear_Mtextil/val_material.php" method="POST"
                                    autocomplete="off">
                                    <label class="l_text" for="">MATERIAL TEXTIL</label>
                                    <input type="text" class="nom_material" name="nom_material" id="nom_material"
                                        placeholder="TWEED 200X300" required style="text-transform:uppercase">
                                    <br>
                                    <label id="t_tela" for="tela">TIPO DE TELA</label>
                                    <select class="tela" id="tipo_tela" name="tipo_tela" style="text-transform:uppercase" required>
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM tipo_tela ORDER BY NOM_TIPO_TELA ASC";
                                            $query=mysqli_query($conexion,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <option value="<?php echo $row['ID_TIPO_TELA']?>" style="text-transform:uppercase">
                                            <?php echo $row['NOM_TIPO_TELA']?>
                                        </option>

                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <a id="btn_salirtela_textil" class="d_tela" href="#">CREAR TIPO TELA</a>
                                    <br>
                                    <label class="tit_marca" for="marca">MARCA</label>
                                    <select class="marca_tex" id="marca_tex" name="marca" style="text-transform:uppercase" required>
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM marca ORDER BY NOM_MARCA ASC";
                                            $query=mysqli_query($conexion,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <option value="<?php echo $row['ID_MARCA']?>" style="text-transform:uppercase">
                                            <?php echo $row['NOM_MARCA']?>
                                        </option>

                                        <?php
                                            }
                                        ?>
                                    </select>
                                        <br>
                                    <a id="btn_salirmarca_textil" class="ul_marca" href="#">CREAR MARCA</a>
                                    <br>
                                    <label class="titl_color">COLOR</label>
                                    <select class="color_tex" id="color_tex" name="color" style="text-transform:uppercase" required>
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM color ORDER BY NOM_COLOR ASC";
                                            $query=mysqli_query($conexion,$sql);
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                        <option value="<?php echo $row['ID_COLOR']?>" style="text-transform:uppercase">
                                            <?php echo $row['NOM_COLOR']?>
                                        </option>

                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <a id="btn_salircolor_textil" href="#" class="dir_color">CREAR COLOR</a>

                                    <label class="t_metraje" for="metraje">METRAJE</label>
                                    <input type="number" class="metraje" name="metraje" id="metraje" placeholder="METRAJE"
                                        required style="text-transform:uppercase">

                                    <label class="t_rollos">ROLLOS</label>
                                    <input type="number" class="cant_rollos" name="cant_rollos" id="cant_rollos"
                                        placeholder="CANT. ROLLOS" required style="text-transform:uppercase">

                                    <input type="hidden" name="cre_tela" value="crearmaterial">
                                    <input type="submit" class="continuar" name="regis_material" id="regis_material"
                                        value="CONTINUAR">

                                </form>
                            </div>
                        </div>

                        <!--formulario para crear tipo de tela-->
                        <div class="crear_tipo_tela_textil" id="crear_tipo_tela_textil">
                            <div class="content_from_textil">
                                <div id="cerrar_ventana_textil"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_tipo_tela">AGREGAR TIP TELA</h2>
                                <form action="../../php/crear_Mtextil/regis_tipo_tela.php" class="formulario_t"
                                    method="POST" autocomplete="off">
                                    <label class="dig-tip-t" for="">Digite Tipo Tela</label>
                                    <input type="text" class="tipoMax_tela" name="agre_tipo_tela" id="agre_tipo_tela"
                                        placeholder="TIPO TELA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-tela" name="env-tela" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear marca del mat_texil-->
                        <div class="crear_marca_textil" id="crear_marca_textil">
                            <div class="content_formMarca_textil">
                                <div id="cerrar_ventanaMarca_textil"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_marca_textil">AGREGAR MARCA</h2>
                                <form action="../../php/crear_Mtextil/regis_marca_mater.php" class="formularioMarca_textil"
                                    method="POST" autocomplete="off">
                                    <label class="dig-mar-t" for="">Digite Marca</label>
                                    <input type="text" class="ti_marca_textil" name="agre_marca" id="agre_marca"
                                        placeholder="MARCA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-marca_textil" name="env-marca" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear color del mat_textil-->
                        <div class="crear_color_textil" id="crear_color_textil">
                            <div class="content_formColor_textil">
                                <div id="cerrar_ventanaColor_textil"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_color_textil">AGREGAR COLOR</h2>
                                <form action="../../php/crear_Mtextil/regis_color_mater.php" class="formularioColor_textil"
                                    method="POST" autocomplete="off">
                                    <label class="dig-col-t" for="">Digite Color</label>
                                    <input type="text" class="ti_color_textil" name="agre_color" id="agre_color"
                                        placeholder="COLOR" required style="text-transform:uppercase">
                                    <input type="submit" class="env-color_textil" name="env-color" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                    </div>

                    <!--formulario de registro de insumos-->
                    <div class="crea_insu" id="crea_insu">
                        
                        <div class="primer_from">
                            <br>
                            <h2 class="titulo_insumo">INGRESO DE INSUMO</h2>
                            <div class="formulario" id="formulario12">
                                <form class="cre_in" action="../../php/crear_insumo/val_insumos.php" method="POST"
                                    autocomplete="off">
                                    <label id="tip_ins">TIPO DE INSUMO</label>
                                    <select id="tipo_insumos" name="tipinsumo" required style="text-transform:uppercase">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM tipo_insumo ORDER BY NOM_INSUMO ASC";
                                            $query=mysqli_query($conexion,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <option value="<?php echo $row['ID_TIPO_INSUMO']?>" style="text-transform:uppercase">
                                            <?php echo $row['NOM_INSUMO']?>
                                        </option>

                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <a id="btn_salirinsu" class="dir_insu" href="#">CREAR TIPO INSUMO</a>
                                    <br>

                                    <label class="tit_insu" for="">NOMBRE DEL INSUMO</label>
                                    <input type="text" name="nominsumo" id="nom_insumo"
                                        placeholder="NOMBRE DE INSUMO" required style="text-transform:uppercase">
                                    <br>
                                    <label class="ins_marca" for="">MARCA DEL INSUMO</label>
                                    <select  id="marca_insu" name="marca" required style="text-transform:uppercase">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM marca ORDER BY NOM_MARCA ASC";
                                            $query=mysqli_query($conexion,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <option value="<?php echo $row['ID_MARCA']?>" style="text-transform:uppercase">
                                            <?php echo $row['NOM_MARCA']?>
                                        </option>

                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <a id="btn_salirmarca_insumo" class="dir_i_marca" href="#">CREAR MARCA</a>
                                    <br>

                                    <label id="titl_color" for="">COLOR DEL INSUMO</label>
                                    <select  id="color_insu" name="color" required style="text-transform:uppercase">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM color ORDER BY NOM_COLOR ASC";
                                            $query=mysqli_query($conexion,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <option value="<?php echo $row['ID_COLOR']?>" style="text-transform:uppercase">
                                            <?php echo $row['NOM_COLOR']?>
                                        </option>

                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <a id="btn_salircolor_insumo" href="#" class="direc_color">CREAR COLOR</a>
                                    <br>


                                    <input type="submit" class="btn_insumo" value="CONTINUAR" class="form-control">
                                    <input type="hidden" name="cre_insumo" value="crearmoto">
                                </form>
                            </div>
                        </div>
                        
                        <!--formulario para crear tipo de insumo-->
                        <div class="crear_tipo_insumo" id="crear_tipo_insumo">
                            <div class="content_from_ins">
                                <div id="cerrar_ventana"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_t_insumo">AGREGAR TIP. INSUMO</h2>
                                <form action="../../php/crear_insumo/regis_tipo_insumo.php" class="formulario_tip"
                                    method="POST" autocomplete="off">
                                    <label class="dig-tip-insu" for="">Digite Tipo Insumo</label>
                                    <input type="text" class="ti_insumo" name="agre_tipo_insumo" id="agre_tipo_insumo"
                                        placeholder="TIPO INSUMO" required style="text-transform:uppercase">
                                    <input type="submit" class="env-insumo" name="env-insumo" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear marca de insumo-->
                        <div class="crear_marca_insumo" id="crear_marca_insumo">
                            <div class="content_formMarca_insu">
                                <div id="cerrar_ventanaMarca_insu"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_marca_insu">AGREGAR MARCA</h2>
                                <form action="../../php/crear_insumo/regis_marca_insu.php" class="formularioMarca_insu"
                                    method="POST" autocomplete="off">
                                    <label class="dig-mar-in" for="">Digite Marca</label>
                                    <input type="text" class="ti_marca_insu" name="agre_marca" id="agre_marca"
                                        placeholder="MARCA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-marca_insu" name="env-marca" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear color de insumo-->
                        <div class="crear_color_insu" id="crear_color_insu">
                            <div class="content_formColor_insu">
                                <div id="cerrar_ventanaColor_insu"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_color_insu">AGREGAR COLOR</h2>
                                <form action="../../php/crear_insumo/regis_color_insu.php" class="formularioColor_insu"
                                    method="POST" autocomplete="off">
                                    <label class="dig-col-in" for="">Digite Color</label>
                                    <input type="text" class="ti_color_insu" name="agre_color" id="agre_color"
                                        placeholder="COLOR" required style="text-transform:uppercase">
                                    <input type="submit" class="env-color_insu" name="env-color" value="AGREGAR">
                                </form>
                            </div>
                        </div>
    
                    </div>

                </div>
    
            </div>

        </div>
        <!--formulario de ingreso-->
        <div class="form-ingre" id="form_ingre">
            <h1 class="titulo_form">REGISTRO DE INGRESO</h1>
            <form action="../../php/crear_Mtextil/formul_ingreso.php" class="form_ingreso" method="POST" autocomplete="off">
                <label class="in_insumo">INSUMO</label>
                <select name="insumo" id="insumo" style="text-transform:uppercase">
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $sql="SELECT * FROM insumos ORDER BY NOM_INSUMOS ASC";
                        $query=mysqli_query($conexion,$sql);
                            while($row=mysqli_fetch_array($query)){
                        ?>
                    <option value="<?php echo $row['ID_INSUMOS']?>"
                        style="text-transform:uppercase">
                        <?php echo $row['NOM_INSUMOS']?>
                    </option>

                    <?php
                        }
                    ?> 
                </select>
                <a href="#" id="reg_insu" class="uno">CREAR INSUMO</a>
                <br>
                <label class="cant_in">CANTIDAD INSUMOS</label>
                <input type="number" name="cant_insumo" id="cant_insumo" placeholder="CANTIDAD" required style="text-transform:uppercase">
                <br>
                <label class="mat_tex">MATERIAL TEXTIL</label>
                <select required name="mate_textil" id="mate_textil" style="text-transform:uppercase">
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $sql="SELECT * FROM material_textil ORDER BY NOM_M_TEXTIL ASC";
                        $query=mysqli_query($conexion,$sql);
                            while($row=mysqli_fetch_array($query)){
                        ?>
                    <option value="<?php echo $row['ID_MATERIAL_TEXTIL']?>"
                        style="text-transform:uppercase">
                        <?php echo $row['NOM_M_TEXTIL']?>
                    </option>

                    <?php
                        }
                    ?> 
                </select>
                <a href="#" id="reg_m_textil" class="dos">CREAR MATERIAL TEXTIL</a>
                <br>
                <label class="cant_mat">CANTIDAD MATERIAL TEXTIL</label>
                <input type="number" name="cant_m_textil" id="cant_m_textil" placeholder="CANTIDAD" required>
                <br>
                <label class="maqui">MAQUINARIA</label>
                <select name="maquinaria" id="maquinaria" required style="text-transform:uppercase">
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $sql="SELECT * FROM maquinaria ORDER BY SERIAL ASC";
                        $query=mysqli_query($conexion,$sql);
                            while($row=mysqli_fetch_array($query)){
                        ?>
                    <option value="<?php echo $row['SERIAL']?>"
                        style="text-transform:uppercase">
                        <?php echo $row['SERIAL']?>
                    </option>

                    <?php
                        }
                    ?> 
                </select>
                <a href="#" id="reg_maqui" class="tres">CREAR MAQUINARIA</a>
                <br>
                <label class="cant_maq">CANTIDAD MAQUINARIA</label>
                <input type="number" name="cant_maquinaria" id="cant_maquinaria" placeholder="CANTIDAD" required style="text-transform:uppercase">
                <br>
                <input type="hidden" name="usuario_ingreso" id="usuario_ingreso" class="aprendiz" value="<?php echo $usario; ?>">
                <br>
                <input type="submit" name="ingreso" id="ingreso" value="REGISTRAR">

            </form>

        </div>

        <!--inventario de la maquinaria-->
        <div class="inv-maquinaria" id="inv-maquinaria">

            <h1>INVENTARIO DE MAQUINARIA</h1>
            <table class="tabla-inv">
                <tr>
                    <td>SERIAL</td>
                    <td>NOMBRE DE LA MAQUINA</td>
                    <td>MARCA</td>
                    <td>COLOR</td>

                </tr>

                <?php
            $sql = "SELECT maquinaria.SERIAL,tipo_maquinaria.NOM_TIPO_MAQUI,marca.NOM_MARCA,color.NOM_COLOR from maquinaria,tipo_maquinaria,marca,color where maquinaria.ID_TIPO_MAQUI=tipo_maquinaria.ID_TIPO_MAQUI and maquinaria.ID_MARCA=marca.ID_MARCA and maquinaria.ID_COLOR=color.ID_COLOR";
            $result = mysqli_query($conexion, $sql);
    
            while($mostrar=mysqli_fetch_array($result)){
            ?>

                <tr>
                    <td>
                        <?php echo $mostrar["SERIAL"]?>
                    </td>
                    <td>
                        <?php echo $mostrar["NOM_TIPO_MAQUI"]?>
                    </td>
                    <td>
                        <?php echo $mostrar["NOM_MARCA"]?>
                    </td>
                    <td>
                        <?php echo $mostrar["NOM_COLOR"]?>
                    </td>
                </tr>
                <?php
            }
            ?>
            </table>
        </div>
    </div>



    <script src="JS/editar.js"></script>
    <script src="JS/main.js"></script>
    <script src="JS/admi.js"></script>
    <script src="JS/eliminar_usu.js"></script>
    <script src="JS/crear_insumos.js"></script>
    <script src="JS/crear_material.js"></script>
    <script src="JS/maquinaria.js"></script>
    <!-- <script src="JS/inv-maquinarias.js"></script> -->
</body>

</html>