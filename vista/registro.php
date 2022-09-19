<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../CSS/style3.css">
  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
  <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="../JS/jquery-3.6.0.min.js"></script>
  <link rel="icon" type="text/css" href="MEDIA/IMAGENES/icono.png">

<script src="../libs/jquery-validate/dist/jquery.validate.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems);
    });
    </script>


  <title>REGISTRATE</title>
</head>
<body >
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
        <a href="" class="nav-link active"></a>
      </li>

      <li class="nav-item">
        <a href="login.php" class="nav-link active">inicia_sesion</a>


      </li>
      <a href="" class="nav-link active"></a>

  </div>



</div>

</header>       <!--aqui finaliza el header con bootstrap-->

  <section class="form-register">
    <h4>REGISTRATE</h4>
    <form action="../controlador/r_usuarios.php" method="post" id="registro">
    <input class="controls_r" type="text" name="nombre" id="nombre" placeholder="Nombre completo" required>
    <input class="controls_r" type="text" name="nombre_usuario" id="nombre_usuario" placeholder="nombre de usuario" required>
    <input class="controls_r" type="email" name="email" id="email" placeholder="Ingrese su Correo" required>
    <input class="controls_r" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su Contraseña" required>
    <br>
    <input type="hidden" name="perfil" value="u">
    <br>
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar" id="Registrar">
    <p><a href="login.html">¿Ya tengo Cuenta?</a></p>
  </form>
  </section>
  <footer id="sticky-footer" class="flex-shrink-0 py-4 text-white" style="background-color:#00135e;">
    <div class="container text-center">
      <small>Copyright &copy; DESARROLLADO POR: JUAN JOSE GIRALDO BOTERO__ALEJANDRO DUQUE GOMEZ__JUAN ESTEBAN JIMENEZ GALLEGO</small>
    </div>
  </footer>
<script src="../JS/jquery-3.6.0.min.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="../libs/jquery-validate/dist/jquery.validate.min.js"></script>
<script src="../JS/funciones.js" ></script>








</body>
</html>