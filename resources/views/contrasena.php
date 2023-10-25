<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acerca De</title>

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
            <h2>RECUPERACION DE CONTRASEÑA</h2>
            <br>
            <p>COMPLETA LOS CAMPOS COMO SE TE INDICA<br>
            </p>
            <div class="alert alert-success hidden" style="color:black; font-weight:bold; text-align:center;" role="alert" id="alertSuccess">

            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

<main>

<section class="portadaimg1">
    <div class="register_container">

        <section class="form-register">

            <h2 class="frm__section"></h2>

                  <form method="post" id="form_pwd">
                        <label align="center">Seleccione el tipo de usuario</label>
                        <select  class="controls" name="tipo" id="tipo">
                          <!--<option value="0">seleccione ..</option>-->
                          <option value="1">Administrador</option>
                          <option value="2">Cliente</option>
                        </select><br><br>
                        <label align="center">Ingrese el correo del usuario:</label>
                       <input class="controls" type="text" name="correo" id="correo" required=""><br><br>
                       <select class="controls" name ="pregunta" id="pregunta">
                         <option value=">Nombre de primer mascota">¿Nombre de tu primera mascota?</option>
                         <option value="Color favorito">¿Color favorito?</option>
                         <option value="Nombre de primer mascota">¿Equipo Favorito?</option>
                         <option value="Cual es tu pasatiempo?">¿Cual es tu pasatiempo?</option>
                         <option value="Pelicula favorita">¿Pelicula favorita?</option>
                       </select><br><br>
                       <label align="center" id="lbl_respuesta">Ingrese la respuesta:</label>
                       <input class="controls" type="text" name="respuesta" id="respuesta" required /><br><br>
                        <center><input type="submit" name="verificar" value="Verificar" id="btn_verificar" class="botons"></center>
                    </form><br><br>
                    <form method="post" id="paso2" >
                    <!--<h2 align="center" >Pregunta:</h2>-->
                            <!--<h2 align="center" id="pregunta" name="pregunta"></h2>
                            <label align="center">Ingrese la respuesta:</label>
                            <input class="controls" type="text" name="respuesta" id="respuesta" required />-->
                            <label align="center">Ingrese la nueva contraseña:</label><br><br>
                            <!--<input class="controls" type="password" name="pwd" id="pwd" pattern="[A-Za-z0-9!?-]{8,12}" title="Usa Mayusculas y Minusculas, minimo 8 caracteres maximo 12" required />-->
                            <input class="controls" onClick="alert('Contraseña guardada')" type="password" name="pwd" id="pwd"  pattern="[A-Za-z0-9!?-]{8,12}" title="Usa Mayusculas y Minusculas, minimo 8 caracteres maximo 12" required /><br><br>
                            <center><input type="submit" name="enviar" value="Enviar" id="btn_enviar" class="botons"></center>

                  </form>

       </section>
    </div>
</section>
</main>










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
