<?php
require_once('./base_de_datos.php');
header('Content-Type: text/html charset=uTF-8');

$datos = $_REQUEST;
$fechasol = ($datos['fechasolicitud'] !="")?$datos['fechasolicitud']:NULL; // NOl null
$periodo = ($datos['periodo'] !="")?$datos['periodo']:NULL; //NULL
$tipobeca = ($datos['tipobeca'] !="")?($datos['tipobeca']): NULL; //NULL
$nomb =$datos['nombre'];
$matr = $datos['matricula'];
$cuatri = $datos['cuatrimestre'];
$tel = ($datos['telefono'] !="")?$datos['telefono']:NULL; //NULL
$lengua =  $datos['lengua'];
$cualeng = ($datos['cual_lengua'] !="")?($datos['cual_lengua']):NULL; //NULL
$carr = ($datos['carrera']);
$sex = $datos['sexo'];
$recibeotrabeca = $datos['recibeotrabeca'];
$otrotipobeca = ($datos['otrotipobeca']);
$cualtipobeca = ($datos['cualtipobeca']!="")?($datos['cualtipobeca']):NULL; //NULL
$apoyoeco = "'".($datos['apoyoeconomico'])."'";
$quienapoyo = ($datos['quienapoyoeconomico']!="")?($datos['quienapoyoeconomico']):NULL; //NULL
$ocPadre = ($datos['ocupacionPadre']);
$ocMadre = ($datos['ocupacionMadre']);
$princapoyo = ($datos['principalapoyoeconomico']);
$ingresomen = $datos['ingresomensual'];
$gastod = $datos['gastodiario'];
$dependeco = $datos['dependenciaeconomica'];
$trabestud = $datos['trabajoestudio'];
$horastrab = ($datos['horastrabajoestudio']!="")?$datos['horastrabajoestudio']:NULL; //NULL
$rentest = $datos['rentaestudio'];
$pagrent = ($datos['pagorentaestudio'] !="")?$datos['pagorentaestudio']:NULL; //NULL
$loc = ($datos['localidad']!="")?($datos['localidad']):NULL; //NULL
$mun = ($datos['municipio']);
$edo= ($datos['estado']);
$casa = ($datos['casa']);
$otrcasa = ($datos['otra_casa']!="")?($datos['otra_casa']):NULL; //NULL
$perscasa = $datos['personascasa'];
$cuartcasa = $datos['cuartoscasa'];
$cbtel = $datos['cbtelefono'];
$cbdren= $datos['cbdrenaje'];
$cbalum = $datos['cbalumbradopublico'];
$cbcalle= $datos['cbcallespavimentadas'];
$viaje = ($datos['viajecasa'] !="")?($datos['viajecasa']):NULL; //NULL
$pasaj = ($datos['gastopasaje'] !="")?$datos['gastopasaje']:NULL; //NULL
$desayuno = $datos['gastodesayuno'];
$comida = $datos['gastocomida'];
$cena = $datos['gastocena'];
$gastototal = $datos['gastototal'];
$ipadre = $datos['ingresopadre'];
$imadre = $datos['ingresomadre'];
$ihermanos = $datos['ingresohermanos'];
$iotros = ($datos['ingresootros'] != "")?$datos['ingresootros']:NULL; //NULL
$itotal = $datos['ingresototal'];
$alimento = $datos['gastoalimento'];
$vestido = $datos['gastovestido'];
$celular = $datos['gastocelular'];
$transporte = $datos['gastotransporte'];
$renta = $datos['gastorenta'];
$otrosgas = ($datos['otrosgastos'] != "")?$datos['otrosgastos']:NULL; //NULL
$gastosem = $datos['gastosemanal'];

$datos_guardar = [
  $fechasol,$periodo,$tipobeca,$nomb,$matr,$cuatri,$tel, $lengua,$cualeng,$carr,$sex,$recibeotrabeca,$otrotipobeca, $cualtipobeca,
  $apoyoeco,$quienapoyo,$ocPadre,$ocMadre,$princapoyo,$ingresomen,$gastod, $dependeco,$trabestud,$horastrab,
  $rentest,$pagrent,$loc, $mun,$edo,$casa,$otrcasa, $perscasa,$cuartcasa,$cbtel,$cbdren,$cbalum, $cbcalle,
  $viaje,$pasaj,$desayuno,$comida,$cena,$gastototal,$ipadre,$imadre,$ihermanos, $iotros,$itotal, $alimento,
  $vestido,$celular,$transporte,$renta,$otrosgas,$gastosem
];

$query = $base_datos->prepare("INSERT INTO tblsolicitudes VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$resultado = $query->execute($datos_guardar);

if($resultado === true){
  echo "datos guardados";
}
else{
  echo "algo salio mal";
}
?>
