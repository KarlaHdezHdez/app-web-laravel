<?php
require_once('./base_de_datos.php');
header('Content-Type: text/html charset=uTF-8');
//$matricula="20201001";
if($_GET):
  $matricula = $_GET['mtr'];
endif;

$query= $base_datos->query("SELECT * FROM tblsolicitudes WHERE vchmatricula = '$matricula'");
$resultado= $query->fetchAll(PDO::FETCH_ASSOC);

$fecha = "";
$periodo_en = "";
$periodo_may = "";
$periodo_sep = "";
$beca_alimenticia = "( )";
$beca_econ = "( )";
$cuatrimestre = 0;
$nombre = "";
$telefono = "";
$lengua_indigena = "";
$carrera = "";
$sexo ="";
$otra_becasi = "";
$otra_becano = "";

$principalapoyo ="";
$ocupacionPadre ="";
$ocupacionMadre ="";
$ocupacionPrincipal ="";
$ingreso_mensual = "";
$recibogastodiario = "";
$depend_econ ="";
$trabaja_estudia = "";
$trabaja_semana = "";
$renta_estudia = "";
$renta_mensual = "";
$localidad ="";
$municipio ="";
$estado ="";
$casa ="";
$personas_casa = "";
$cuartos_casa ="";
$servicios = "";
$viaje_casa ="";
$gasto_pasaje ="";
$desayuno ="";
/*$nombreImagen = "./img/uthh_circle.png";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));*/
/*$path = 'img/uthh_circle.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$imagenBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);*/

