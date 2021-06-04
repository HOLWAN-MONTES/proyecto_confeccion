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
    <link rel="stylesheet" href="CSS_VOCERO/prestamo.css">
    <link rel="stylesheet" href="CSS_VOCERO/reg_prestamo.css">
    
    <title>VOCERO</title>
</head>

<body>
    <div class="principal">
        <div class="lateral">
            <div class="superior">
                <br>
                <h5 class="title_int"><a class="menuaaa" href="vocero.php">APR. VOCERO</a> </h5>
            </div>
            <div class="navegacion">
                <div class="img_logo">
                    <img class="img_lo" src="../../img/COSTUD.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li class="suba_submenu" id="btn_prestamo">PRESTAMOS 
                        </li>

                        <li class="suba_submenu" id="btn_registro">PRESTAMOS TEXTIL 
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

            <!--div que tiene toda la informacion que se le ofrece al vocero-->
            <div class="info">

                <!--formulario de prestamo-->
                <div class="form-prestamo" id="form_prestamo">
                    <div class="primer_form">
                        <h1 class="titulo_form">REGISTRO DE PRESTAMOS</h1>
                        <form action="#" class="form_prest" method="POST" autocomplete="off">
                            <label class="aprend_pres">APRENDIZ</label>
                            <select name="aprendiz" id="aprendiz">
                                <option value="0">SELECCIONAR</option>
                                <?php
                                    $sql="SELECT * FROM usuario";
                                    $query=mysqli_query($conexion,$sql);
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                <option value="<?php echo $row['DOCUMENTO']?>"
                                    style="text-transform:uppercase">
                                    <?php echo $row['NOMBRE']?>
                                </option>

                                <?php
                                    }
                                ?> 
                            </select>
                            <br>
                            <input type="submit" name="reg_prestamo" id="reg_prestamo" value="CONTINUAR">

                        </form>

                    </div>
                    
                </div>

                <!--formulario de registro de prestamo-->
                <div class="form_reg_pres" id="form_reg_pres">
                    <h1 class="titulo_form">REGISTRO DE INGRESO</h1>
                    <form action="#" class="form_ingreso" method="POST" autocomplete="off">
                        <label class="in_insumo">INSUMO</label>
                        <select name="insumo" id="insumo">
                            <option value="0">SELECCIONAR</option>
                            <?php
                                $sql="SELECT * FROM insumos";
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
                        <input type="number" name="cant_insumo" id="cant_insumo" placeholder="CANTIDAD" required>
                        <br>
                        <label class="mat_tex">MATERIAL TEXTIL</label>
                        <select name="mate_textil" id="mate_textil">
                            <option value="0">SELECCIONAR</option>
                            <?php
                                $sql="SELECT * FROM material_textil";
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
                        <input type="submit" name="ingreso" id="ingreso" value="REGISTRAR">

                    </form>

                </div>
            
            </div>

        </div>
        
    </div>


    <script src="JS_VOCERO/vocero.js"></script>
    
    
</body>

</html>