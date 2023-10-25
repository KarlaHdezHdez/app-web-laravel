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
  @vite(['resources/css/font-awesome.min.cs','resources/css/jquery.bxslider.css'])
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
           <p>Sobre nosotros</p>
           </a></li>
         
      </ul>  
    </div>
</div>
<br>

  <div class="container">
    <div class="row">
      <div class="service">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center"><br><br>
            <h2>Nuestra Mision</h2><br><br>
            <p>Brindar a los usuarios información proporcionada por especialistas de cada enfermedad crónica, así como los diferentes centros cercanos 
              en los que se atienden cada uno de los padecimientos, debido a la falta de información certificada por especialistas expertos en cada padecimiento, 
              lo cual provoca un mal tratamiento o cuidados a una persona enferma, por lo que se proporciona un sitio informativo además de talleres y venta de equipos terapéuticos
               a pacientes con enfermedades como Epilepsia, Diabetes inclusive Alzheimer 
              garantizando una buena experiencia de usuario ya que se trabajan bajo normativas de usabilidad, accesibilidad, control y seguridad de cada proceso.<br>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="service">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <h2>Nuestra Vision</h2><br><br>
            <p>Ser la página más usada por usuarios de Huejutla para encontrar información verificada, donde los
               familiares tomen talleres para un mejor cuidado hacia sus familiares con enfermedades crónicas además de que los
                especialistas interactúen con otros profesionales de padecimientos similares para intercambiar puntos de vista sobre cada tratamiento 
                realizado en los pacientes, permitiendo el desarrollo de foros de conocimiento.<br><br>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>


    <footer>
      <div class="inner-footer">
        <div class="container">
          <div class="row">
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
 @vite(['resources/js/funcionalidad.js'])
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>

