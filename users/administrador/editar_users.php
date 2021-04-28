<?php
require '../../includes/conection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7b875e4198.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../styles/editar_users.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>Editar Usuarios</title>
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
        <button id="btn" class="btn_menu"><i class="fas fa-align-justify"></i></button>
    </header>
    <main>
        <nav class="nav" id="nav">
            <div class="title_intruc">
                <h5 class="title_int">INSTRUCTOR</h5>
            </div>
            <div class="img_logo">
                <img class="img_logo" src="../img/lafea.jpg" alt="">
            </div>
           <div class="menu">
                <ul>
                    <li class="suba submenu" id="subm"><a href="">ADMIN. USUARIOS<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul  class="mos">
                            <li><a href="registro_users.php">Registro De Usuarios</a></li>
                            <li><a href="editar_users.php">Editar Usuario</a></li>
                            <li><a href="eliminar_users.php">Eliminar Usuario</a></li>
                        </ul>
                    </li>
                    <li class="submenu"><a href="">REGISTRO<span><i class="opc fas fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="registro_users.php">Registro De Usuarios</a></li>
                            <li><a href="editar_users.php">Editar Usuario</a></li>
                            <li><a href="eliminar_users.php">Eliminar Usuario</a></li>
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
                        <img class="logo_institu" src="../../img/logo_sena.png" alt="">
                      </div>
                </ul>
            </div>
        </nav>
    </main> <br>
    <div class="titulo">
        <h1>Edición De Usuarios</h1>
    </div>
    <form class="form" id="form" method="POST">
        <input type="number" name="docu" id="docu" placeholder="DOCUMENTO" autocomplete="off" required> &nbsp;&nbsp;&nbsp;
        <input type="text" name="nom" id="nom" placeholder="NOMBRE" autocomplete="off" required>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="apel" id="apel" placeholder="APELLIDO" autocomplete="off" required> <br><br>
        <div class="user">
            <label id="tex-use" for="">TIPO DE USUARIO</label><br>
            <select name="tip_us" class="tip_usu" id="tip_usu" autocomplete="off" required>
                <option value="0">SELECCIONAR</option>
                <?php
                    $tipo = "SELECT * FROM tipo_usu";
                    $inser = mysqli_query($conexion,$tipo);
                    while($tip = mysqli_fetch_array($inser)){
                ?>
                <option name="tip_user" value="<?php echo $tip[0]; ?>"><?php echo $tip[1]; ?></option>
                <?php
                }
                ?>
            </select><br>
        </div>
        <div class="doc">
            <label for="">TIPO DE DOCUMENTO</label><br>
            <select name="tip_doc" id="tip_docu" autocomplete="off" required>
                <option value="0">SELECCIONAR</option>
                <?php
                    $tipo2 = "SELECT * FROM tipo_docu";
                    $inser2 = mysqli_query($conexion,$tipo2);
                    while($tip2 = mysqli_fetch_array($inser2)){
                ?>
                <option name="tip_user" value="<?php echo $tip2[0]; ?>"><?php echo $tip2[1]; ?></option>
                <?php
                }
                ?>
            </select>
        </div><br>
        
        <input type="number" name="edad" id="edad" placeholder="EDAD" autocomplete="off" required>
        <input type="password" name="contra" id="contra" placeholder="CONTRASEÑA" autocomplete="off" required>
        <input type="number" name="tele" id="tele" placeholder="TELEFONO" autocomplete="off" required>
        <input type="text" name="cor" id="cor" placeholder="CORREO" autocomplete="off" required>
        <input type="hidden" name="docume" id="docume">
        <input type="submit" name="actualiza" id="reg" value="ACTUALIZAR">
    </form>
    <script>
        const formu = document.getElementById('form');
        const documento = document.getElementById('docu');
        const nomb = document.getElementById('nom');
        const apel = document.getElementById('apel');
        const sel_use = document.getElementById('tip_usu');
        const sel_docu = document.getElementById('tip_docu');
        const edad = document.getElementById('edad');
        const contra = document.getElementById('contra');
        const celu = document.getElementById('tele');
        const correo = document.getElementById('cor');
        const docmen = document.getElementById('docume');
        document.addEventListener('keypress', (e)=>{
            if(e.keyCode === 13){
                if(e.target === documento){
                    e.preventDefault();
                    console.log("hola no refresque");
                    const option = {
                        method: "POST",
                        headers: {
                            'Content-type': 'application/json',
                        },
                        body: JSON.stringify({
                            docum: documento.value,
                        })
                    }
                    fetch('../../php/editar_user.php', option)
                     .then(res => res.ok ? res.json() : Promise.reject(res))
                     .then(datos => {
                        console.log(datos);
                        const {err, status, statusText, data} = datos;
                        if(data.lenght !== 0){
                            const {DOCUMENTO, ID_TIPO_DOCU, ID_TIPO_USU, NOMBRE, APELLIDO, PASSWORD, EDAD, TELEFONO, CORREO} = data;
                            docmen.value = DOCUMENTO;
                            documento.disabled = true;
                            nomb.value = NOMBRE;
                            nomb.disabled = true;
                            apel.value = APELLIDO;
                            apel.disabled = true;
                            sel_use.value = ID_TIPO_USU;
                            sel_use.disabled = true;
                            sel_docu.value = ID_TIPO_DOCU;
                            sel_docu.disabled = true;
                            edad.value = EDAD;
                            edad.disabled = true;
                            celu.value = TELEFONO;
                            correo.value = CORREO;
                            correo.disabled = true;
                        }
                        else{
                            alert('No se encontro usuario');
                        }
                     })
                     .catch(error => console.error(error));
                }
            }
            
        })
        document.addEventListener('submit', (e)=>{
            if(e.target === formu){
                e.preventDefault();
                const option = {
                    method: "PUT",
                    headers: {
                        'Content-type': 'application/json',
                    },
                    body: JSON.stringify({
                        docum: docmen.value,
                        tele: celu.value,
                        cor: correo.value,
                        contra: contra.value,
                    })
                }
                fetch('../../php/editar_user.php', option)
                 .then(res => res.ok ? res.json() : Promise.reject(res))
                 .then(datos => {
                    const {err, status, statusText} = datos;
                    if(status >= 200 && status < 300){
                        alert("Se ha actualizado correctamente");
                        window.location.href="../administrador/editar_users.php";
                    }
                    else{
                        alert("No se ha actualizado correctamente");
                        window.location.href="../administrador/editar_users.php";
                    }
                    console.log(datos);
                 })
                 .catch(error => console.error(error));
                 
            }
        })
    </script>
    <script src="../../js/main.js"></script>
</body>
</html>