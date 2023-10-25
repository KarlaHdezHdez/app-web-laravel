<?php
require_once('./base_de_datos.php');
session_start();
$datos =$_REQUEST; //datos recibidos por POST
/*
$tipo_usuario = $datos['sesion'];
$usuario = $datos['usuario'];
$contra = $datos['contra'];*/

$usuario= '20201001';
//if($tipo_usuario == 'Alumno'):
  //$query = $base_datos->query("SELECT * FROM tblusuarios WHERE vchmatricula='$usuario'");
//else:
 $query = $base_datos->query("SELECT * FROM tbladmin");
//endif;
$rows= $query->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);
exit;
?>
