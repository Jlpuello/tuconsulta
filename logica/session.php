<?php

session_start();
$usuario = $_SESSION['username'];


if(!isset($usuario)){
    header("location: login.php");
}
else{

   // header("location: index.php");

}

?>