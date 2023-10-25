<?php
require_once('./base_encuesta_pdf.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <!--<link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">-->
  <style>
  .center{
    text-align: center;
  }

  th,td{text-align:center;}
  .seleccionado{
    background-color: #ffa040; /*naranja*/
    font-weight: bold;
  }
  .separacion{
    padding-left: 10px;
  }
  .verde{
    background-color: #00827F;
    color: #FFFFFF;
    border-style:solid;
  }
  .sin_bordesIzDer{
    border-right: 1px solid transparent;
    border-left: 1px solid transparent;
  }
  .sin_bordesTopLeft{
    border-left: 1px solid transparent;
    border-top: 1px solid transparent;
    /*border-style: none solid solid none;*/
    color: #FFFFFF;
  }
  .sin_bordesTopBot{
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
  }
  .sin_bordes{
    border-left: 1px solid transparent;
    border-top: 1px solid transparent;
    border-right: 1px solid transparent;
    border-bottom: 1px solid transparent;
  }
  .arial7{
    font-family: Arial;
    font-size: 7;
  }
  .arial9{
    font-family: Arial;
    font-size: 9;
  }
  .arial8{
    font-family: Arial;
    font-size: 8;
  }
  .arial5{
    font-family: Arial;
    font-size:5;
  }
  body{background: #FFFFFF;}
  </style>
</head>
<body>
  <!--</?php echo $_SERVER['DOCUMENT_ROOT'];?>-->
  <table width="100%" border="1" style="border-collapse:collapse;">
    <tr>
      <td rowspan="5" class="arial5" style="border-style:hidden solid hidden hidden; color: white;">Celda<br/> vacía</td>
      <td colspan="2" rowspan="5"><img src="http://localhost/uthh/img/uthh_circle.jpg" alt="" height="30" width="30" /></td>
      <td class="arial8" rowspan="2" colspan="9" style="border-style: solid solid hidden hidden;"><B>Documento:</B> solicitud de beca</td>
      <td colspan="3" style="border-left-style: hidden;"></td>
    </tr>
    <tr class="arial5">
      <td>ISO 9001:2015</td>
      <td>8.5.1</td>
      <td class="sin_bordesTopBot" style="border-top:1px solid transparent; border-bottom: 1px solid transparent;"></td>
    </tr>
    <tr>
      <td colspan="9" class="arial8" style="border-left-style: hidden; border-top-style: hidden;"><B>Área:</B>Dirección Académica</td>
      <td class="arial5">ISO 14001:2015</td>
      <td class="arial5">NA</td>
      <td></td>
    </tr>
    <tr class="arial5">
      <td>Código</td>
      <td>FDAC44</td>
      <td class="sin_bordesTopBot" style="border-style: hidden solid hidden solid; border-bottom: 1px solid transparent;"></td>
      <td>Edición</td>
      <td>03</td>
      <td class="sin_bordesTopBot"></td>
      <td>Fecha</td>
      <td><?= $fecha; ?></td>
      <td class="sin_bordesTopBot"></td>
      <td>NMX-R-025-SCFI-2015</td>
      <td>NA</td>
      <td class="sin_bordesTopBot"></td>
    </tr>
    <tr>
      <td colspan="12" style="border-left:1px solid transparent;border-left-style:hidden;"></td>
    </tr>
  </table>
<br />
  <table id="datosGenerales" width="100%" border="1"  style="border-collapse:collapse;" >
    <tr>
      <td class="sin_bordesTopLeft" colspan="6" rowspan="5"></td>
      <td colspan="3" class="arial7"><B>Fecha de la <br/>solicitud</B></td>
      <td colspan="7" class="arial7"><?= $fecha; ?></td>
    </tr>
    <tr>
      <td  rowspan="2" colspan="3" class="arial7"><B>Periodo</B></td>
      <td colspan="3" class="verde" class="arial7">Enero-Abril</td>
      <td colspan="3" class="verde" class="arial7">Mayo-Agosto</td>
      <td class="verde" class="arial7">Septiembre-Diciembre</td>
    </tr>
    <tr>
      <td colspan="3" class="arial9"><?=$periodo_en; ?></td>
      <td colspan="3" class="arial9"><?=$periodo_may; ?></td>
      <td class="arial9"><?=$periodo_sep; ?></td>
    </tr>
    <tr>
      <td  rowspan="2" colspan="3" class="arial7"><B>Tipo de Beca <br />Solicitada </B></td>
      <td colspan="3" class="arial8"><B>Alimenticia</B></td>
      <td colspan="3" class="arial8"><?= $beca_alimenticia;?></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3" class="arial8"><B>Económica</B></td>
      <td colspan="3" class="arial8"><?= $beca_econ;?></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="16" class="verde arial8">DATOS GENERALES</td>
    </tr>
    <tr class="arial8">
      <td width="100px">Matrícula:</td>
      <td width="100px"><B><?= $matr;?><B></td>
        <td width="120px">Cuatrimestre</td>
        <?php for ($i=1; $i<12; $i++):
          if($i == intval($cuatrimestre)):
            $clase_cuatrimestre ="seleccionado";
          else:
            $clase_cuatrimestre ="";
          endif;
          ?>
          <td width="30px" class="<?= $clase_cuatrimestre;?>"><?=$i; ?></td>
          <?php
        endfor;
        ?>
        <td colspan="2" style="text-align:left; padding-left: 10px;">Teléfono<span style="padding-left: 20px;"><B><?= $telefono;?></B></span></td>
      </tr>
      <tr class="arial8">
        <td>Nombre:</td>
        <td colspan="13"><B><?=$nombre; ?><B></td>
          <td colspan="2" style="text-align:left; padding-left: 10px;">Habla alguna lengua indígena:<?= $lengua_indigena;?> <!--(sí) cual:_________ (No)--></td>
        </tr>
        <tr class="arial8">
          <td>Carrera:</td>
          <td colspan="13"><?= $carrera; ?></td>
          <td colspan="2" style="text-align: left; padding-left: 10px;">Sexo: <?=$sexo; ?></td>
        </tr>
        <tr class="arial8">
          <td colspan="2" style="border-right:1px solid transparent; border-bottom-style:hidden">Recibe Otro tipo de beca:</td>
          <td colspan="14" style="border-left:1px solid transparent;border-left-style:hidden; text-align: left"><?= $otra_becasi; ?><!--(  Si    )      (FEDERAL)         (ESTATAL)      OTRO_______________--></td>
        </tr>
        <tr class="arial8">
          <td style="border-top:1px solid transparent;border-right:1px solid transparent;"></td>
          <td colspan="15" style="border-top:1px solid transparent; border-top-style: hidden;text-align: left; padding-left:100px;"> <?= $otra_becano;?><!--( No)--></td>
        </tr>
      </table>

      <!--<br />-->
      <!-- Estudio socioeconómico-->
      <table border="1" width="100%" style="border-collapse: collapse;" class="arial8">
        <tr>
          <th colspan="4" class="verde">CUESTIONARIO SOCIOECONÓMICO</th>
        </tr>
        <tr>
          <td colspan="2" >¿Quién es tu principal apoyo económico?</td>
          <td rowspan="2">¿Cuál es la ocupación de tu principal apoyo económico ?</td>
          <td width="40px" rowspan="2"><?=$ocupacionPrincipal;?></td>
        </tr>
        <tr>
          <td colspan="2"> <?= $principalapoyo ;?><!--( )Padre     (  )Madre  (  )Yo mismo  otros__________--> </td>
        </tr>
        <tr>
          <td>Ocupación del Padre: </td>
          <td width="150px"><span class="separacion"><?= $ocupacionPadre?></span></td>
          <td>¿Cuánto es el ingreso mensual del principal apoyo ? </td>
          <td width="150px"><span><?= $ingreso_mensual; ?></span></td>
        </tr>
        <tr>
          <td>Ocupación de la Madre: </td>
          <td width="150px"><span class="separacion"><?= $ocupacionMadre?></span></td>
          <td>¿Cuánto recibe de gasto diario? </td>
          <td width="150px"><span class="separacion"><?= $recibogastodiario;?></span></td>
        </tr>
        <tr>
          <td colspan="4">
            ¿Cuántas personas incluyéndolo a usted dependen económicamente de su principal apoyo o sustento?: <?= $depend_econ;?> <!--(  1  )   (  2  )   (  3  )   (  4  )      ( más de 5 )-->
          </td>
        </tr>
        <tr>
          <td colspan="2">¿Actualmente trabajas mientras estudias? <?= $trabaja_estudia; ?> <!--()Sí ()No--></td>
          <td colspan="2">¿Cuantas horas trabaja a la semana? <?= $trabaja_semana; ?><!--_____________--> </td>
        </tr>
        <tr>
          <td colspan="2">¿Actualmente rentas mientras estudias? <?= $renta_estudia;?><!--()Sí ()No--></td>
          <td colspan="2">¿Cuánto paga de renta mensual?<?= $renta_mensual;?><!-- _____________--> </td>
        </tr>
      </table>

      <table id="domicilio" width="100%" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse;" class="arial8">
        <tr>
          <th colspan="6" class="verde">LUGAR DE PROCEDENCIA</th>
        </tr>
        <tr>
          <td colspan="2">Localidad: <?= $localidad; ?></td>
          <td colspan="2">Municipio: <?= $municipio; ?></td>
          <td colspan="2">Estado: <?= $estado;?></td>
        </tr>
        <tr>
          <td colspan="6">¿La casa donde habita regularmente es? <?= $casa;?> <!--(Propia)  (Rentada)    Otra situación:--></td>
        </tr>
        <tr>
          <td colspan="3">¿Cuántas personas habitan en esa casa?:</td>
          <td colspan="3">¿Cuántos cuartos tiene esa casa sin contar baños, cocina y pasillos?:</td>
        </tr>
        <tr>
          <td colspan="3" style="border-top-style: hidden;"><?= $personas_casa;?><!--(  1  )   (  2  )   (  3  )   (  4  )   ( más de 5 )--></td>
          <td colspan="3" style="border-top-style: hidden;"><?= $cuartos_casa; ?><!--(  1  )   (  2  )   (  3  )   (  4  )   ( más de 5 )--></td>
        </tr>
        <tr>
          <td colspan="6">Bienes y servicios que tiene la casa  <?= $servicios;?>  <!--Teléfono(  )  Drenaje(  )  Alumbrado público(  )  alles pavimentadas: (  )--></td>
        </tr>
        <tr>
          <td colspan="3">¿Cada cuando viaja a su casa?<?= $viaje_casa;?></td>
          <td colspan="3">¿Cuánto gasta en pasaje?<?= $gasto_pasaje;?></td>
        </tr>
      </table>
      <!--<br />-->
      <table width="100%" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse;" class="arial8">
        <tr>
          <th colspan="4" class="verde">DURANTE LA SEMANA</th>
          <th width="30px" class="sin_bordesTopBot" style="color: #FFFF;">asghdghagshds</th>
          <th rowspan="2" colspan="2" class="verde">¿A cuánto ascienden sus ingresos semanales?:</th>
          <th rowspan="2" colspan="2" class="verde">¿A cuánto ascienden tus  gastos semanales?:</th>
        </tr>
        <tr>
          <th colspan="3" class="verde"></th>
          <th width="200px" class="verde">¿Cuánto gasta?</th>
        </tr>
        <tr>
          <td colspan="3" width="300px">¿Qué desayuna?</td>
          <td width="200px"><?=$desayuno; ?></td>
          <td width="30px" rowspan="6" class="sin_bordesTopBot" style="border-style:hidden solid hidden solid;"></td>
          <td width="100px">Padre</td>
          <td width="100px"><?= $ingreso_padre;?></td>
          <td width="100px">Alimentación</td>
          <td width="100px"><?=$gasto_alimentacion;?></td>
        </tr>
        <tr>
          <td colspan="3" width="300px">¿Qué come?</td>
          <td width="200px"><?=$comida;?></td>
          <td width="100px">Madre</td>
          <td width="100px"><?= $ingreso_madre;?></td>
          <td width="100px">Vestido</td>
          <td width="100px"><?=$gasto_vestido;?></td>
        </tr>
        <tr>
          <td colspan="3" width="300px">¿Qué cena?</td>
          <td width="200px"><?= $cena;?></td>
          <td width="100px">Hermanos/as</td>
          <td width="100px"><?= $ingreso_hermano;?></td>
          <td width="100px">Celular</td>
          <td width="100px"><?= $gasto_celular;?></td>
        </tr>
        <tr>
          <td colspan="3" width="300px"><B>Total</B></td>
          <td width="200px"><?=$total_consumo;?></td>
          <td width="100px">Otros</td>
          <td width="100px"><?= $ingreso_otros;?></td>
          <td width="100px">Transporte</td>
          <td width="100px"><?= $gasto_transporte;?></td>
        </tr>
        <tr>
          <td colspan="4" style="border-style:solid hidden hidden hidden; border-left:1px solid transparent;"></td>
          <td width="100px"><B>Total</B></td>
          <td width="100px"><?= $total_ingresos;?></td>
          <td width="100px">Renta</td>
          <td width="100px"><?= $gasto_renta;?></td>
        </tr>
        <tr>
          <td colspan="5" class="sin_bordes"></td>
          <td colspan="2" style="border-style:solid solid hidden hidden;"></td>
          <td width="100px">Otros</td>
          <td width="100px"><?= $gasto_otros;?></td>
        </tr>
        <tr>
          <td colspan="5" class="sin_bordes"></td>
          <td colspan="2"  style="border-style:hidden solid hidden hidden; border-bottom:1px solid transparent;"></td>
          <td width="100px" style="border-left-style:solid;"><B>Total</B></td>
          <td width="100px"><?= $gasto_total;?></td>
        </tr>
      </table>
      <br />
      <table border="1" width="100%" style="border-collapse: collapse;" class="arial8">
        <tr>
          <td width="200px" class="sin_bordes" style="color: white;">ashgdhagdhajdasjhdashsadhgdhgash</td>
          <td width="150px" style="border-style:solid hidden hidden hidden; border-bottom:1px solid transparent;">FIRMA DE EL/LA SOLICITANTE</td>
          <td width="200px" class="sin_bordes" style="color:white;">saghdgahsgdhshadghsgdhsggshadghsgd</td>
        </tr>
      </table>
  </body>
  </html>
