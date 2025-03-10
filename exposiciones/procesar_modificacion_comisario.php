<?php
  session_start();
  require_once("comisario.class.php");

  $validado=Comisario::validarLoginComisario($_SESSION['Comisario'], $_POST['pass']);

  $nombreUsuario=$_POST['email'];
  $userAnterior=$_SESSION['Comisario'];
  $_SESSION['Comisario']=$_POST['email'];

  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $id_comisario=$_POST['id_comisario'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  

  $datos=array($nombre, $apellidos, $id_comisario, $email, $pass);
  $user=new Comisario($datos);
  $user->modificarComisario($userAnterior, $datos);

  header("Location: ../index.php");
  exit;
?>