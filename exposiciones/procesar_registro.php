<?php
  session_start();

  $_SESSION['Publico']=null;
  $_SESSION['Comisario']=null;

  header("Location: ../index.php");
  exit;
?>