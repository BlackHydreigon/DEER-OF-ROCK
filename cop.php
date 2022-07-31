<?php // 
/*session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if ($varsesion==null || $varsesion='') {
    echo"<script>alert('Usted no tiene autorizacion');window.location='../../vista/registrarse.php';</script>"; 
                session_destroy();//TERMINA LA SESIONES
}*/
if(!empty($_POST)){//!empty($_POST) significa diferente de vacío - verifica los inputs no este vacío
    if(isset($_POST["nombrecompleto"]) &&isset($_POST["nombre_usuario"]) &&isset($_POST["correo"]) &&isset($_POST["contrasena"]) &&isset($_POST["perfil"]))
    {//la funcion isset() comprobar que la variable existe
            include "conexion.php";//llama a la conexión Para llevar la consulta SQL a la BD
            $sql = "insert into usuario (nombre_completo,N_usuario,correo,contrasena,perfil) value (\"$_POST[nombrecompleto]\",
            \"$_POST[nombre_usuario]\",\"$_POST[correo]\",\"$_POST[contrasena]\",\"$_POST[perfil]\")";
            //Codigo SQL para insertar, guardar, registrar un usuario basico 
            $query = $con->query($sql);//este es la consulta query da como la orden de a conexion.php poder ejecutar la orden en la BD
            //RESPUESTA DEL BD 
            if($query!=null){//Preguntamos a la base de datos si viene vacia para tomar una decisión 
                //si viene con una respuesta entonces saca este mensaje de dato de salida en la vista 
               print "<script>alert(\"Agregado exitosamente.\");window.location='../../registro.html';</script>";
                // }else{
                     //si esta vacio entonces saca este mensaje de dato de salida en la vista
            print "<script>alert(\"No se pudo agregar.\");window.location='../../registro.html';</script>";
            }
        }
    //}       
    ?>
