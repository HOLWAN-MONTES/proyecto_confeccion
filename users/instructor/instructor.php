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
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="CSS_USU/instru.css">
    <link rel="stylesheet" href="CSS_CREAR/inv-maquinarias.css">
    <link rel="stylesheet" href="CSS_CREAR/insumos.css">
    <link rel="stylesheet" href="CSS_CREAR/material_textil.css">
    <link rel="stylesheet" href="CSS_CREAR/maquina.css">
    <title>INSTRUCTOR</title>
</head>

<body>
    <div class="principal">
        <div class="lateral">
            <div class="superior">
                <br>
                <h5 class="title_int"><a class="menuaaa" href="admin.php">INSTRUCTOR</a> </h5>
            </div>
            <div class="navegacion">
                <div class="img_logo">
                    <img class="img_lo" src="../../img/COSTUD.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li class="suba_submenu" id="subm">REGISTRO ⬇
                            <ul class="mostr">
                                <li id="insu">CREAR INSUMOS</li>
                                <li id="maquinaa">CREAR MAQUINARIA</li>
                                <li id="mate_tex">CREAR MATERIAL TEXTIL</li>
                            </ul>
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
                                    <input type="number" name="serial" id="serial" placeholder="SERIAL" required>
                                    <br>
                                    <label id="l_maquinn" for="">TIPO DE MAQUINARIA</label>
                                    <select id="tipo_maqui" name="tipo_maqui" required>
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                                $sql="SELECT * FROM tipo_maquinaria";
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
                                    <select id="marca" name="marca" required>
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                                $sql="SELECT * FROM marca";
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
                                    <select id="color" name="color">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                                $sql="SELECT*FROM color";
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
                        <div class="crear_maquinarias" id="crear_maquinarias">
                            <div class="content_formMaquinaria">
                                <div id="cerrar_ventanaMaqui"><img class="cerrar1" src="../../img/cerrar.png"
                                        alt="Cerrar"></div>
                                <h2 class="titulo_maquinaria">AGREGAR TIP. MAQUINARIA</h2>
                                <form action="../../php/crear_maqui/regis_tip_maqui.php" class="formularioMaquinaria"
                                    method="POST" autocomplete="off">
                                    <input type="text" class="ti_maquinaria" name="agre_maquinaria" id="agre_maquinaria"
                                        placeholder="TIPO DE MAQUINARIA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-maquinaria" name="env-maquinaria" value="AGREGAR">
                                </form>
                            </div>
                        </div>
                        
                        <!--formulario para crear la marca de maquinaria-->
                        <div class="crear_marca" id="crear_marca">
                            <div class="content_formMarca">
                                <div id="cerrar_ventanaMarca"><img class="cerrar1" src="../../img/cerrar.png" alt="Cerrar"></div>
                                <h2 class="titulo_marca">AGREGAR MARCA</h2>
                                <form action="../../php/crear_maqui/regis_marca_maqui.php" class="formularioMarca" method="POST" autocomplete="off">
                                    <input type="text" class="ti_marca" name="agre_marca" id="agre_marca" placeholder="MARCA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-marca" name="env-marca" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear el color de maquinaria-->
                        <div class="crear_color" id="crear_color">
                            <div class="content_formColor">
                                <div id="cerrar_ventanaColor"><img class="cerrar1" src="../../img/cerrar.png" alt="Cerrar"></div>
                                <h2 class="titulo_color">AGREGAR COLOR</h2>
                                <form action="../../php/crear_maqui/regis_color_maqui.php" class="formularioColor" method="POST" autocomplete="off">
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
                                        placeholder="NOMBRE MATERIAL" required style="text-transform:uppercase">
                                    <br>
                                    <label id="t_tela" for="tela">TIPO DE TELA</label>
                                    <select class="tela" id="tipo_tela" name="tipo_tela">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM tipo_tela";
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
                                    <select class="marca_tex" id="marca_tex" name="marca">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM marca";
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
                                    <select class="color_tex" id="color_tex" name="color">
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT * FROM color";
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
                                        required>

                                    <label class="t_rollos">ROLLOS</label>
                                    <input type="number" class="cant_rollos" name="cant_rollos" id="cant_rollos"
                                        placeholder="CANT. ROLLOS" required>

                                    <input type="hidden" name="cre_tela" value="crearmaterial">
                                    <input type="submit" class="continuar" name="regis_material" id="regis_material"
                                        value="CONTINUAR">

                                </form>
                            </div>
                        </div>

                        <!--formulario para crear tipo de tela-->
                        <div class="crear_tipo_tela_textil" id="crear_tipo_tela_textil">
                            <div class="content_from_textil">
                                <div id="cerrar_ventana_textil"><img class="cerrar1" src="../../img/cerrar.png"
                                        alt="Cerrar"></div>
                                <h2 class="titulo_tipo_tela">AGREGAR TIP TELA</h2>
                                <form action="../../php/crear_Mtextil/regis_tipo_tela.php" class="formulario_t"
                                    method="POST" autocomplete="off">
                                    <input type="text" class="tipoMax_tela" name="agre_tipo_tela" id="agre_tipo_tela"
                                        placeholder="TIPO TELA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-tela" name="env-tela" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear marca del mat_texil-->
                        <div class="crear_marca_textil" id="crear_marca_textil">
                            <div class="content_formMarca_textil">
                                <div id="cerrar_ventanaMarca_textil"><img class="cerrar1" src="../../img/cerrar.png"
                                        alt="Cerrar"></div>
                                <h2 class="titulo_marca_textil">AGREGAR MARCA</h2>
                                <form action="../../php/crear_Mtextil/regis_marca_mater.php" class="formularioMarca_textil"
                                    method="POST" autocomplete="off">
                                    <input type="text" class="ti_marca_textil" name="agre_marca" id="agre_marca"
                                        placeholder="MARCA" required style="text-transform:uppercase">
                                    <input type="submit" class="env-marca_textil" name="env-marca" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear color del mat_textil-->
                        <div class="crear_color_textil" id="crear_color_textil">
                            <div class="content_formColor_textil">
                                <div id="cerrar_ventanaColor_textil"><img class="cerrar1" src="../../img/cerrar.png"
                                        alt="Cerrar"></div>
                                <h2 class="titulo_color_textil">AGREGAR COLOR</h2>
                                <form action="../../php/crear_Mtextil/regis_color_mater.php" class="formularioColor_textil"
                                    method="POST" autocomplete="off">
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
                            <div class="formulario">
                                <form class="cre_in" action="../../php/crear_insumo/val_insumos.php" method="POST"
                                    autocomplete="off">
                                    <label id="tip_ins">TIPO DE INSUMO</label>
                                    <select id="tipo_insumos" name="tipinsumo" required>
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT*FROM tipo_insumo";
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
                                    <select  id="marca_insu" name="marca" required>
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT*FROM marca";
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
                                    <a id="btn_salirmarca" class="dir_i_marca" href="#">CREAR MARCA</a>
                                    <br>

                                    <label id="titl_color" for="">COLOR DEL INSUMO</label>
                                    <select  id="color_insu" name="color" required>
                                        <option value="0">SELECCIONAR</option>
                                        <?php
                                            $sql="SELECT*FROM color";
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
                                    <a id="btn_salircolor" href="#" class="direc_color">CREAR COLOR</a>
                                    <br>


                                    <input type="submit" class="btn_insumo" value="CONTINUAR" class="form-control">
                                    <input type="hidden" name="cre_insumo" value="crearmoto">
                                </form>
                            </div>
                        </div>
                        
                        <!--formulario para crear tipo de insumo-->
                        <div class="crear_tipo_insumo" id="crear_tipo_insumo">
                            <div class="content_from">
                                <div id="cerrar_ventana"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_t_insumo">Agregar Tip. Insumo</h2>
                                <form action="../../php/crear_insumo/regis_tipo_insumo.php" class="formulario_t"
                                    method="POST" autocomplete="off">
                                    <input type="text" class="ti_insumo" name="agre_tipo_insumo" id="agre_tipo_insumo"
                                        placeholder="tipo insumo" required>
                                    <input type="submit" class="env-insumo" name="env-insumo" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear marca de insumo-->
                        <div class="crear_marca" id="crear_marca">
                            <div class="content_formMarca">
                                <div id="cerrar_ventanaMarca"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_marca">Agregar Marca</h2>
                                <form action="../../php/crear_insumo/regis_marca_insu.php" class="formularioMarca"
                                    method="POST" autocomplete="off">
                                    <input type="text" class="ti_marca" name="agre_marca" id="agre_marca"
                                        placeholder="Digite la marca" required>
                                    <input type="submit" class="env-marca" name="env-marca" value="AGREGAR">
                                </form>
                            </div>
                        </div>

                        <!--formulario para crear color de insumo-->
                        <div class="crear_color" id="crear_color">
                            <div class="content_formColor">
                                <div id="cerrar_ventanaColor"><i class="fas fa-times-circle"></i></div>
                                <h2 class="titulo_color">Agregar Color</h2>
                                <form action="../../php/crear_insumo/regis_color_insu.php" class="formularioColor"
                                    method="POST" autocomplete="off">
                                    <input type="text" class="ti_color" name="agre_color" id="agre_color"
                                        placeholder="Digite el color" required>
                                    <input type="submit" class="env-color" name="env-color" value="AGREGAR">
                                </form>
                            </div>
                        </div>
    
                    </div>


                </div>
                
            </div>

        </div>

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



    <script src="JS/instru.js"></script>
    <script src="JS/crear_insumos.js"></script>
    <script src="JS/crear_material.js"></script>
    <script src="JS/maquinaria.js"></script>
    <!-- <script src="JS/inv-maquinarias.js"></script> -->
</body>

</html>