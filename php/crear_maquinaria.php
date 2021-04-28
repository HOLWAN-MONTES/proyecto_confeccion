<?php
include('../includes/conection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso maquinaria</title>
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


        </div>
        <button id="btn" class="btn_menu"><i class="fas fa-align-justify"></i></button>
    </header>
    <main>
        <nav class="nav" id="nav">
            
            <div class="title_intruc">
                <h5 class="title_int">INSTRUCTOR</h5>
            </div>
            <div class="img_logo">
                <img class="img_logo" src="../img/logo_costura.png" alt="">
            </div>


           <div class="menu">

           
                <ul>
                  
                    <li class="submenu"><a href="">REGISTRO<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="#">sub Item 1</a></li>
                            <li><a href="#">sub Item 2</a></li>
                            <li><a href="#">sub Item 3</a></li>
                            <li><a href="#">sub Item 4</a></li>
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
                        <img class="logo_institu" src="../img/logo_sena.png" alt="">
                      </div>
                </ul>
            </div>
          

        </nav>
    </main>
    
    <div class="primer_form">
        <h1 class="titulo_maqui" >INGRESO DE MAQUINARIA</h1>
        <div class="form_reg_maquina">
            <form action="val_maqui.php" method="POST" autocomplete="off">
                <input type="text" name="serial" id="serial" placeholder="Serial" required>
                <br>
                <label for="">TIPO DE MAQUINARIA</label>
                <select id="tipo_maqui" name="tipo_maqui" required>           
                    <?php
                        $sql="SELECT * FROM tipo_maquinaria";
                        $query=mysqli_query($conexion,$sql);
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $row['ID_TIP_MAQUI']?>"> <?php echo $row['NOM_TIP_MAQUI']?></option> 
                    
                    <?php
                    }
                    ?>
                </select>
                <br>
                <a href="#">CREAR TIPO DE MAQUINARIA</a>
                <br>
                <label for="marca">MARCA</label>
                <select id="marca" name="marca" required>           
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
                <a href="#">CREAR MARCA</a>
                <br>
                <label for="">COLOR DE MAQUINARIA</label>
                <select id="color" name="color">
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
                <a href="cre_color_ins.php">CREAR COLOR DE MAQUINARIA</a>
                <br>
                <label for="estado">ESTADO</label>
                <input type="text" name="estado" id="estado" placeholder="Estado" required>  
                <input type="hidden" name="cre_maqui" value="crearmaquina">
                <input type="submit" class="continuar" name="registrar_maquina" id="registrar_maquina" value="CONTINUAR">  
            </form>
        </div>
    </div>
    
    <script src="../js/main.js"></script>
    
</body>
</html>
