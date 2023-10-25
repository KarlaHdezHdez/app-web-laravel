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
  <title>Inicio Sesion</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="http://www.uthh.edu.mx/"><span>REVEC</span></a>
      </div>
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
                  <li role="presentation"><a href="contact.php">CONTACTANOS</a></li>
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
              <li role="presentation"><a href="mision.php">MISION</a></li>
              <li role="presentation"><a href="vision.php">VISION</a></li>
              <li role="presentation"><a href="registro.php">REGISTRO</a></li>
              <li role="presentation"><a href="acercade.php">ACERCA DE</a></li>
              <li role="presentation"><a href="contactanos.php">CONTACTANOS</a></li>
              <li role="presentation"><a href="isesion.php">INICIAR SESION</a></li>
            </ul>
              <?php
            endif;
            ?>
        </div>
      </div>
    </div>
  </nav>

  
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="blogs">
          <div class="text-center">
            <h2>BIENVENIDO, INICIA SESION </h2>
            <br>
            <p>INICIA SESION CON TUS DATOS CORRECTOS<br>
            </p>
            <div class="alert alert-success hidden" style="color:black; font-weight:bold; text-align:center;" role="alert" id="alertSuccess">

            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

<br>
<br>
<br>
<br>

<center>
<!--<form action="./redirect.php" method="post">-->
<fieldset>

  <legend>Inicio Sesion</legend>
<p>
<label>Sesion: </label>

<select name="Sesion" id="sesion">

  <option value="Alumno">Cliente</option>
  <option value="Administrador">Administrador</option>

</select>
<br>
<br>
<label>Usuario: <input type="text" name="usuario" id="usuario" required></label>
<br>
<br>

<label>Contraseña: <input type="password" name="contra" id="contra" required></label>
<br>
<br>
<button type="button" class="btn btn-primary" name="iniciar" id="iniciar">Iniciar Sesión</button>
</p>
<div class="hidden" id="errorusuario"><h6 style="color: red;">usuario y/o contraseña incorrecta </h6></div>

<p align="center"><a href="contrasena.php?action=login">¿Olvidaste tu Contraseña?</a></p>  

</fieldset>
<!--</form>-->
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
 <!--
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <h2><br><br><br>ESCRIBENOS UN MENSAJE</h2>
          <p>DESCRIBE TU PROBLEMA BREVEMENTE <br>ESTE CORREO SERA ENVIADO A <br>rectoria@uthh.edu.mx
            <br></p>
        </div>
        <hr>
      </div>
    </div>
  </div>
          -->
 <!--
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
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo Institucional" data-rule="email" data-msg="Please enter a valid email" />
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
      </div>-->
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
    <div class="inner-footer">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>




    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; Universidad Tecnológica de la Huasteca Hidalguense © 1996 - 2021
            <br>

            Teléfonos: 789 8962088 al 91
            E-mail: rectoria@uthh.edu.mx<br>
            <div class="credits">

              <a href="https://goo.gl/maps/4r9mL7u6kMKzE53m9">Carretera Huejutla - Chalahuiyapa S/N, C.P. 43000, Huejutla de Reyes ,Hidalgo.</a> <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw?view_as=subscriber"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="https://www.facebook.com/uthh.huejutla" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="https://twitter.com/uthh96" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
          </ul>
        </div>
      </div>

      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>

    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>
</body>

</html>
