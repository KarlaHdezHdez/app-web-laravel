<?php
$pass = ""; //contraseña
$usuario = "";
$bd = "bduthh";
$rutaServidor = "localhost\\SQLEXPRESS";

try {
    $base_datos = new PDO("sqlsrv:server=$rutaServidor;database=$bd", $usuario, $pass);
    $base_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "entrando";
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
?>
