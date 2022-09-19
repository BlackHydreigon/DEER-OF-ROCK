<?php

if (!empty($_POST["nombre"])and!empty($_POST["nombre_usuario"])and !empty($_POST["email"]) and !empty($_POST["contrasena"])and !empty($_POST["perfil"])){
    include ('../modelo/conexion.php');
    echo '<br><br>';

    $nombre=  $_POST["nombre"];
    $N_usuario=$_POST["nombre_usuario"];
    $correo=$_POST["email"];
    $contraseña=$_POST["contrasena"];
    $perfil=$_POST["perfil"];

    $consulta_sql= "INSERT INTO usuario (nombre,nombre_usuario,email,contrasena,perfil) VALUES ('$nombre','$N_usuario' ,'$correo','$contraseña','$perfil')";

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