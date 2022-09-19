<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>INICIAR SESION.</title>
    <script src="../libs/bootstrap/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="../CSS/style3.css">
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">

  </head>
  <body>

  <header>

  <div class="navbar navbar-expand-lg navbar-dark " style="background-color:#00135e;">

  <div class="container">
    <a href="../index.php" class="navbar-brand">
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
        <a href="conocenos.php" class="nav-link active">conocenos</a>
      </li>

      <li class="nav-item">
        <a href="registro.php" class="nav-link active">registrate</a>
      </li>

      <a href="" class="nav-link active"></a>

  </div>



</div>

</header>       <!--aqui finaliza el header con bootstrap-->




    <section class="form-login">
      <h5>INICIAR SESION. </h5>
      <form action="../controlador/validar.php" method="post" style="color:ivory ;">
      <input class="controls" type="text" name="usuario" value="" placeholder="Usuario" required style="color: ivory;">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña" required style="color: ivory;">
      <input class="buttons" type="submit" name="" value="Ingresar">
      <p><a href="#">¿Olvidastes tu Contraseña?</a></p>
    </form>

    </section>
    <footer id="sticky-footer" class="flex-shrink-0 py-4 text-white" style="background-color:#00135e;">
    <div class="container text-center">
      <small>Copyright &copy; DESARROLLADO POR: JUAN JOSE GIRALDO BOTERO__ALEJANDRO DUQUE GOMEZ__JUAN ESTEBAN JIMENEZ GALLEGO</small>
    </div>
  </footer>
  </body>
</html>