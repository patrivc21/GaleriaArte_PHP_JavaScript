<?php
  require_once('exposicion.class.php');

  $nombre=$_POST['nombre'];
  $autor=$_POST['autor'];
  $tipo=$_POST['tipo'];

  $valores=array($nombre, $autor, $tipo);
  $Exposicion=new Exposicion($valores);
  $Exposicion->modificarExposicion($nombre, $autor, $tipo);

  header("Location: ../index.php");
  exit;
?>