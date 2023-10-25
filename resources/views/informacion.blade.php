<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="//code.tidio.co/cozme4daujbk5s0y3bvlfdlmqohcopbq.js" async></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REVEC</title>

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

  <div class="areabred">
    <div class="breadcrumbs">
       <div class="home">
         <a href="index.php"><i class="fas fa-home"></i></a>
      </div>
       <ul>
         <li><a >
           <i class="fas fa-save"></i>
           <p>Informacion</p>
           </a></li>
         
      </ul>  
    </div>
</div>
<br>
<br><br>

  <div class="panel-group" id="accordion">
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <h2 data-toggle="collapse" data-parent="#accordion" href="#collapse1">Diabetes</h2>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">La diabetes es una enfermedad crónica (de larga duración) que afecta la forma en que el cuerpo convierte los alimentos en energía.

Su cuerpo descompone la mayor parte de los alimentos que come en azúcar (también llamada glucosa) y los libera en el torrente sanguíneo. El páncreas produce una hormona llamada insulina, que actúa como una llave que permite que el azúcar en la sangre entre a las células del cuerpo para que estas la usen como energía.</div>
   
<a href="registro">Conocer mas...</a>
 </div>

  </div>
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <h2 data-toggle="collapse" data-parent="#accordion" href="#collapse2">Parkinson</h2>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">La enfermedad de Parkinson es un tipo de trastorno del movimiento. Ocurre cuando las células nerviosas (neuronas) no producen suficiente cantidad de una sustancia química importante en el cerebro conocida como dopamina. Algunos casos son genéticos pero la mayoría no parece darse entre miembros de una misma familia.

Los síntomas comienzan lentamente, en general, en un lado del cuerpo. Luego afectan ambos lados. Algunos son:

Temblor en las manos, los brazos, las piernas, la mandíbula y la cara
Rigidez en los brazos, las piernas y el tronco
Lentitud de los movimientos
Problemas de equilibrio y coordinación

</div>
<a href="registro">Conocer mas...</a>


    </div>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <h2 data-toggle="collapse" data-parent="#accordion" href="#collapse3">Esclerosis multiple</h2>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">La esclerosis múltiple (EM) es la más común de las enfermedades inflamatorias que dañan la cubierta de las fibras nerviosas (mielina) del Sistema Nervioso Central (SNC). En los adultos jóvenes ocupa el primer puesto entre los trastornos neurológicos que causan incapacidad.

La esclerosis múltiple conlleva la destrucción preferentemente de la vaina mielínica de las fibras nerviosas, aunque también se dañan las propias fibras nerviosas (axones), en el sistema nervioso central.

Afecta a encéfalo y médula espinal de modo diseminado, con cierta predilección por nervios ópticos, sustancia blanca del cerebro, tronco cerebral y médula espinal.</div>
    </div>
<a href="registro">Conocer mas...</a>

  </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="blogs">
          <div class="text-center">
            <h2>REVEC</h2>
            <br>
            <p>¡Conoce todo acerca de las enfermedades crónicas degenerativas actuales en este sitio, para que estes bien informado!
            <div class="alert alert-success hidden" style="color:black; font-weight:bold; text-align:center;" role="alert" id="alertSuccess">

            </div>
          </div>
          <hr>
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
                    <a href="index.php" class="menu-item-footer">Home</a>
                    <a href="" class="menu-item-footer">Informacion</a>
                    <a href="" class="menu-item-footer">Testimonios</a>
                </div>
                <div class="footer-content-container">
                    <span class="menu-title">legal</span>
                    <a href="avisoprivacidad" class="menu-item-footer">Aviso de Privacidad</a>
                    <a href="avisocockie" class="menu-item-footer">Cookies</a>
                   
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

  <

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



