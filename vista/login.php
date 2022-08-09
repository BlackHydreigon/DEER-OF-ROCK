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
            <!--inicia el header con bootstrap-->
            <nav class="navbar navbar-expand-lg " style="background-color: rgb(3, 1, 36);">
              <div class="container-fluid">
                  <a class="navbar-brand" href="../index.html">
                      <img src="../MEDIA/IMAGENES/nlogo.png" alt="" width="60" height="60">
                    </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="proyectos.html">conocenos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="catalogo.html">catalogo</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ---
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="registro.html">registrarse</a></li>
                        <li><a class="dropdown-item" href="login.html">inicio de sesion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

       </header>
       <!--aqui finaliza el header con bootstrap-->




    <section class="form-login">
      <h5>INICIAR SESION. </h5>
      <form action="validar.php" method="post" style="color:ivory ;">
      <input class="controls" type="text" name="usuario" value="" placeholder="Usuario" required style="color: ivory;">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña" required style="color: ivory;">
      <input class="buttons" type="submit" name="" value="Ingresar">
      <p><a href="#">¿Olvidastes tu Contraseña?</a></p>
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