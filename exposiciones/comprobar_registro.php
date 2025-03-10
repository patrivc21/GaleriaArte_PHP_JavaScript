<?php
  session_start();

  require_once('publico.class.php');
  require_once('comisario.class.php');

  $publicocorrecto=Publico::validarLoginPublico($_POST['email'], $_POST['pass']);
  $comisariocorrecto=Comisario::validarLoginComisario($_POST['email'], $_POST['pass']);

  if($publicocorrecto){
    $_SESSION['Publico']=$_POST['email'];
    echo"
                <script language='javascript'>
                    alert('Inicio de sesion realizado con exito')
                    window.location = '../index.php'
                </script>";
    exit;
  }elseif ($comisariocorrecto){
      $_SESSION['Comisario']=$_POST['email'];
      echo"
                  <script language='javascript'>
                      alert('Inicio de sesion realizado con exito')
                      window.location = '../index.php'
                  </script>";
      exit;

  }else{
   echo"
                <script language='javascript'>
                    alert('Error: fallo al iniciar sesion.')
                    window.location = '../index.php'
                </script>";
    exit;
  }
?>