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
    <title>Crear maquinaria</title>
    <script src="https://kit.fontawesome.com/7b875e4198.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/crear_maquinaria.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
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
                <h5 class="title_int"><a class="title_int" href="../users/instructor/instructor.php"styles="text-decoration:none;">INSTRUCTOR</a> </h5>
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
                            <li><a href="crear_insumo.php">Crear insumos</a></li>
                            <li><a href="crear_maquinaria.php">CREAR MAQUINARIA</a></li>
                            <li><a href="crear_material.php">Crear material textil</a></li>
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
    
    <div class="primer_form">
        <h1 class="titulo_maqui">INGRESO DE MAQUINARIA</h1>
        <div class="form_reg_maquina">
            <form action="../php/val_maqui.php" method="POST" autocomplete="off">
                <input type="text" name="serial" id="serial" placeholder="Serial" required>
                <br>
                <label for="">TIPO DE MAQUINARIA</label>
                <select id="tipo_maqui" name="tipo_maqui" required>           
                    <option value="">SELECCIONAR</option>
                    <?php
                        $sql="SELECT * FROM tipo_maquinaria";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_TIPO_MAQUI']?>"> <?php echo $row['NOM_TIPO_MAQUI']?></option> 
                    
                    <?php
                    }
                    ?>
                </select>
                <br>
                <a id="btn_salirmaquinaria" href="#">CREAR TIPO DE MAQUINARIA</a>
                <br>
                <label for="marca">MARCA</label>
                <select id="marca" name="marca" required>           
                    <option value="">SELECCIONAR</option>
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
                <a id="btn_salirmarca" href="#">CREAR MARCA</a>
                <br>
                <label for="">COLOR DE MAQUINARIA</label>
                <select id="color" name="color">
                    <option value="">SELECCIONAR</option>   
                    <?php
                        $sql="SELECT*FROM color";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_COLOR']?>"> <?php echo $row['NOM_COLOR']?></option> 

                    <?php
                    }
                    ?>
                </select>
                <a id="btn_salircolor" href="#" class="d_color">CREAR COLOR</a>
                <br>
                 
                <input type="hidden" name="cre_maqui" value="crearmaquina">
                <input type="submit" class="continuar" name="registrar_maquina" id="registrar_maquina" value="CONTINUAR">  
            </form>
        </div>
    </div>

    <div class="crear_maquinaria" id="crear_maquinaria">
        <div class="content_formMaquinaria">
            <div id="cerrar_ventanaMaquinaria"><i class="fas fa-times-circle"></i></div>
            <h2 class="titulo_maquinaria">Agregar Tip. Maquinaria</h2>
            <form action="../php/regis_tip_maqui.php" class="formularioMaquinaria" method="POST" autocomplete="off">
                <input type="text" class="ti_maquinaria" name="agre_maquinaria" id="agre_maquinaria" placeholder="Tipo de maquinaria" required>
                <input type="submit" class="env-maquinaria" name="env-maquinaria" value="AGREGAR">
            </form>
        </div>
    </div>

    <div class="crear_marca" id="crear_marca">
        <div class="content_formMarca">
            <div id="cerrar_ventanaMarca"><i class="fas fa-times-circle"></i></div>
            <h2 class="titulo_marca">Agregar Marca</h2>
            <form action="../php/regis_marca_maqui.php" class="formularioMarca" method="POST" autocomplete="off">
                <input type="text" class="ti_marca" name="agre_marca" id="agre_marca" placeholder="Digite la marca" required>
                <input type="submit" class="env-marca" name="env-marca" value="AGREGAR">
            </form>
        </div>
    </div>

    <div class="crear_color" id="crear_color">
        <div class="content_formColor">
            <div id="cerrar_ventanaColor"><i class="fas fa-times-circle"></i></div>
            <h2 class="titulo_color">Agregar Color</h2>
            <form action="../php/regis_color_maqui.php" class="formularioColor" method="POST" autocomplete="off">
                <input type="text" class="ti_color" name="agre_color" id="agre_color" placeholder="Digite el color" required>
                <input type="submit" class="env-color" name="env-color" value="AGREGAR">
            </form>
        </div>
    </div>                
    
    <script src="../js/main.js"></script>
    <script src="../js/maquinaria.js"></script>
    
</body>
</html>
