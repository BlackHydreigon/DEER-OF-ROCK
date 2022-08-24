<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../CSS/style2.css">
  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
  <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems);
    });
    </script>


  <title>REGISTRATE</title>
</head>
<body >
            <!--inicia el header con bootstrap-->
            <nav class="navbar navbar-expand-lg " style="background-color: rgb(3, 1, 36);">
              <div class="container-fluid">
                  <a class="navbar-brand" href="../index.php">
                      <img src="../MEDIA/IMAGENES/nlogo.png" alt="" width="60" height="60">
                    </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="proyectos.php">conocenos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="catalogo.php">catalogo</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ---
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="registro.php">registrarse</a></li>
                        <li><a class="dropdown-item" href="login.php">inicio de sesion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> 
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">perfil</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

       </header>
       <!--aqui finaliza el header con bootstrap-->

  <section class="form-register">
    <h4>REGISTRATE</h4>
    <form action="../controlador/r_usuarios.php" method="post" id="registro">
    <input class="controls" type="text" name="nombrecompleto" id="nombre" placeholder="Nombre completo" required>
    <input class="controls" type="text" name="nombre_usuario" id="n_usuario" placeholder="nombre de usuario" required>
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
    <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su Contraseña" required>
    <br>
    <input type="hidden" name="perfil" value="u">
    <br>
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar" id="Registrar">
    <p><a href="login.html">¿Ya tengo Cuenta?</a></p>
  </form>
  </section>
  <footer class="footer">
    <p>
        <a href="https://www.facebook.com" target="_black"><img src="../MEDIA/IMAGENES/facebook.png" alt="image de red social facebook"></a>
        <a href="https://www.twitter.com" target="_black"><img src="../MEDIA/IMAGENES/twitter.png" alt="image de red social twitter"></a>
        <a href="https://www.gmail.com" target="_black"><img src="../MEDIA/IMAGENES/gmail.png" alt="envia un mensaje al administrador"></a>
     </p>  
     <br>
     <p>pagina creada el 2021 por juan jose giraldo botero y alejandro duque gomez</p>
</footer>





</body>
</html>