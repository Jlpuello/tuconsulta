<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "db_tuconsulta";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if($conexion){
   // echo "<script type=\"text/javascript\">alert(\"En Linea\");</script>";
}
else{
   echo "<script type=\"text/javascript\">alert(\"Ups! Algo Salio Mal\");</script>" ;
}
?>