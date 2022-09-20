<?php

if (!empty($_POST["nombre"])and!empty($_POST["nombre_usuario"])and !empty($_POST["email"]) and !empty($_POST["contrasena"])and !empty($_POST["perfil"])){
    include ('../modelo/conexion.php');
    echo '<br><br>';

    $nombre=  $_POST["nombre"];
    $N_usuario=$_POST["nombre_usuario"];
    $correo=$_POST["email"];
    $contraseña=$_POST["contrasena"];
    $perfil=$_POST["perfil"];

    //verificacion del nombre de usuario
    $verificacion_nombre=mysqli_query($con,"SELECT * FROM usuario WHERE nombre_usuario='$N_usuario'");
    if(mysqli_num_rows($verificacion_nombre) > 0){
        echo "
        <script>alert(\"Este nombre de usuario ya esta en uso, intente con otro diferente\");
        window.location='../../PROYECTO CON CRUD/vista/registro.php';</script>
        ";
        exit();
    }
        //verificacion del correo
        $verificacion_correo=mysqli_query($con,"SELECT * FROM usuario WHERE email='$correo'");
        if(mysqli_num_rows($verificacion_correo) > 0){
            echo "
            <script>alert(\"Este correo  ya esta en uso, intente con otro diferente\");
            window.location='../../PROYECTO CON CRUD/vista/registro.php';</script>
            ";
            exit();
        }

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