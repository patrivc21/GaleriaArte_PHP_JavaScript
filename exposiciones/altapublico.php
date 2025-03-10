<?php
  session_start();
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8" />
        <link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
        <meta name="application-name" content="P1 PW">
        <meta name="author" content="Patricia Villalba Crucelaegui">
        <meta name="description" content="Primera practica de la asignatura PW">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script>
        function validarFormulario(){
            let required=["nombre", "apellidos", "id_publico","email","pass"];

            for(campo of required){
            if(document.forms["altapublico"][campo].value==""){
                alert("El campo "+campo+" es obligatorio");
                return false;
            }
            }

            if(document.forms["altapublico"]["pass"].value==""){
            alert("Introduce la nueva contraseña (Puede ser igual a la actual)");
            return false;
            }

            let correoElectronico=document.forms["altapublico"]["email"].value;
            if(correoElectronico.indexOf(' ')>-1){
            alert("No se admiten espacios en blanco");
            return false;
            }else if(correoElectronico.indexOf('@')<1){
            alert("Formato incorrecto. Pruebe este formato: <nombre>@<dominio>.<extension>");
            return false;
            }
        }
        </script>
    </head>

    <body>
        <!--Cabecera: logo, nombre, formulario y enlaces-->
        <header>
            <section class="logo">
               <a href="../index.php"> <img src = "../imagenes/logo2.png" alt = "Foto del logo del formulario"/> </a>
            </section>

            <section class="titulo">
                <h1>Museo Villalba</h1>
            </section>


        </header>

        <nav>
            <p>
                <uL>
                    <li><a class="link-sub" href="../index.php">Inicio</a> </li> 
                    <li><a class="link-sub" href="../exposiciones/fotografia.php">Fotografia</a> </li> 
                    <li><a class="link-sub" href="../exposiciones/pintura.php">Pintura</a> </li>
                    <li><a class="link-sub" href="../exposiciones/escultura.php">Escultura</a></li>
                </uL>
            </p>
         </nav>

        <section class="registro">
            <h1 class="rh1">Formulario para el alta del público</h1>

            <form name="altapublico" action="../exposiciones/registrarpublico.php" onsubmit="return validarFormulario()" method="post">

                <label for="nombre" name="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Introduzca su nombre" required>

                <br>

                <label for="apellidos" name="apellidos">Apellidos</label>
                <input type="text" name="apellidos" placeholder="Introduzca sus apellidos" required>

                <br>

                <label for="id_publico" name="id_publico">Nombre de usuario</label>
                <input type="text" name="id_publico" placeholder="Introduzca su nombre de usuario" required>
                <br>

                <label for="email" name="email">Email</label>
                <input type="email" name="email" placeholder="ejemplo@email.com" required>
                <br>

                <label for="pass" name="pass">Contraseña</label>
                <input type="password" name="pass" placeholder="Introduzca su contraseña" required>
                <br>

                <input class="center" type="submit" value="Enviar"/> 
            </form>
        </section>

        <footer class="pie"> 
            <p><a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a></p>
        </footer>

    </body>
</html>