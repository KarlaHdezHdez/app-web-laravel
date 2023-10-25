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
  <title>Acerca De</title>

  <!-- Bootstrap -->
   <!-- Bootstrap -->
   @vite(['resources/css/bootstrap.min.css','resources/css/animate.css'])
  @vite(['resources/css/font-awesome.min.css','resources/css/jquery.bxslider.css'])
  @vite(['resources/css/normalize.css','resources/css/demo.css','resources/css/set1.css'])
  @vite(['resources/css/overwrite.css','resources/css/style.css','resources/css/buscador.css'])
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  @vite(['resources/css/estilo.css'])

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

<br>
<br>
<div class="areabred">
    <div class="breadcrumbs">
       <div class="home">
         <a href="index.php"><i class="fas fa-home"></i></a>
      </div>
       <ul>
         <li><a >
           <i class="fas fa-save"></i>
           <p>contactanos</p>
           </a></li>
         
      </ul>  
    </div>
</div>


  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <h2><br><br><br>ESCRIBENOS UN MENSAJE</h2>
          <p>DESCRIBE TU PROBLEMA BREVEMENTE <br>ESTE CORREO SERA ENVIADO A <br>repositoriorvec@gmail.com
            <br></p>
        </div>
        <hr>
      </div>
    </div>
  </div>


  <section id="contact-page">
    <div class="container">
      <div class="row contact-wrap">
        <div class="col-md-8 col-md-offset-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder=" Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo " data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Enviar Correo</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->
  <br>
  <br>
  <br>
  <br>

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
                    <a href="index.php" class="menu-item-footer">Home</a>
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
 @vite(['resources/js/funcionalidad.js'])
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>
</body>

</html>
