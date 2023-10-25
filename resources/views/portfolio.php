<?php
require_once('./base_de_datos.php');
session_start();
if(isset($_SESSION['tipo_usuario'])):
  if($_SESSION['tipo_usuario'] != "Alumno"):
    header('Location: index.php');
  endif;
endif;
$registrado =[];
if(isset($_SESSION['usuario'])):
  $usuario = $_SESSION['usuario'];
  $contra = $_SESSION['contra'];
  $query = $base_datos->query("SELECT * FROM tblsolicitudes WHERE vchmatricula='$usuario'");
  $registrado= $query->fetchAll(PDO::FETCH_ASSOC);
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Solicitar Beca</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link href="css/overwrite.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/style.css" rel="stylesheet">
  <script src="js/labels.js"></script>


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

  <div class="container">
    <?php if(!empty($registrado)):?>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="portfolios">
          <div class="text-center">
            <br>
            <h1>DATOS REGISTRADOS </h1>
              <button><a href="./htmltoPdf.php?mtr=<?=$usuario;?>">Descargar Encuesta</a></button>
            <p><br>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br />

    <?php else:?>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="portfolios">
          <div class="text-center">
            <br>
            <h2>REGISTRO BECAS</h2>
            <p><br>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
    <?php endif;?>
  </div>

  <?php if(empty($registrado)):?>
  <div class="container">
    <form action="guardar_encuesta.php" method="post">



    <p><label>Fecha de la Solicitud:</label>
      <input type="date" name="fechasolicitud" id="fechasolicitud">
    </p>

    <p><label>Periodo:</label>
      <select name="periodo" id="periodo">
        <option value="Enero-Abril">Enero-Abril</option>
        <option value="Mayo-Agosto">Mayo-Agosto</option>
        <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>
      </select>
    </p>


    <p><label>Tipo de Beca:</label>

      <select name="tipobeca" id="tipobeca">
        <option value="Alimenticia">Alimenticia</option>
        <option value="Economica">Economica</option>

      </select>
    </p>





    <fieldset>
      <br>
      <legend>DATOS GENERALES</legend>

      <p><label>Nombre: <input type="text" id ="nombre"name="nombre" placeholder="" pattern="[A-Za-z]{3,15}" required></label></p>

      <p><label>Matrícula: <input type="text" id ="matricula" name="matricula" placeholder="" pattern="[0-9]{1,8}" required></label></p>

      <p><label>Cuatrimestre:</label>

        <select name="cuatrimestre" id="cuatrimestre">

          <option value="1°">1°</option>
          <option value="2°">2°</option>
          <option value="3°">3°</option>
          <option value="4°">4°</option>
          <option value="5°">5°</option>
          <option value="6°">6°</option>
          <option value="7°">7°</option>
          <option value="8°">8°</option>
          <option value="9°">9°</option>
          <option value="10°">10°</option>
          <option value="11°">11°</option>


        </select>
      </p>

      <!--<p><label>Teléfono: <input type="text" id ="telefono" name="telefono" placeholder="" pattern="[0-9]{8,10}" required></label></p>-->
      <p><label>Teléfono: <input type="text" id ="telefono" name="telefono" placeholder="" required></label></p>
      <p><label>¿Habla alguna lengua indigena?:</label>

        <select name="lengua"  id="lengua">

          <option value="Si">Si</option>
          <option value="No">No</option>

        </select>
        <label>¿Cual?: <input type="text"  id="cual_lengua" name="cual_lengua"></label>
      </p>



      <p><label>Carrera:</label>

        <select name="carrera"  id="carrera">

          <option value="TSU. EN ADMINISTRACIÓN ÁREA FORMULACIÓN Y EVALUACIÓN DE PROYECTOS">TSU. EN ADMINISTRACIÓN ÁREA FORMULACIÓN Y EVALUACIÓN DE PROYECTOS</option>
          <option value="TSU. EN AGROBIOTECNOLOGÍA">TSU. EN AGROBIOTECNOLOGÍA</option>
          <option value="TSU. EN CONSTRUCCIÓN">TSU. EN CONSTRUCCIÓN</option>
          <option value="TSU. EN CONTADURÍA">TSU. EN CONTADURÍA</option>
          <option value="TSU. EN DESARROLLO DE NEGOCIOS ÁREA MERCADOTECNIA">TSU. EN DESARROLLO DE NEGOCIOS ÁREA MERCADOTECNIA</option>
          <option value="TSU. EN GASTRONOMÍA">TSU. EN GASTRONOMÍA</option>
          <option value="TSU. EN MECÁNICA">TSU. EN MECÁNICA</option>
          <option value="TSU. EN MECATRÓNICA ÁREA AUTOMATIZACIÓN">TSU. EN MECATRÓNICA ÁREA AUTOMATIZACIÓN</option>
          <option value="TSU. EN PROCESOS ALIMENTARIOS">TSU. EN PROCESOS ALIMENTARIOS</option>
          <option value="TSU. EN TECNOLOGÍAS DE LA INFORMACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA">TSU. EN TECNOLOGÍAS DE LA INFORMACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA</option>
          <option value="INGENIERÍA CIVIL">INGENIERÍA CIVIL</option>
          <option value="INGENIERÍA EN METAL MECÁNICA">INGENIERÍA EN METAL MECÁNICA</option>
          <option value="INGENIERÍA EN PROCESOS ALIMENTARIOS">INGENIERÍA EN PROCESOS ALIMENTARIOS</option>
          <option value="LICENCIATURA EN GASTRONOMÍA">LICENCIATURA EN GASTRONOMÍA</option>

          <option value="LICENCIATURA EN GESTIÓN DE NEGOCIOS Y PROYECTOS">LICENCIATURA EN GESTIÓN DE NEGOCIOS Y PROYECTOS</option>
          <option value="LICENCIATURA EN INNOVACIÓN DE NEGOCIOS Y MERCADOTECNIA">LICENCIATURA EN INNOVACIÓN DE NEGOCIOS Y MERCADOTECNIA</option>
          <option value="INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN">INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN</option>
          <option value="LICENCIATURA EN CONTADURÍA">LICENCIATURA EN CONTADURÍA</option>
          <option value="INGENIERÍA EN MECATRÓNICA">INGENIERÍA EN MECATRÓNICA</option>
          <option value="INGENIERÍA EN AGROBIOTECNOLOGÍA">INGENIERÍA EN AGROBIOTECNOLOGÍA</option>
          <option value="INGENIERÍA EN DESARROLLO Y GESTIÓN DE SOFTWARE">INGENIERÍA EN DESARROLLO Y GESTIÓN DE SOFTWARE</option>

        </select>
      </p>

      <p>

        <label>Sexo:</label>

        <select name="sexo"  id="sexo">

          <option value="M">(M)</option>

          <option value="F">(F)</option>

        </select>

      </p>


      <p>

        <label>¿Recibe algun otro tipo de beca?</label>

        <select name="recibeotrabeca" id="recibeotrabeca">

          <option value="Si">Si</option>

          <option value="No">No</option>

        </select>

        <select name="otrotipobeca" id="otrotipobeca">

          <option value="Ninguna">Ninguna</option>

          <option value="Federal">Federal</option>

          <option value="Estatal">Estatal</option>

          <option value="Otra">Otra(Especificar)</option>

        </select>

        <label>¿Cual?: <input type="text"  id="cualtipobeca" name="cualtipobeca"></label>

      </p>

    </fieldset>




    <fieldset>
      <br>
      <legend>CUESTIONARIO SOCIOECONOMICO</legend>

      <p>

        <label>¿Quién es tu principal apoyo económico?</label>

        <select name="apoyoeconomico" id="apoyoeconomico" >

          <option value="Padre">Padre</option>

          <option value="Madre">Madre</option>

          <option value="Yo Mismo">Yo Mismo</option>

          <option value="Otro">Otro (Especificar)</option>

        </select>

        <label>¿Quien?<input type="text" id="quienapoyoeconomico" name="quienapoyoeconomico"></label>
      </p>

      <!--<p><label>Ocupación del Padre: <input type="text" id="ocupacionPadre" name="ocupacionPadre" placeholder="" pattern="[A-Za-z]"
            required></label></p>-->
      <p><label>Ocupación del Padre: <input type="text" id="ocupacionPadre" name="ocupacionPadre" placeholder=""
                  required></label></p>

      <!--<p><label>Ocupación de la Madre: <input type="text" id="ocupacionMadre" name="ocupacionMadre" placeholder="" pattern="[A-Za-z]"
            required></label></p>-->
      <p><label>Ocupación de la Madre: <input type="text" id="ocupacionMadre" name="ocupacionMadre" placeholder=""
                  required></label></p>
      <!--<p><label> ¿Cuál es la ocupación de tu principal apoyo económico? <input type="text"  id="principalapoyoeconomico"
            name="principalapoyoeconomico" placeholder="" pattern="[A-Za-z]" required></label></p>-->

            <p><label> ¿Cuál es la ocupación de tu principal apoyo económico? <input type="text"  id="principalapoyoeconomico"
                  name="principalapoyoeconomico" placeholder=""  required></label></p>
      <p><label>¿Cuánto es el ingreso mensual del principal apoyo?
          <input type="number" id="ingresomensual" name="ingresomensual"
            placeholder="" required></label></p>

      <p><label>¿Cuánto recibe de gasto diario?<input type="number" id="gastodiario" name="gastodiario" placeholder="" pattern="^(10|\d)(\.\d{1,2})?$"
            required></label></p>

      <p>

        <label>¿Cuántas personas incluyéndolo a usted dependen económicamente de su principal apoyo o sustento?</label>

        <select name="dependenciaeconomica" id="dependenciaeconomica">

          <option value="1">1</option>

          <option value="2">2</option>

          <option value="3">3</option>

          <option value="4">4</option>

          <option value="Mas de 5">Mas de 5</option>

        </select>

      </p>


      <p>

        <label>¿Actualmente trabajas mientras estudias?</label>

        <select name="trabajoestudio" id="trabajoestudio">

          <option value="Si">Si</option>

          <option value="No">No</option>

        </select>
        <label>¿Cuántas horas trabaja a la semana?<input type="text"  id="horastrabajoestudio" name="horastrabajoestudio"></label>

      </p>


      <p>

        <label>¿Actualmente rentas mientras estudias?</label>

        <select name="rentaestudio"  id="rentaestudio">

          <option value="Si">Si</option>

          <option value="No">No</option>

        </select>
        <label>¿Cuánto paga de renta mensual?<input type="text"  id="pagorentaestudio" name="pagorentaestudio"></label>

      </p>


    </fieldset>




    <fieldset>
      <br>
      <legend>Lugar De Procedencia</legend>

      <!--<p><label>Localidad: <input type="text" id="localidad" name="localidad" placeholder="" pattern="[A-Za-z]" required></label></p>-->
      <p><label>Localidad: <input type="text" id="localidad" name="localidad" placeholder=""  required></label></p>
      <!--<p><label>Municipio: <input type="text" id="municipio" name="municipio" placeholder="" pattern="[A-Za-z]" required></label></p>-->
      <p><label>Municipio: <input type="text" id="municipio" name="municipio" placeholder=""  required></label></p>
      <!--<p><label>Estado: <input type="text" id="estado"  name="estado" placeholder="" pattern="[A-Za-z]" required></label></p>-->
      <p><label>Estado: <input type="text" id="estado"  name="estado" placeholder="" required></label></p>
      <p>

        <label>¿La casa donde habita regularmente es?</label>

        <select name="casa" id="casa">
          <option value="Propia">Propia</option>
          <option value="Rentada">Rentada</option>
          <option value="Otro">Otro (Especificar)</option>

        </select>
        <label>Otra situación:<input type="text" id="otra_casa"  name="otra_casa"></label>

      </p>

      <p>

        <label>¿Cuántas personas habitan en esa casa?</label>

        <select name="personascasa" id="personascasa">

          <option value="1">1</option>

          <option value="2">2</option>

          <option value="3">3</option>

          <option value="4">4</option>

          <option value="Mas de 5">Mas de 5</option>

        </select>

      </p>

      <p>

        <label>¿Cuántos cuartos tiene esa casa sin contar baños, cocina y pasillos?</label>

        <select name="cuartoscasa" id="cuartoscasa">

          <option value="1">1</option>

          <option value="2">2</option>

          <option value="3">3</option>

          <option value="4">4</option>

          <option value="Mas de 5">Mas de 5</option>

        </select>

      </p>

      <p>

        <label>Bienes y servicios de que tiene la casa: </label>
        <br><br>
        <label>Telefono:</label>

        <select name="cbtelefono" id="cbtelefono">

          <option value="No">No</option>

          <option value="Si">Si</option>

        </select>
        <br>
        <label>Drenaje:</label>

        <select name="cbdrenaje" id="cbdrenaje">

          <option value="No">No</option>

          <option value="Si">Si</option>

        </select>
        <br>
        <label>Alumbrado Publico:</label>

        <select name="cbalumbradopublico" id="cbalumbradopublico">

          <option value="No">No</option>

          <option value="Si">Si</option>

        </select>
        <br>
        <label>Calles Pavimentadas:</label>

        <select name="cbcallespavimentadas" id="cbcallespavimentadas">

          <option value="No">No</option>

          <option value="Si">Si</option>

        </select>

      </p>
