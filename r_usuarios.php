<?php

if (!empty($_POST["nombrecompleto"])and!empty($_POST["nombre_usuario"])and !empty($_POST["correo"]) and !empty($_POST["contrasena"])and !empty($_POST["perfil"])){
    include ('conexion.php');
    echo '<br><br>';

    $nombre=  $_POST["nombrecompleto"];
    $N_usuario=$_POST["nombre_usuario"];
    $correo=$_POST["correo"];
    $contraseña=$_POST["contrasena"];
    $perfil=$_POST["perfil"];




    $consulta_sql= "INSERT INTO usuarios (nombre_completo,N_usuario,correo,contrasena,perfil) VALUES ('$nombre','$N_usuario' ,'$correo','$contraseña','$perfil')";

    $query_mysql = $con->query($consulta_sql); 
    if($query_mysql==true ){
        echo "el registro se guardo correctamente";
    }
    else{
        echo "el registro no se pudo guardar";
    }
    echo '<br><br>';
    var_dump ($query_mysql);
    $con->close();

}
?>