if(isset($resultado) && !empty($resultado)):
  $_fecha= date('d-m-Y',strtotime($resultado[0]['vchfechasolicitud']));
  $fecha =str_replace('-', '/', $_fecha);
  $periodo = $resultado[0]['vchperiodo'];
  if($periodo == 'Enero-Abril'):
    $periodo_en = "<B>X<B>";
  else:
    if($periodo == 'Mayo-Agosto'):
      $periodo_may = "<B>X<B>";
    else:
      $periodo_sep ="<B>X<B>";
    endif;
  endif;

  $tipo_beca = $resultado[0]['vchtipobeca'];
  if($tipo_beca == 'Alimenticia'):
    $beca_alimenticia = "(<B>X</B>)";
  else:
    $beca_econ = "(<B>X</B>)";
  endif;

  $matr =$resultado[0]['vchmatricula'];

  $cuatrimestre = substr($resultado[0]['vchcuatrimestre'],0,1);
  $nombre = $resultado[0]['vchnombre'];
  $telefono = $resultado[0]['vchtelefono'];

  if($resultado[0]['vchlenguaindigena'] == 'Si'):
    $lengua_indigena = "<span class='separacion'>(<B>X</B>) Sí cual:</span> <span><u>".$resultado[0]['vchcuallenguaind']."</u></span>"."<span class='separacion'>( ) No</span>";
  else:
    $lengua_indigena = " <span class='separacion'>() Sí</span>  <span class='separacion'>cual: _____________ </span> <span class='separacion'>( <B>X</B>) No</span>";
  endif;

  $carrera = $resultado[0]['vchcarrera'];

  if($resultado[0]['vchsexo'] == 'M'):
    $sexo = "<span class='separacion'>(<B>X</B>)M</span> <span class='separacion'>( )F</span>";
  else:
    $sexo = "<span class='separacion'>()M</span> <span class='separacion'>(<B>X</B>)F</span>";
  endif;

  if($resultado[0]['vchotrabeca'] == 'Si'):
    $otra_becano = "<span class='separacion'>()No</span>";
    if($resultado[0]['vchopcionbeca'] ==='Federal'):
      $otra_becasi ="<span class='separacion'>(<B>X</B>)Si</span><span class='separacion'>(<B>X</B>)FEDERAL</span><span class='separacion'>( )ESTATAL</span><span class='separacion'>OTRO _______</span>";
    else:
      if($resultado[0]['vchopcionbeca'] ==='Estatal'):
        $otra_becasi ="<span class='separacion'>(<B>X</B>)Si</span><span class='separacion'>( )FEDERAL</span><span class='separacion'>(<B>X</B>)ESTATAL</span><span class='separacion'>OTRO _______</span>";
      else:
        if($resultado[0]['vchopcionbeca'] ==='Ninguna'):
          $otra_becano ="<span class='separacion'>(<B>X</B>)No</span>";
          $otra_becasi ="<span class='separacion'>( )Si</span><span class='separacion'>( )FEDERAL</span><span class='separacion'>()ESTATAL</span><span class='separacion'>OTRO _________</span>";
        else:
          $otra_becasi ="<span class='separacion'>(<B>X</B>)Si</span><span class='separacion'>( )FEDERAL</span><span class='separacion'>()ESTATAL</span><span class='separacion'>OTRO  <u>".$resultado[0]['vchcualbeca']."</u></span>";
        endif;

      endif;
    endif;
  else:
    $otra_becasi ="<span class='separacion'>( )Si</span><span class='separacion'>( )FEDERAL</span><span class='separacion'>( )Estatal</span><span class='separacion'>OTRO _______</span>";
    $otra_becano = "<span class='separacion'>(<B>X</B>)No</span>";
  endif;

  if($resultado[0]['vchprinapoyoecon'] === 'Padre'):
    $principalapoyo ="<span class='separacion'>(<B>X</B>)Padre</span><span class='separacion'>( )Madre</span><span class='separacion'>( )Yo mismo</span><span class='separacion'>Otros ________</span>";
  else:
    if($resultado[0]['vchprinapoyoecon'] === 'Madre'):
      $principalapoyo ="<span class='separacion'>()Padre</span><span class='separacion'>(<B>X</B>)Madre</span><span class='separacion'>( )Yo mismo</span><span class='separacion'>Otros ________</span>";
    else:
      if($resultado[0]['vchprinapoyoecon'] === 'Yo Mismo'):
        $principalapoyo ="<span class='separacion'>()Padre</span><span class='separacion'>()Madre</span><span class='separacion'>(<B>X</B>)Yo mismo</span><span class='separacion'>Otros __________</span>";
      else:
        $principalapoyo ="<span class='separacion'>()Padre</span><span class='separacion'>()Madre</span><span class='separacion'>( )Yo mismo</span><span class='separacion'>Otros <u>".$resultado[0]['vchprinquien']."</u></span>";
      endif;
    endif;
  endif;

  $ocupacionPadre = $resultado[0]['vchocuppadre'];
  $ocupacionMadre = $resultado[0]['vchocupmadre'];
  $ocupacionPrincipal = $resultado[0]['vchacupprincipal'];

  $ingreso_mensual = $resultado[0]['vchingresomensual'];
  $recibogastodiario = $resultado[0]['vchrecibogastodiario'];

  $buscar =["Mas de "];
  $reemplazar = [""];
  $depende_econom = str_replace($buscar, $reemplazar,$resultado[0]['vchdepenpersoecon']);
  $depend_econ ="";
  for($i = 1; $i<6; $i++):
    $val = ($i == 5)?"Más de 5":$i;

    if($i == intval($depende_econom)):
      $depend_econ .="<span class='separacion'>(<B>X</B>)".$val."</span>";
    else:
      $depend_econ .="<span class='separacion'>( )".$val."</span>";
    endif;
  endfor;

  $trabaja_estudia = ($resultado[0]['vchtrabajoetudio'] == 'Si')?"<span class='separacion'>(<B>X</B>)Si</span><span class='separacion'>()No</span>":"<span class='separacion'>()Si</span><span class='separacion'>(<B>X</B>)No</span>";
  $trabaja_semana =($resultado[0]['vchhorastrabajosemana'] !="")?"<span class='separacion'> <u>".$resultado[0]['vchhorastrabajosemana']."<u></span>":"<span class='separacion'>_______</span>";
  $renta_estudia = ($resultado[0]['vchrentaestudio'] == 'Si')?"<span class='separacion'>(<B>X</B>)Si</span><span class='separacion'>()No</span>":"<span class='separacion'>()Si</span><span class='separacion'>(<B>X</B>)No</span>";;
  $renta_mensual = ($resultado[0]['vchpagorentamens'] !="")?"<span class='separacion'><u>".$resultado[0]['vchpagorentamens']."<u></span>":"<span class='separacion'>________</span>";
  $localidad = ($resultado[0]['vchlocalidad']!="")?"<span class='separacion'>".$resultado[0]['vchlocalidad']."</span>":"";
  $municipio = ($resultado[0]['vchmunicipio'] !="")?"<span class='separacion'>".$resultado[0]['vchmunicipio']."</span>":"";
  $estado = ($resultado[0]['vchestado'] !="")?"<span class='separacion'>".$resultado[0]['vchestado']."</span>":"";

  if($resultado[0]['vchcasa'] =='Propia'):
    $casa = "<span class='separacion'>(<B>(X)</B>) Propia</span><span class='separacion'>( )Rentada</span><span class='separacion'>( ) Otra situación: __________</span>";
  else:
    if($resultado[0]['vchcasa'] == 'Rentada'):
      $casa = "<span class='separacion'>( ) Propia</span><span class='separacion'>(<B>(X)</B>)Rentada</span><span class='separacion'>( ) Otra situación: __________</span>";
    else:
      $casa = "<span class='separacion'>( ) Propia</span><span class='separacion'>( )Rentada</span><span class='separacion'>( ) Otra situación: <u>".$resultado[0]['vchsituacioncasa']."</u></span>";
    endif;
  endif;

  $pers_casa = str_replace($buscar, $reemplazar,$resultado[0]['vchpersonasencasa']);
  $personas_casa = "";
  for($i =1; $i<6; $i++):
    $valor = ($i == 5)?"Más de 5":$i;
        if($i == intval($pers_casa)):
          $personas_casa .="<span class='separacion'>(<B>X</B>)".$valor."</span>";
        else:
          $personas_casa .="<span class='separacion'>( )".$valor."</span>";;
        endif;
  endfor;

  $cuart_casa = str_replace($buscar, $reemplazar, $resultado[0]['vchcuartoscasa']);
  $cuartos_casa = "";
  for($i =1; $i<6; $i++):
    $val_cuarto = ($i == 5)?"Más de 5":$i;
        if($i == intval($cuart_casa)):
          $cuartos_casa .="<span class='separacion'>(<B>X</B>)".$val_cuarto."</span>";
        else:
          $cuartos_casa .="<span class='separacion'>( )".$val_cuarto."</span>";;
        endif;
  endfor;

  //-------------servicios------------------
  $servicios ="";
  if($resultado[0]['vchsertelefono'] == 'Si'):
    $servicios .="<span class='separacion'>(<B>X</B> ) Teléfono</span>";
  else:
    $servicios .="<span class='separacion'>( ) Teléfono</span>";
  endif;
  if($resultado[0]['vchserdrenaje'] == 'Si'):
    $servicios .="<span class='separacion'>(<B>X</B> ) Drenaje</span>";
  else:
    $servicios .="<span class='separacion'>( ) Drenaje</span>";
  endif;
  if($resultado[0]['vchseralumbpubli'] == 'Si'):
    $servicios .="<span class='separacion'>(<B>X</B> ) Alumbrado público</span>";
  else:
    $servicios .="<span class='separacion'>( ) Alumbrado público</span>";
  endif;
  if($resultado[0]['vchsercallepavi'] == 'Si'):
    $servicios .="<span class='separacion'>(<B>X</B> ) Calles pavimentadas</span>";
  else:
    $servicios .="<span class='separacion'>( ) Calles pavimentadas</span>";
  endif;
  //---------------------------------------------

  $viaje_casa =($resultado[0]['vchfrecviajecasa'] !="")?"<span class='separacion'><u>".$resultado[0]['vchfrecviajecasa']."</u></span>":" ______";
  $gasto_pasaje = ($resultado[0]['vchgastopasaje']!="")?"<span class='separacion'><u>".$resultado[0]['vchgastopasaje']."</u></span>":"_______";
  $desayuno =($resultado[0]['vchgastodesayuno'] !="")?floatval($resultado[0]['vchgastodesayuno']):0;
  $comida = ($resultado[0]['vchgastocomida']!="")?floatval($resultado[0]['vchgastocomida']):0;
  $cena = ($resultado[0]['vchgastocena']!="")?floatval($resultado[0]['vchgastocena']):0;
  $total_consumo = $desayuno + $comida + $cena;

  $ingreso_padre =($resultado[0]['vchingsempadre']!="")?floatval($resultado[0]['vchingsempadre']):0;
  $ingreso_madre = ($resultado[0]['vchingsemmadre']!="")?floatval($resultado[0]['vchingsemmadre']):0;
  $ingreso_hermano = ($resultado[0]['vchingsemherm']!="")?floatval($resultado[0]['vchingsemherm']):0;
  $ingreso_otros = ($resultado[0]['vchingsemotros'] !="")?floatval($resultado[0]['vchingsemotros']):0;

  $total_ingresos = $ingreso_padre + $ingreso_madre +$ingreso_hermano + $ingreso_otros;

  $gasto_alimentacion = ($resultado[0]['vchgassemalimento']!="")?floatval($resultado[0]['vchgassemalimento']):0;
  $gasto_vestido = ($resultado[0]['vchgassemvestido'])?floatval($resultado[0]['vchgassemvestido']):0;
  $gasto_celular = ($resultado[0]['vchgassemcelular'] !="")?floatval($resultado[0]['vchgassemcelular']):0;
  $gasto_transporte = ($resultado[0]['vchgassemtransp'] !="")?floatval($resultado[0]['vchgassemtransp']):0;
  $gasto_renta = ($resultado[0]['vchgassemrenta'] !="")?floatval($resultado[0]['vchgassemrenta']):0;
  $gasto_otros = ($resultado[0]['vchgassemotros']!="")?floatval($resultado[0]['vchgassemotros']):0;

  $gasto_total = $gasto_alimentacion+ $gasto_vestido+  $gasto_celular +  $gasto_transporte+  $gasto_renta+$gasto_otros;
endif;
?>
