<?php
require_once('./base_de_datos.php');
session_start();
$datos =$_REQUEST; //datos recibidos por POST

$tipo_usuario = $datos['sesion'];
$usuario = $datos['usuario'];
$contra = $datos['contra'];

if($tipo_usuario == 'Alumno'):
  $query = $base_datos->query("SELECT * FROM tblusuarios WHERE vchmatricula='$usuario' AND vchcontrasena='$contra'");
else:
  $query = $base_datos->query("SELECT * FROM tbladmin WHERE vchusuario='$usuario' AND vchcontrasena='$contra'");
endif;

$rows= $query->fetchAll(PDO::FETCH_ASSOC);

$datos_enviar= [];
if(!empty($rows)):
  $datos_enviar[0]['error'] = 0;
  $_SESSION['tipo_usuario'] =$tipo_usuario;
  $_SESSION['usuario'] = $usuario;
  $_SESSION['contra'] = $contra;
  if($tipo_usuario == 'Alumno'):
    $_SESSION['nombre'] = $rows[0]['vchnombre']." ".$rows[0]['vchapeidop']." ".$rows[0]['vchapeidom'];
  else:
    $_SESSION['nombre'] = $rows[0]['vchusuario'];
  endif;
  $datos_enviar[0]['nombre'] = $_SESSION['nombre'];
else:
  $datos_enviar[0]['error'] = 1;
endif;

$datos_enviar[0]['tipo_usuario'] = $tipo_usuario;

echo json_encode($datos_enviar, true);
?>
