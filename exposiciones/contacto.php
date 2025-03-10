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
                <ul>
                    <li><a class="link-sub" href="../index.php">Página de inicio</a> </li> 
                </ul>
            </p>
         </nav>

        <main class="contacto">
            <section class="informacion">
                <h1>Contacto del creador de la página</h1>

                <p>Sitio web creado para la primera practica evaluable de la asignatura <i>Programación web</i></p>

                <p><b>Nombre del creador de la página</b></p>
                <p>Patricia Villalba Crucelaegui</p>

                <p><b>Correo electrónico de contacto</b></p>
                <a href="mailto:patrivillalba@correo.ugr.es">patrivillalba@correo.ugr.es</a>

                <p><b>Teléfono de contacto</b></p>
                <a href="tel:611420306">611420306</a>

                <p><b>DNI</b></p>
                <p>77392301S</p>

                <p><b>Titulación</b></p>
                <p>Ingeniería Informática</p>

                <p><b>Ubicación</b></p>
                <address>C. Periodista Daniel Saucedo Aranda, s/n, 18014 Granada</address>
                
            </section>
        </main>

        <footer class="pie"> 
            <p>
                <a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a>
            </p>
        </footer>

        </body>
</html>