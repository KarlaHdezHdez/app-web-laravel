<?php
require_once('./base_de_datos.php');
header('Content-Type: text/html charset=uTF-8');
//print_r($_FILES);
session_start();

$nombre_archivo =$_FILES['archivo']['name'];
$ruta_temp = $_FILES['archivo']['tmp_name'];

$ruta_destino = "archivosCargados"; // se crea una carpeta para cargar el archivo temporarmente
if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_destino."/".$nombre_archivo))
{

  $csv = fopen($ruta_destino."/".$nombre_archivo, "r");

  fgetcsv($csv, 1000, ";"); // excluye los titulos, si no tiene titulos comentar esta linea
  //fgetcsv($csv, 1000, ";"); //quita segundo registro del csv

  $cantidad_columnas = 8; //columnas del archivo original
  $contador = 0;

  while($data = fgetcsv($csv, 1000, ";"))
  {
    $num = count($data);

    $datos = explode(",",$data[0]);


    if(isset($datos[1]))
    {
      $apellido_p = utf8_decode($datos[0]);
      $ap_materno = utf8_decode($datos[1]);
      $nombre = utf8_decode($datos[2]);
      $usuario = utf8_decode($datos[3]);
      $pass = utf8_decode($datos[4]);
      $matricula = $datos[5];
      $correo = $datos[6];
      $tel = $datos[7];

      //echo "$apellido_p ".$ap_materno."-> ".$nombre."->".$usuario."<br>";
      //pRint_r($datos);
      //echo $columna1."  ".$columna2." ".$columna3." ". $columna4." <br>";
      $existe_matricula =  $base_datos->query("SELECT * FROM tblusuarios WHERE vchmatricula ='$matricula'");
      $rows = $existe_matricula->fetchAll();
      if(empty($rows))
      {
        $query = $base_datos->prepare("INSERT INTO tblusuarios(vchapeidop,vchapeidom,vchnombre,vchusuario,vchcontrasena, vchmatricula, vchcorreo, vchtelefono) VALUES(?, ?, ?, ?, ?, ?, ?, ?) "); // los ? para evitar inyección de código
        $resultado = $query->execute(["$apellido_p", "$ap_materno", "$nombre", "$usuario","$pass","$matricula","$correo","$tel"]);

        if($resultado === true)
        {
          $contador++;
        }
      }
    }
  }


  unlink($ruta_destino."/".$nombre_archivo); //elimina el archivo temporal
  $_SESSION['carga_alumno'] = "cargados ".$contador."  registros ";
  header('Location: pcarga.php');
}
?>
