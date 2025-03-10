<?php
  require_once('exposicion.class.php');

  $nombre=$_POST['nombre'];
  $autor=$_POST['autor'];
  $tipo=$_POST['tipo'];

  $Exposicion=new Exposicion($nombre, $autor, $tipo);
  $Exposicion->insertarExposicion($nombre, $autor, $tipo);

  header("Location: ../index.php");
  exit;
?>