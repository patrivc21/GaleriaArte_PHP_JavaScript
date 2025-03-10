<?php
    require_once ('publico.class.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $id_publico=$_POST['id_publico'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        if (Publico::insertarPublico($nombre, $apellidos, $id_publico, $email, $pass))
        {
            echo"
            <script language='javascript'>
                alert('Registro exitoso')
                window.location = '../index.php'
            </script>";
            exit();
        }

        {
            echo"
                <script language='javascript'>
                    alert('Registro malo')
                    window.location = '../exposiciones/altapublico.php'
                </script>";
        }
    
    }

   
?>