<!--
      <p>

        <label>Bienes y servicios de que tiene la casa:</label>

        <br>

        <input type="checkbox"  id="cbtelefono" name="bienesyserviciostel"> Telefono<br>

        <input type="checkbox"  id="cbdrenaje" name="bienesyserviciosdrenaje"> Drenaje<br>

        <input type="checkbox"  id="cbalumbradopublico" name="bienesyserviciosalumbra"> Alumbrado Publico<br>

        <input type="checkbox"  id="cbcallespavimentadas" name="cbcallespavimentadascall"> Calles Pavimentadas<br>

      </p>

-->

      <p><label>¿Cada cuando viaja a su casa?<input type="text"  id="viajecasa" name="viajecasa"></label></p>

      <p><label>¿Cuánto gasta en pasaje?<input type="number"  id="gastopasaje" placeholder="Solo Numeros" name="gastopasaje"></label></p>

    </fieldset>






    <fieldset>

      <legend>DURANTE LA SEMANA</legend>

      <p><label>¿Cuánto gasta en el desayuno?<input type="number"  id="gastodesayuno" name="gastodesayuno" placeholder="Solo Numeros"  required></label></p>

      <p><label>¿Cuánto gasta en la comida?<input type="number"  id="gastocomida" name="gastocomida" placeholder="Solo Numeros"  required></label></p>

      <p><label>¿Cuánto gasta en la cena?<input type="number"  id="gastocena" name="gastocena" placeholder="Solo Numeros" required></label></p>

      <p><label>¿Cual es el gasto total?<input type="number"  id="gastototal" name="gastototal" placeholder="Solo Numeros" required></label></p>

      <label>¿A cuánto ascienden sus ingresos semanales?:</label>

      <p><label>Padre:<input type="number"  id="ingresopadre" name="ingresopadre" placeholder="Solo Numeros" required></label></p>

      <p><label>Madre:<input type="number"  id="ingresomadre" name="ingresomadre" placeholder="Solo Numeros" required></label></p>

      <p><label>Hermanos/as:<input type="number"  id="ingresohermanos" name="ingresohermanos" placeholder="Solo Numeros"  required></label></p>

      <p><label>Otros:<input type="number"  id="ingresootros" name="ingresootros" placeholder="Solo Numeros" required></label></p>

      <p><label>¿Cual es el ingreso total?<input type="number"  id="ingresototal" name="ingresototal" placeholder="Solo Numeros"  required></label></p>


      <label>¿A cuánto ascienden tus gastos semanales?:</label>

      <p><label>Alimentacion:<input type="number" id="gastoalimento" name="gastoalimento" placeholder="Solo Numeros" required></label>
      </p>

      <p><label>Vestido:<input type="number" id="gastovestido" name="gastovestido" placeholder="Solo Numeros" required></label></p>

      <p><label>Celular:<input type="number" id="gastocelular" name="gastocelular" placeholder="Solo Numeros" required></label></p>

      <p><label>Transporte:<input type="number" id="gastotransporte" name="gastotransporte" placeholder="Solo Numeros" required></label></p>

      <p><label>Renta:<input type="number" id="gastorenta" name="gastorenta" placeholder="Solo Numeros"  required></label></p>

      <p><label>Otros:<input type="number" id="otrosgastos" name="otrosgastos" placeholder="Solo Numeros" required></label></p>

      <p><label>¿Cual es el gasto semanal total?<input type="number" id="gastosemanal" name="gastosemanal" placeholder="Solo Numeros"  required></label></p>
      <br>
      <br>
    </fieldset>
    <br />
    <!-- <input type="submit" value="Enviar"> -->
    <button type="submit" name="enviar">Enviar</button>

    </form>

  </div>
<?php endif;?>
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
    //$('.portfolio').flipLightBox()
  </script>

</body>

</html>
