<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if ($varsesion==null || $varsesion='') {
    echo"<script>alert('Usted no tiene autorizacion');window.location='../../PROTECTO CON CRUD/registro.html';</script>"; 
    die();//TERMINA LA SESIONES
}
?>
