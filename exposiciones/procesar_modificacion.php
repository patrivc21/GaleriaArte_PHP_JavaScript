<?php
  session_start();

  require_once("publico.class.php");

  $validado=Publico::validarLoginPublico($_SESSION['Publico'], $_POST['pass']);

  $nombreUsuario=$_POST['email'];
  $userAnterior=$_SESSION['Publico'];
  $_SESSION['Publico']=$_POST['email'];

  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellidos'];
  $id_publico=$_POST['id_publico'];
  $email=$_POST['email'];
  $pass = $_POST['pass'];
  

  $datos=array($nombre, $apellidos, $id_publico, $email,
               $pass);
  $user=new Publico($datos);
  $user->modificarUsuario($userAnterior, $datos);

  header("Location: ../index.php");
  exit;
?>