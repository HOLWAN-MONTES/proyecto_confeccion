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
    <link rel="stylesheet" href="../../styles/admin.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>VOCERO</title>
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
                        <span class="nam"><?php echo $_SESSION['NOMBRE'];?></span>

                    </div>
                    <div class="icon" >
                        <i class="opc fas fa-angle-down" id="Pmostrar"></i>

                        <ul class="ul_users" id="mostrar">
                           <!--  <div class="a">
                                <li><a href="#">ACTUALIZAR PERFIL</a></li>
                            </div> -->
                            <div class="a">
                                <li><a href="../../includes/cerrar.php"> CERRAR SESION</a></li>
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
                <h5 class="title_int"><a class="title_int" href="vocero.php">APR. VOCERO</a> </h5>
            </div>
            <div class="img_logo">
                <img class="img_logo" src="../../img/COSTUD.png" alt="">
            </div>


            <div class="menu">
                <ul>

                    <li class="suba submenu" id="subm"><a href="">PRESTAMOS<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul class="mos">
                            <li><a class="mos" id="mos" href="#">sub Item 1</a></li>
                            <li><a href="#">sub Item 2</a></li>
                            <li><a href="#">sub Item 3</a></li>
                        </ul>
                    </li>
                    <li class="suba submenu" id="subm"><a href="">PRESTAMOS TEXTIL<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul class="mos">
                            <li><a class="mos" id="mos" href="#">sub Item 1</a></li>
                            <li><a href="#">sub Item 2</a></li>
                            <li><a href="#">sub Item 3</a></li>
                        </ul>
                    </li>
                    <div class="logo_institu">
                        <img class="logo_institu" src="../../img/logo_sena.png" alt="">
                    </div>
                </ul>
            </div>


        </nav>
    </main>
    <footer>

    </footer>
    <script src="../../js/main.js"></script>
</body>

</html>