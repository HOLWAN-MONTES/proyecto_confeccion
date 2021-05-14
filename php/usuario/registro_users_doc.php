<?php
    require '../../includes/conection.php';

    if($_POST["env-doc"]){
        //Declaramos las variables para almacenar los datos digitados
        $tipo_doc = $_POST["tipo-docume"];

        //Hacemos la consulta para que me seleccione los datos en la BD y valide
        $consul = "INSERT INTO tipo_docu(NOM_TIPO_DOCU) VALUES('$tipo_doc')";
        $query = mysqli_query($conexion,$consul);

        if(!$query){
            echo '<script> alert ("Error al registrar el documento");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
        else{
            echo '<script> alert ("Exito al registrar el documento");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
    }
    elseif($_POST["env-user"]){
        $tipo_user = $_POST["tipo-user"];

        //Hacemos la consulta para que me seleccione los datos en la BD y valide
        $consul = "INSERT INTO tipo_usu(NOM_TIPO_USU) VALUES('$tipo_user')";
        $query = mysqli_query($conexion,$consul);

        if(!$query){
            echo '<script> alert ("Error al registrarlo el usuario");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
        else{
            echo '<script> alert ("Exito al registrarlo el usuario");</script>';
            echo '<script> window.location="../../users/administrador/admin.php" </script>';
        }
    }
    else{
        echo '<script> alert ("Ups algo fallo, intentalo de nuevo ");</script>';
        echo '<script> window.location="../../users/administrador/admin.php" </script>';
    }
    

?>