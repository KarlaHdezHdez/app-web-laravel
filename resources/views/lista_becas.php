<?php
require_once('./base_de_datos.php');
header('Content-Type: text/html charset=uTF-8');

session_start();
if(isset($_SESSION['tipo_usuario'])):
  if($_SESSION['tipo_usuario'] != "Administrador"):
    header('Location: index.php');
  endif;
endif;

$solicitudes =  $base_datos->query("SELECT * FROM tblsolicitudes");
$lista = $solicitudes->fetchAll();

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

<center>
  <br>
  <h2>Tabla Solicitudes De Beca</h2>
  <br>
</center>
<div class="content">
  <table class="flat-table">
    <thead>
      <tr>
        <th>Fecha De Solicitud</th>
        <th>Periodo</th>
        <th>Tipo De Beca</th>
        <th>Nombre</th>
        <th>Matricula</th>
        <th>Cuatrimestre</th>
        <th>Telefono</th>
        <th>Lengua Indigena</th>
        <th>Cual</th>
        <th>Carrera</th>
        <th>Sexo</th>
        <th>Recibe otra Beca</th>
        <th>Beca</th>
        <th>Cual</th>
        <th>Principal Apoyo Economico</th>
        <th>Quien</th>
        <th>Ocupacion Padre</th>
        <th>Ocupacion Madre</th>
        <th>Ocupacion Principal Apoyo Economico</th>
        <th>Ingreso Mensual</th>
        <th>Cuanto Recibe De Gasto Diario</th>
        <th>Cuantas Personas Dependen Economicamente</th>
        <th>Trabaja Mientras Estudia</th>
        <th>Cuantas Horas a la Semana</th>
        <th>Renta Mientras Estudia</th>
        <th>Cuanto Paga De Renta Mensual</th>
        <th>Localidad</th>
        <th>Municipio</th>
        <th>Estado</th>
        <th>Casa</th>
        <th>Otra Situacion</th>
        <th>Cuantas Personas Habitan</th>
        <th>Cuartos de la Casa</th>
        <th>Telefono</th>
        <th>Drenaje</th>
        <th>Alumbrado Publico</th>
        <th>Calles Pavimentadas</th>
        <th>Cada Cuanto Viaja a Casa</th>
        <th>Cuanto Gasta en pasaje</th>
        <th>Gasto en Desayuno</th>
        <th>Gasto en Comida</th>
        <th>Gasto en Cena</th>
        <th>Gasto Total</th>
        <th>Ingresos Semanales Padre</th>
        <th>Ingresos Semanales Madre</th>
        <th>Ingresos Semanales Hermanos/as</th>
        <th>Otros Ingresos</th>
        <th>Total de Ingresos</th>
        <th>Gasto Semanal Alimentacion</th>
        <th>Gasto Semanal Vestido</th>
        <th>Gasto Semanal Celular</th>
        <th>Gasto Semanal Transporte</th>
        <th>Gasto Semanal Renta</th>
        <th>Otros Gastos Semanal </th>
        <th>Gasto Semanal Total</th>
      </tr>
    </thead>
    <tbody>
      <?php if(isset($lista) && !empty($lista)):
        foreach($lista as $key =>$row): ?>
        <tr>
          <td><?= $row['vchfechasolicitud']; ?></td>
          <td><?= $row['vchperiodo']; ?></td>
          <td><?= $row['vchtipobeca']; ?></td>
          <td><?= $row['vchnombre']; ?></td>
          <td><?= $row['vchmatricula']; ?></td>
          <td><?= $row['vchcuatrimestre']; ?></td>
          <td><?= $row['vchtelefono']; ?></td>
          <td><?= $row['vchlenguaindigena']; ?></td>
          <td><?= $row['vchcuallenguaind']; ?></td>
          <td><?= $row['vchcarrera']; ?></td>
          <td><?= $row['vchsexo']; ?></td>
          <td><?= $row['vchotrabeca']; ?></td>
          <td><?= $row['vchopcionbeca']; ?></td>
          <td><?= $row['vchcualbeca']; ?></td>
          <td><?= $row['vchprinapoyoecon']; ?></td>
          <td><?= $row['vchprinquien']; ?></td>
          <td><?= $row['vchocuppadre']; ?></td>
          <td><?= $row['vchocupmadre']; ?></td>
          <td><?= $row['vchacupprincipal']; ?></td>
          <td><?= $row['vchingresomensual']; ?></td>
          <td><?= $row['vchrecibogastodiario']; ?></td>
          <td><?= $row['vchdepenpersoecon']; ?></td>
          <td><?= $row['vchtrabajoetudio']; ?></td>
          <td><?= $row['vchhorastrabajosemana']; ?></td>
          <td><?= $row['vchrentaestudio']; ?></td>
          <td><?= $row['vchpagorentamens']; ?></td>
          <td><?= $row['vchlocalidad']; ?></td>
          <td><?= $row['vchmunicipio']; ?></td>
          <td><?= $row['vchestado']; ?></td>
          <td><?= $row['vchcasa']; ?></td>
          <td><?= $row['vchsituacioncasa']; ?></td>
          <td><?= $row['vchpersonasencasa']; ?></td>
          <td><?= $row['vchcuartoscasa']; ?></td>
          <td><?= $row['vchsertelefono']; ?></td>
          <td><?= $row['vchserdrenaje']; ?></td>
          <td><?= $row['vchseralumbpubli']; ?></td>
          <td><?= $row['vchsercallepavi']; ?></td>
          <td><?= $row['vchfrecviajecasa']; ?></td>
          <td><?= $row['vchgastopasaje']; ?></td>
          <td><?= $row['vchgastodesayuno']; ?></td>
          <td><?= $row['vchgastocomida']; ?></td>
          <td><?= $row['vchgastocena']; ?></td>
          <td><?= $row['vchgastototaldcc']; ?></td>
          <td><?= $row['vchingsempadre']; ?></td>
          <td><?= $row['vchingsemmadre']; ?></td>
          <td><?= $row['vchingsemherm']; ?></td>
          <td><?= $row['vchingsemotros']; ?></td>
          <td><?= $row['vchtotalingreso']; ?></td>
          <td><?= $row['vchgassemalimento']; ?></td>
          <td><?= $row['vchgassemvestido']; ?></td>
          <td><?= $row['vchgassemcelular']; ?></td>
          <td><?= $row['vchgassemtransp']; ?></td>
          <td><?= $row['vchgassemrenta']; ?></td>
          <td><?= $row['vchgassemotros']; ?></td>
          <td><?= $row['vchgassemtotal']; ?></td>
        </tr>
        <?php
      endforeach;
    endif;
    ?>
  </tbody>
</table>

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
