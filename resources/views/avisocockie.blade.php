<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REVEC</title>
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
           <p>Cookies</p>
           </a></li>
         
      </ul>  
    </div>
</div>

 <br><br><br><br>
  <div class="texto">
  <h1>Aviso de Cookies</h1>
		<h3>¿Qué son las cookies?</h3>
		<p>Una cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.</p>

		<h3>¿Qué tipos de cookies utiliza esta página web?</h3>
		<p>Esta página web utiliza los siguientes tipos de cookies:</p>

		<p><b>Cookies de análisis:</b> Son aquéllas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.</p>

		<p><b>Cookies técnicas:</b> Son aquellas que permiten al usuario la navegación a través del área restringida y la utilización de sus diferentes funciones, como por ejemplo, llevar a cambio el proceso de compra de un artículo.</p>

		<p><b>Cookies de personalización:</b> Son aquellas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma o el tipo de navegador a través del cual se conecta al servicio.</p>

		<p><b>Cookies publicitarias:</b> Son aquéllas que, bien tratadas por esta web o por terceros, permiten gestionar de la forma más eficaz posible la oferta de los espacios publicitarios que hay en la página web, adecuando el contenido del anuncio al contenido del servicio solicitado o al uso que realice de nuestra página web. Para ello podemos analizar sus hábitos de navegación en Internet y podemos mostrarle publicidad relacionada con su perfil de navegación.</p>

		<p><b>Cookies de publicidad comportamental:</b> Son aquellas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Este tipo de cookies almacenan información del comportamiento de los visitantes obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar avisos publicitarios en función del mismo.</p>

 
		<h3>Desactivar las cookies.</h3>
		<p>Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador.</p>

		<p>En la mayoría de los navegadores web se ofrece la posibilidad de permitir, bloquear o eliminar las cookies instaladas en su equipo.</p>

		<p>A continuación puede acceder a la configuración de los navegadores webs más frecuentes para aceptar, instalar o desactivar las cookies:</p>

		<p><a href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank" rel="noopener">Configurar cookies en Google Chrome</a></p>

		<p><a href="http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9" target="_blank" rel="noopener">Configurar cookies en Microsoft Internet Explorer</a></p>

		<p><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias?redirectlocale=es&amp;redirectslug=habilitar-y-deshabilitar-cookies-que-los-sitios-we" target="_blank" rel="noopener">Configurar cookies en Mozilla Firefox</a></p>

		<p><a href="https://support.apple.com/es-es/HT201265" target="_blank" rel="noopener">Configurar cookies en Safari (Apple)</a></p>

 
		<h3>Cookies de terceros.</h3>

		<p>Esta página web utiliza servicios de terceros para recopilar información con fines estadísticos y de uso de la web. Se usan cookies de DoubleClick para mejorar la publicidad que se incluye en el sitio web. Son utilizadas para orientar la publicidad según el contenido que es relevante para un usuario, mejorando así la calidad de experiencia en el uso del mismo.</p>

		<p>En concreto, usamos los servicios de Google Adsense y de Google Analytics para nuestras estadísticas y publicidad. Algunas cookies son esenciales para el funcionamiento del sitio, por ejemplo el buscador incorporado.</p>

		<p>Nuestro sitio incluye otras funcionalidades proporcionadas por terceros. Usted puede fácilmente compartir el contenido en redes sociales como Facebook, Twitter o Google +, con los botones que hemos incluido a tal efecto.</p>

 
		<h3>Advertencia sobre eliminar cookies.</h3>

		<p>Usted puede eliminar y bloquear todas las cookies de este sitio, pero parte del sitio no funcionará o la calidad de la página web puede verse afectada.</p>

		<p>Si tiene cualquier duda acerca de nuestra política de cookies, puede contactar con esta página web a través de nuestros canales de Contacto.</p>
	

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
    @vite(['resources/js/funcionalidad.js'])
</body>

</html>