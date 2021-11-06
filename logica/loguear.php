<?php

require ('../conexion/conexioDB.php');

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['password'];

$q = "SELECT COUNT(*) as contar, usuarios.usuario , usuarios.contrasena, rolusuario.rol_usuario  from usuarios, rolusuario where usuario='$usuario' and contrasena='$clave' and usuarios.rol_usuario=rolusuario.id ";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

//echo "<script type=\"text/javascript\">alert(\"Ups! Contraseña o Usuario Incorrecto\");</script>";

if($array['contar']>0){

    $_SESSION['username']= $usuario;
    

    header("location: ../index.php");

}
else {
   
    echo "<script type=\"text/javascript\">alert(\"Ups! Contraseña o Usuario Incorrecto\");</script>";
    
    header("location: ../login.php");
}
 

?>