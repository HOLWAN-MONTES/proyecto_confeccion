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
    <title>Crear insumos</title>
    <script src="https://kit.fontawesome.com/7b875e4198.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="../styles/crear_insumo.css">
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
                <h5 class="title_int"><a class="title_int" href="../users/administrador/admin.php" styles="text-decoration:none;">ADMINISTRADOR</a> </h5>
            </div>
            <div class="img_logo">
                <img class="img_logo" src="../img/logo_costura.png" alt="">
            </div>


           <div class="menu">

           
                <ul>
                    <li class="suba submenu" id="subm"><a href="">ADMIN. USUARIOS<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul  class="mos">
                            <li><a href="../users/administrador/registro_users.php">Registro De Usuarios</a></li>
                            <li><a href="../users/administrador/editar_users.php">Editar Usuario</a></li>
                            <li><a href="../users/administrador/eliminar_users.php">Eliminar Usuario</a></li>
                        </ul>
                    </li>
                  
                    <li class="submenu"><a href="">REGISTRO<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul>
                        <li><a href="crear_insumo.php">Crear insumos</a></li>
                            <li><a href="crear_maquinaria.php">Crear maquinaria</a></li>
                            <li><a href="crear_material.php">Crear material textil</a></li>
                        </ul>

                    </li>

                    <li class="submenu"><a href="">INVENTARIO<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul class="mos">
                            <li><a class="mos" id="mos" href="#">sub Item 1</a></li>
                            <li><a href="#">sub Item 2</a></li>
                            <li><a href="#">sub Item 3</a></li>
                            <li><a href="#">sub Item 4</a></li>
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
        <h2 class="titulo_insumo">INGRESO DE INSUMO</h2>
        <div class="formulario">
            <form action="../php/val_insumos.php" method="POST" autocomplete="off">                            
                <label for="tipinsu">TIPO DE INSUMO</label>              
                <select class="insumo" id="tipinsumo" name="tipinsumo" required>           
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $sql="SELECT*FROM tipo_insumo";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_TIPO_INSUMO']?>"> <?php echo $row['NOM_INSUMO']?></option> 

                    <?php
                    }
                    ?>
                </select>
                <br>
                <a href="cre_tip_ins.php">Crear tipo de insumo</a>
                <br>

                <label class="t_insu" for="">NOMBRE DEL INSUMO</label>
                <input type="text" class="insu" name="nominsumo" id="nominsumo" placeholder="Tijeras punta redonda" required>
                <br>
                <label class="t_marca" for="">MARCA DEL INSUMO</label>
                <select class="marca" id="marca" name="marca" required>
                    <option value="0">SELECCIONAR</option>
                    <?php
                        $sql="SELECT*FROM marca";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_MARCA']?>"> <?php echo $row['NOM_MARCA']?></option> 
                    <?php
                    }
                    ?>
                </select>
                <br>
                <a href="cre_marc_ins.php" class="d_marca">Crear marca del insumo</a>
                <br>

                <label class="t_color" for="">COLOR DEL INSUMO</label>
                <select class="color" id="color" name="color" required>
                    <option value="0">SELECCIONAR</option>
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
                <br>
                <a href="cre_color_ins.php" class="d_color">Crear color de insumo</a>
                <br>
                
               
                <input type="submit" class="btn_insumo" value="CREAR INSUMO" class="form-control">
                <input type="hidden" name="cre_insumo" value="crearmoto">
            </form>
        </div>    
    </div>



<script src="../js/main.js"></script>
    
</body>
</html>