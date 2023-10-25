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

<br>
<div class="areabred">
    <div class="breadcrumbs">
       <div class="home">
         <a href="index.php"><i class="fas fa-home"></i></a>
      </div>
       <ul>
         <li><a >
           <i class="fas fa-save"></i>
           <p>Aviso</p>
           </a></li>
         
      </ul>  
    </div>
</div>
<br>
<br>
<br>
<br><br>
  <div class="texto">
  <h1>AVISO DE PRIVACIDAD INTEGRAL </h1>
		
		<p>Repositorio De Las Enfermedades Cronicas , RVEC, con domicilio en CONOCIDA S/N, Colonia Parque del Poblamiento, Huejutla de Reyes, Huejutla, CP. 43000, Hidalgo, Mexico, es el responsable del tratamiento de los datos personales que nos proporcione, los cuales serán protegidos conforme a lo dispuesto por la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados, y demás normatividad que resulte aplicable. </p>

		<h3>¿Qué datos personales solicitamos y para qué fines? </h3>
		<p>Los datos personales que solicitamos los utilizaremos para las siguientes finalidades y que requieren consentimiento: </p>
<ol> 
<li>Verificar el cumplimiento de los requisitos y trámites previstos en la Ley</li>
 <li>Acreditar la identidad como titular de los datos </li>
 </ol><br><br>


		<p>Si no desea que sus datos personales se utilicen para las finalidades que requieren de su consentimiento, podrá manifestarlo a continuación:  
            No consiento que mis datos personales se utilicen para los siguientes fines:  </p>

            <ol> 
<li>Verificar el cumplimiento de los requisitos y trámites previstos en la Ley ▢ </li>
 <li>Acreditar la identidad como titular de los datos ▢ </li>
 </ol><br><br>

		<p>En caso de que para las siguientes finalidades consienta su tratamiento, dado que para las mismas requerimos su consentimiento expreso, le solicitamos que lo manifieste a continuación:  

Consiento que mis datos personales se utilicen para los siguientes fines: </p>
<ol> 
<li>Verificar el cumplimiento de los requisitos y trámites previstos en la Ley ▢ </li>
 <li>Acreditar la identidad como titular de los datos ▢ </li>
 </ol><br><br>

		<p>Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, se solicitarán los siguientes datos personales:  </p>
        <ol> 
<li>Nombre </li>
 <li>Domicilio </li>
 <li>Teléfono celular </li>
 <li>Correo electrónico </li>
 </ol>
 
 <p>Se informa que no se solicitarán datos personales sensibles. </p>
 <br><br>

 
		<h3>¿Con quién compartimos su información personal y para qué fines? </h3>
		<p>Se informa que no se realizarán transferencias de datos personales, salvo aquéllas que sean necesarias para atender requerimientos de información de una autoridad competente, que estén debidamente fundados y motivados. </p>

 
		<h3>¿Cuál es el fundamento para el tratamiento de datos personales? </h3>

		<p>El fundamento para el tratamiento y transferencias de datos personales son los artículos 57, 58, 59, 60, 61 y 62 de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Hidalgo. </p>

		<h3>¿Dónde puedo ejercer mis derechos ARCO? </h3>

		<p> 

Usted podrá presentar su solicitud para el ejercicio de los derechos de acceso, rectificación, cancelación u oposición de sus datos personales (derechos ARCO) directamente ante nuestra Unidad de Transparencia, cuyos datos de contacto son los siguientes:  

a) Nombre de su titular: Deysi Garcia Murrieta <br>

b) Domicilio: CONOCIDA S/N, Colonia Centro, Huejutla de Reyes, Huejutla, CP. 43000, Hidalgo, Mexico <br>

c) Correo electrónico: repovirdenfermecroni@gmail.com <br>

d) Número telefónico y extensión: 5576789245 <br>

e) Otro dato de contacto:  <br>

 
Asimismo, usted podrá presentar una solicitud de ejercicio de derechos ARCO a través de la Plataforma Nacional de Transparencia, disponible en http://www.plataformadetransparencia.org.mx, y a través de los siguientes medios: 

Para el ejercicio de cualquiera de los derechos ARCO, usted podrá presentar solicitud por escrito ante la Unidad de Transparencia, formato electrónico disponible en el link www.xxxxxxx/formatoderechosarco , vía Plataforma Nacional Transparencia disponible en http://www.plataformadetransparencia.org.mx/web/guest/inicio, o por correo electrónico unidadtransparencia@dominiodeinternet.com. El procedimiento para ejercicio de estos derechos está disponible en la página web. 

Si desea conocer el procedimiento para el ejercicio de estos derechos, puede acudir a la Unidad de Transparencia, o bien, ponemos a su disposición los siguientes medios:  

Correo electronico 

  </p>

  <h3> ¿Cómo puede conocer los cambios en este aviso de privacidad? </h3>

		<p>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales o por otras causas.  

Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, a través de: En caso de realizar alguna modificación al Aviso de Privacidad, se le hará de su conocimiento vía correo electrónico o en las instalaciones de la Unidad de Transparencia. </p>

<h3> Otros datos de contacto: </h3>

<p>Número telefónico para la atención del público en general: 7718456973 </p>

<p>Última actualización: 04/12/2022 </p>


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