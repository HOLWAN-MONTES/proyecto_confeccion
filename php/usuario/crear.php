<?php
    require '../../includes/conection.php';
    
    if($_POST["registro"]){
        //Declaramos las variables para almacenar los datos digitados
        $doc = $_POST["docu"];
        $nom = $_POST["nom"];
        $ape = $_POST["apel"];
        $tipo_use = $_POST["tip_us"];
        $tipo_doc = $_POST["tip_doc"];
        $edad = $_POST["edad"];
        $pass = $_POST["contra"];
        $telefono = $_POST["tele"];
        $correo = $_POST["cor"];

        /* subir imagen  */
        $imagen = $_FILES['imagen'] ['name'];
        $ruta = $_FILES['imagen'] ['tmp_name'];
        $destino = "../../images/".$imagen;
        copy($ruta,$destino);

        //Hacemos la consulta para que me seleccione los datos en la BD y valide
        $consul = "INSERT INTO usuario(DOCUMENTO, ID_TIPO_DOCU, ID_TIPO_USU, NOMBRE, 
        APELLIDO, PASSWORD, EDAD, TELEFONO, CORREO,FOTO) VALUES('$doc', '$tipo_doc', '$tipo_use', 
        '$nom', '$ape', '$pass', '$edad', '$telefono', '$correo','$imagen')";
        $query = mysqli_query($conexion,$consul);

        if(!$query){
            echo '<script> alert ("Error al registrarlo");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
        else{
            echo '<script> alert ("Exito al registrarlo");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
    }
    else{
        echo '<script> alert ("Ups algo fallo, intentalo de nuevo");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }

?>