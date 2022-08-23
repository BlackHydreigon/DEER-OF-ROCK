<?php

if (!empty($_POST["nombrecompleto"])and!empty($_POST["nombre_usuario"])and !empty($_POST["correo"]) and !empty($_POST["contrasena"])and !empty($_POST["perfil"])){
    include ('conexion.php');
    echo '<br><br>';

    $nombre=  $_POST["nombrecompleto"];
    $N_usuario=$_POST["nombre_usuario"];
    $correo=$_POST["correo"];
    $contraseña=$_POST["contrasena"];
    $perfil=$_POST["perfil"];

    $sql1="select * from usuarios WHERE N_usuario = '$N_usuario'";
    $query = $con->query($sql1);



 if($sql1>0){
    echo " <script>
    alert('el nombre de usuario ya esta en uso');
    window.location='../../PROYECTO CON CRUD/vista/registro.php';
    </script>";
    exit;
}


    $consulta_sql= "INSERT INTO usuarios (nombre_completo,N_usuario,correo,contrasena,perfil) VALUES ('$nombre','$N_usuario' ,'$correo','$contraseña','$perfil')";

    $query_mysql = $con->query($consulta_sql); 
    if($query_mysql!=null){//Preguntamos a la base de datos si viene vacia para tomar una decisión 
        //si viene con una respuesta entonces saca este mensaje de dato de salida en la vista 
       print "<script>alert(\"Agregado exitosamente.\");window.location='../../PROYECTO CON CRUD/vista/login.php';</script>";
        }else{
             //si esta vacio entonces saca este mensaje de dato de salida en la vista
    print "<script>alert(\"No se pudo agregar.\");window.location='../../PROYECTO CON CRUD/vista/registro.php';</script>";
    }
}
?>