<?php 
include ("../controlador/conexion.php");
$sql1= "select nombre_producto,imagen_producto,precio from productos where estado='a'";
$query = $con->query($sql1);
$r=$query->fetch_array()

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalogo</title>
    <link rel="stylesheet" href="../CSS/estilo.css">

     <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
  <script src="../libs/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<header>

  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../MEDIA/IMAGENES/nlogo.png" width="65px" height="68px">
         <strong>DEER OF  ROCK</strong>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarHeader" aria-controls="navbarHeader" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarHeader">
      <ul class="navbar-nav me-auto mb2 mb-lg-0">
        <li class="nav-item">
          <a href="" class="nav-link active">catalogo</a>
        </li>

        <li class="nav-item">
          <a href="" class="nav-link active">conocenos</a>
        </li>

        <li class="nav-item">
          <a href="" class="nav-link active">cerrar_sesion</a>


        </li>
        <a href="" class="nav-link active"></a>

        
      </ul>

        <a href="" class="btn btn-primary">carrito</a>
        <br>
        <a href="" class="nav-link active"></a>

    </div>



  </div>

</header>

<main>
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm"> 
          <img src="../MEDIA/IMAGENES/productos/rojo-fuego.jpg">

          <div class="card-body">
            <h5 class="card-title">pokemon rojo fuego</h5>
              <p class="card-text">$5.000</p>
              
              <div class="btn-group">
                <a href="" class="btn btn-primary">detalles</a>
              </div>
              <a href="" class="btn btn-success">agregar</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>

</body>
</html>