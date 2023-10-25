<?php
require_once('./base_de_datos.php');
header('Content-Type: text/html charset=uTF-8');

session_start();

if(isset($_SESSION['tipo_usuario'])):
  if($_SESSION['tipo_usuario'] != "Administrador"):
    header('Location: index.php');
  endif;
endif;

$usuarios =  $base_datos->query("SELECT * FROM tblusuarios");
$lista = $usuarios->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Cargar Archivo</title>
  <meta charset="UTF-8" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
  <link href="css/pcarga.css" rel="stylesheet">
  <link href="css/tabla.css" rel="stylesheet">
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
      <a class="navbar-brand" href="http://www.uthh.edu.mx/"><span>UTHH</span></a>
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
            <li role="presentation"><a href="convocatorias.php">CONVOCATORIA</a></li>
            <li role="presentation"><a href="iniciosesion.php">INICIAR SESION</a></li>
            <li role="presentation"><a href="contact.php">CONTACTANOS</a></li>
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
<br>
<br>
<br>
<br>

<center>
  <h2>Tabla Usuarios</h2>
  <br>
</center>
<div class="content">
  <table class="flat-table">
    <thead>
      <tr>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Matricula</th>
        <th>Correo Electronico</th>
        <th>Telefono</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($lista) && !empty($lista)):
        foreach($lista as $key =>$row):?>
          <tr>
            <td><?= $row['vchapeidop']; ?></td>
            <td><?= $row['vchapeidom'];?></td>
            <td><?= $row['vchnombre'];?></td>
            <td><?= $row['vchusuario'];?></td>
            <td><?= $row['vchcontrasena'];?></td>
            <td><?= $row['vchmatricula'];?></td>
            <td><?= $row['vchcorreo'];?></td>
            <td><?= $row['vchtelefono'];?></td>
          </tr>
        <?php endforeach;
      endif;
      ?>
    </tbody>
  </table>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>





</div>






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

            <a href="https://goo.gl/maps/4r9mL7u6kMKzE53m9">Carretera Huejutla - Chalahuiyapa S/N, C.P. 43000,
              Huejutla de Reyes ,Hidalgo.</a> <a
              href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw?view_as=subscriber"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="https://www.facebook.com/uthh.huejutla" data-placement="top" title="Facebook"><i
              class="fa fa-facebook fa-1x"></i></a></li>
              <li><a href="https://twitter.com/uthh96" data-placement="top" title="Twitter"><i
                class="fa fa-twitter fa-1x"></i></a></li>
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
      $('.portfolio').flipLightBox();
      </script>


    </body>







    </html>
