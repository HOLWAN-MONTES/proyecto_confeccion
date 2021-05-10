<?php
session_start();
include('../includes/conection.php');

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
    <title>Crear material textil</title>
    <script src="https://kit.fontawesome.com/7b875e4198.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="../styles/crear_material.css">
</head>
<body>
    <header>
        <div class="content_header">
            <div class="title" id="title">
                <h3>SISTEMA DE INFORMACION PARA LA ENTRADA, SALIDA Y ALMACENAMIENTO DE MATERIAL TEXTIL</h3>
            </div>


            <div class="user_min">
                <div class="content_img_user">
                    <img class="img_user" src="../img/img_user.png" alt="">
                </div>

                <div class="content_us">
                    <div class="welcome_name">
                    <span class="nam"><?php echo $_SESSION['NOMBRE'];?></span>
                        
                    </div>
                    <div class="icon" >
                        <i class="opc fas fa-angle-down" id="Pmostrar"></i>

                        <ul class="ul_users" id="mostrar">
                           <!--  <div class="a">
                                <li><a href="#">ACTUALIZAR PERFIL</a></li>
                            </div> -->
                            <div class="a">
                                <li><a href="../includes/cerrar.php"> CERRAR SESION</a></li>
                            </div>

                        </ul>
                    </div>
                </div>


            </div>
        </div>


        </div>
        <button id="btn" class="btn_menu"><i class="fas fa-align-justify"></i></button>
    </header>
    <main>
        <nav class="nav" id="nav">
            
        <div class="title_intruc">
                <h5 class="title_int"><a class="title_int" href="../users/instructor/instructor.php" styles="text-decoration:none;">INSTRUCTOR</a> </h5>
            </div>
            <div class="img_logo">
                <img class="img_logo" src="../img/COSTUD.png" alt="">
            </div>


           <div class="menu">

           
                <ul>

                    <li class="suba submenu" id="subm"><a href="">INVENTARIO<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul class="mos">
                            <li><a class="mos" id="mos" href="#">sub Item 1</a></li>
                            <li><a href="#">sub Item 2</a></li>
                            <li><a href="#">sub Item 3</a></li>
                        </ul>
                    </li>
                  
                    <li class="submenu"><a href="">REGISTRO<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="crear_insumo.php">CREAR INSUMOS</a></li>
                            <li><a href="crear_maquinaria.php">CREAR MAQUINARIA</a></li>
                            <li><a href="crear_material.php">CREAR MATERIAL TEXTIL</a></li>
                        </ul>

                    </li>
                    
                    <li><a href="">AUTORIZACIONES </a></li>
                    <li><a href="">REPORTES</a></li>
                    <div class="logo_institu">
                        <img class="logo_institu" src="../img/logo_sena.png" alt="">
                      </div>
                </ul>
            </div>
          

        </nav>
    </main>


    <div class="primer_from">
        <h1 class="titulo_material">INGRESO DE MATERIAL TEXTIL</h1>
        <div class="formul">
            <form action="../php/val_material.php" method="POST" autocomplete="off">
                <label for="">MATERIAL TEXTIL</label>
                <input type="text" class="nom_material" name="nom_material" id="nom_material" placeholder="Nombre material" required>
                <br>
                <label class="t_tela" for="tela">TIPO DE TELA</label>
                <select class="tela" id="tipo_tela" name="tipo_tela">           
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $sql="SELECT * FROM tipo_tela";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_TIPO_TELA']?>"> <?php echo $row['NOM_TIPO_TELA']?></option> 

                    <?php
                    }
                    ?>
                </select>
                <br>
                <a id="btn_salirtela" class="d_tela" href="#">CREAR TIPO TELA</a>
                <br>
                <label class="t_marca" for="marca">MARCA</label>
                <select class="marca" id="marca" name="marca">           
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $sql="SELECT * FROM marca";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_MARCA']?>"> <?php echo $row['NOM_MARCA']?></option> 

                    <?php
                    }
                    ?>
                </select>
                <br>
                <a id="btn_salirmarca" class="d_marca" href="#">CREAR MARCA</a>
                <br>
                <label class="t_color" for="color">COLOR</label>
                <select class="color" id="color" name="color">           
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $sql="SELECT * FROM color";
                        $query=mysqli_query($conexion,$sql);
                        while($row = mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_COLOR']?>"> <?php echo $row['NOM_COLOR']?></option> 

                    <?php
                    }
                    ?>
                </select>
                <br>
                <a id="btn_salircolor" href="#" class="d_color">CREAR COLOR</a>
                
                <label class="t_metraje" for="metraje">METRAJE</label>
                <input type="number" class="metraje" name="metraje" id="metraje" placeholder="Metraje" required>
                <input type="hidden" name="cre_tela" value="crearmaterial">
                <input type="submit" class="continuar" name="regis_material" id="regis_material" value="CONTINUAR">
                
            </form>
        </div>
    </div>

    <div class="crear_tipo_tela" id="crear_tipo_tela">
        <div class="content_from">
            <div id="cerrar_ventana"><i class="fas fa-times-circle"></i></div>
            <h2 class="titulo_t_tela">Agregar Tip. Tela</h2>
            <form action="../php/regis_tipo_tela.php" class="formulario_t" method="POST" autocomplete="off">
                <input type="text" class="ti_tela" name="agre_tipo_tela" id="agre_tipo_tela" placeholder="tipo tela" required>
                <input type="submit" class="env-tela" name="env-tela" value="AGREGAR">
            </form>
        </div>
    </div>

    <div class="crear_marca" id="crear_marca">
        <div class="content_formMarca">
            <div id="cerrar_ventanaMarca"><i class="fas fa-times-circle"></i></div>
            <h2 class="titulo_marca">Agregar Marca</h2>
            <form action="../php/regis_marca_mater.php" class="formularioMarca" method="POST" autocomplete="off">
                <input type="text" class="ti_marca" name="agre_marca" id="agre_marca" placeholder="Digite la marca" required>
                <input type="submit" class="env-marca" name="env-marca" value="AGREGAR">
            </form>
        </div>
    </div>

    <div class="crear_color" id="crear_color">
        <div class="content_formColor">
            <div id="cerrar_ventanaColor"><i class="fas fa-times-circle"></i></div>
            <h2 class="titulo_color">Agregar Color</h2>
            <form action="../php/regis_color_mater.php" class="formularioColor" method="POST" autocomplete="off">
                <input type="text" class="ti_color" name="agre_color" id="agre_color" placeholder="Digite el color" required>
                <input type="submit" class="env-color" name="env-color" value="AGREGAR">
            </form>
        </div>
    </div>

    <script src="../js/main.js"></script>
    <script src="../js/formularios.js"></script>
</body>
</html>