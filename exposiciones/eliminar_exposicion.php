<?php
  require_once('exposicion.class.php');

  $nombre=$_POST['nombre'];

  $Exposicion=new Exposicion($nombre);
  $Exposicion->eliminarExposicion($nombre);

  header("Location: ../index.php");
  exit;
?>