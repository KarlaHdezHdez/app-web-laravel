<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script src="//code.tidio.co/cozme4daujbk5s0y3bvlfdlmqohcopbq.js" async></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mision</title>

  <!-- Bootstrap -->
  @vite(['resources/css/bootstrap.min.css','resources/css/animate.css'])
  @vite(['resources/css/font-awesome.min.css','resources/css/jquery.bxslider.css'])
  @vite(['resources/css/normalize.css','resources/css/demo.css','resources/css/set1.css'])
  @vite(['resources/css/overwrite.css','resources/css/style.css','resources/css/buscador.css'])
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  @vite(['resources/css/estilo.css','resources/css/estilos2.css'])
 
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">


      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target=".navbar-collapse.collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" ><span><img src="img/logo.png" alt="" width="160" height="60"></span></a>
     

      <div class="navbar-collapse collapse">
        <div class="menu">
          <?php
            if(isset($_SESSION['tipo_usuario'])):
              if($_SESSION['tipo_usuario'] == "Administrador"): ?>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="index.php">INICIO</a></li>
                  <li role="presentation"><a href="convocatorias.php">CONVOCATORIA</a></li>
                  <li role="presentation"><a href="iniciosesion.php">INICIAR SESION</a></li>
                  <li role="presentation"><a href="lista_usuarios.php">USUARIOS</a></li>
                  <li role="presentation"><a href="lista_becas.php">SOLICITUDES BECAS</a></li>
                  <li role="presentation"><a href="pcarga.php">REGISTRO ALUMNOS</a></li>
                </ul>
                <?php
              else:?>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="index.php">INICIO</a></li>
                  <li role="presentation"><a href="convocatorias.php">CONVOCATORIA</a></li>
                  <li role="presentation"><a href="iniciosesion.php">INICIAR SESION</a></li>
                  <li role="presentation"><a href="portfolio.php">SOLICITUD DE BECA</a></li>
                  <li role="presentation"><a href="contact.php">CONTACTANOS</a></li>
                </ul>
                <?php
              endif;
            else:?>
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="index.php">INICIO</a></li>
              <li role="presentation"><a href="sobrenosotros">QUIENES SOMOS</a></li>
              <li role="presentation"><a href="vision.php">TIENDA</a></li>
              <li role="presentation"><a href="informacion">INFORMACION</a></li>
              <li role="presentation"><a href="contactanos">CONTACTANOS</a></li>
              <li role="presentation"><a href="registro">REGISTRATE/INICIA SESION</a></li>
            </ul>
              <?php
            endif;
            ?>
        </div>
      </div>
    </div> 
  </nav>

  <div class="formulario-registro">
  <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido al Repositorio de las Enfermedades Cronicas</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" id="nombre1" placeholder="Nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required>
            <input type="email" placeholder="Email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
            <input type="password" placeholder="Contraseña" pattern="[A-Za-z0-9!?-]{8,12}" required>
            <button class="registroboton">Registrarse</button>
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="email" placeholder="Email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
            <input type="password" placeholder="Contraseña" pattern="[A-Za-z0-9!?-]{8,12}" required>
            <button class="inicioboton">Iniciar Sesion</button>
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>

            </div>
        </div>
    </div>

  </div>

  
	
      <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">RVEC</h3>
                <span class="footer-info">Repositorio Virtual de las </span>
                <span class="footer-info">Enfermedades Cronicas</span>
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">menu</span>
                    <a href="" class="menu-item-footer">Home</a>
                    <a href="" class="menu-item-footer">Informacion</a>
                    <a href="" class="menu-item-footer">Testimonios</a>
                </div>
                <div class="footer-content-container">
                    <span class="menu-title">legal</span>
                    <a href="" class="menu-item-footer">Aviso de Privacidad</a>
                    <a href="" class="menu-item-footer">Cookies</a>
                   
                </div>
            </div>
            
            <div class="footer-content-container">
                <span class="menu-title">Siguenos</span>
                <div class="social-container">
                    <a href="" class="social-link"></a>
                    <a href="" class="social-link"></a>
                    <a href="" class="social-link"></a>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <span class="copyright">Copyright 2023, RVEC.com. Todos los derechos reservados.</span>
        </div>
    </footer>


     

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  @vite(['resources/js/jquery-2.1.1.min.js','resources/js/bootstrap.min.js'])
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  @vite(['resources/js/wow.min.js','resources/js/jquery.easing.1.3.js'])
  @vite(['resources/js/jquery.isotope.min.js','resources/js/jquery.bxslider.min.js'])
 @vite(['resources/js/fliplightbox.min.js','resources/js/functions.js'])
 @vite(['resources/js/funcionalidad3.js','resources/js/funcionalidad.js','resources/js/funcionalidad2.js'])
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>




