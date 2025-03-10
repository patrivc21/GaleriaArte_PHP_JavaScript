<?php
    require_once ('comisario.class.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $id_comisario = $_POST['id_comisario'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if (Comisario::insertarComisario($nombre, $apellidos, $id_comisario, $email, $pass))
        {
            echo"
            <script language='javascript'>
                alert('Comisario registrado correctamente')
                window.location = '../index.php'
            </script>";
            exit();
        }

        else
        {
            echo"
                <script language='javascript'>
                    alert('Registro malo')
                    window.location = '../exposiciones/altacomisario.php'
                </script>";
        }
    }

   
?>