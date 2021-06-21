<?php
session_start();
include('../../includes/conection.php');

$usario = $_SESSION["DOCUMENTO"];
if ($usario == "" || $usario == null) {
    header("location: ../../index.html");
}
$consu = "SELECT * FROM usuario WHERE DOCUMENTO = '$usario' AND ID_TIPO_USU = 2";
$query = mysqli_query($conexion, $consu);
$file = mysqli_fetch_assoc($query);
$nom = $file['NOMBRE'];
date_default_timezone_set("America/Bogota");
$fecha = date("o-m-d");
$hora = date("H:i:s");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7b875e4198.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="CSS_INSTRU/instru.css">
    <link rel="stylesheet" href="CSS_INSTRU/prestamo.css">
    <link rel="stylesheet" href="CSS_INSTRU/reg_prestamo.css">
    
    <title>INSTRUCTOR</title>
</head>

<body>
    <div class="principal">
        <div class="lateral">
            <div class="superior">
                <br>
                <h5 class="title_int"><a class="menuaaa" href="instructo.php">INSTRUCTOR</a> </h5>
            </div>
            <div class="navegacion">
                <div class="img_logo">
                    <img class="img_lo" src="../../img/COSTUD.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li class="suba_submenu" id="btn_registro">REGISTRO PRESTAMO</li>
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
                <div class="form_reg_pres" id="form_reg_pres">
                    <div class="contentIngresoDeInsumos" id="contentIngresoDeInsumos">
                        <h1>PETICIONES DE PRESTAMOS</h1>
                        
                        <div class="contengeneralbb">
                            <form action="" method="post">
                                <div class="primeraSeccionFechas">
                                    
                                    <div>
                                        <b>RESPONSABLE = <?php echo $nom; ?></b>
                                    </div>      
                                    <div>
                                        <b>FECHA = <?php echo $fecha; ?></b>
                                    </div>
                                    <div>
                                        <b>HORA = <?php echo $hora; ?></b>
                                    </div>

                                </div>

                                <div class="categorias" id="cate">

                                    <div class="categoriass">
                                        <label for="">CATEGORIA</label>    
                                            <select class="input6 tip_mat" name="categorias" id="ti_pres" required>
                                                <option>SELECCIONAR</option>
                                                <?php
                                                $tipo2 = "SELECT * FROM tipo_material";
                                                $inser2 = mysqli_query($conexion,$tipo2);
                                                while($tip2 = mysqli_fetch_array($inser2)){
                                                ?>
                                                <option name="tip_material" id="op_mat" value="<?php echo $tip2[0]; ?>">
                                                    <?php echo $tip2[1]; ?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="NombreCate">
                                        <label for="">NOMBRE</label> 
                                            <select class="input6" name="pres" id="pres" required>
                                                <option>SELECCIONAR</option>
                                            </select>
                                    </div>

                                    <div class="cantidadSe">
                                        <label for="">CANTIDAD</label>
                                        <input type="number" id="cant" class="canti" placeholder="CANTIDAD">
                                    </div>

                                    <div class="bnt">
                                        <input type="button" id="agregar" value="AGREGAR"> <!-- agregar a la lista -->
                                    </div>

                                
                                
                                </div>
                                    <div class="agregarTodosLosListados">
                                        <!-- ACA VAN TODOS LOS LISTADOS DE LO QUE SEA AGREGUE -->
                                        <table class="tabla_info" id="tab_info">
                                            <thead class="tab">
                                                <tr class="tab-ml">
                                                    <td class="tab_ml">CATEGORIA</td>
                                                    <td class="tab_ml">NOMBRE</td>
                                                    <td class="tab_ml">CANTIDAD</td>
                                                    <td class="tab_ml">ACCION</td>
                                                </tr>
                                            </thead>
                                            <tbody class="agregado" id="agregado">
                                            </tbody>
                                        </table>
                                        <!-- CA VAN TODOS LOS LISTADOS DE LO QUE SE AGREGUE -->
                                    </div>

                                    <div>
                                        <input type="button" value="ENVIAR"> <!-- enviar a la db -->
                                    </div>      
                            </form>
                        </div>
            
            
                    </div>
                </div>
            </div>
        </div>           

    </div>
    <script src="JS_INSTRU/instru.js"></script>
    <script src="JS_INSTRU/valida_insu_mat.js" type="module"></script>            
    
    
</body>

</html>