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
        <header class="cexpo1">
            <section class="logo">
               <a href="../index.php"> <img src = "../imagenes/logo2.png" alt = "Foto del logo del formulario"/> </a>
            </section>

            <section class="titulo">
                <h1>Museo Villalba</h1>
            </section>

            <section class="formulario">
            <?php
                if(!empty($_SESSION['Publico'])){
                echo '<h1 id="u"> '.$_SESSION['Publico'].' (identificado como publico) </h1>
                <a class="enlace" href="../exposiciones/procesar_registro.php" id="u2"> Cerrar Sesión  </a>
                <a class="enlace" href="../exposiciones/modificar_publico.php" id="u3"> Editar perfil </a>';

                }
                else if(!empty($_SESSION['Comisario'])){
                    echo '<h1 id="u"> '.$_SESSION['Comisario'].' (identificado como comisario) </h1>';
                    echo '<a class="enlace" href="../exposiciones/procesar_registro.php" id="u2"> Cerrar Sesión </a>';
                    echo '<a class="enlace" href="../exposiciones/gestion_exposiciones.php" id="u3"> Gestion exposiciones </a>';
                    echo '<a class="enlace" href="../exposiciones/modificar_comisario.php" id="u3"> Editar perfil </a>';
                }else{
                    echo '<section class="iniciarsesion">
                    <form action="../exposiciones/comprobar_registro.php" method="post">
                
                        <label for="email" name="email"><b>Email</b></label>
                        <input type="email" name="email">
                
                        <br>
                        <br>

                        <label for="pass" name="pass"><b>Contraseña</b></label>
                        <input type="password" name="pass">
        
                        <br><br>
                
                            <input type="submit" id="button1" value="Iniciar sesion" />
                            <input type="reset" id="button2" value="Reiniciar formulario" />
                
                    </form>
                </section>';
                }
            ?>
                <p><a class="link-h" href="../exposiciones/altapublico.php">Registro de usuarios</a>  
                <a class="link-h" href="../exposiciones/altacomisario.php">Registro de comisarios</a> </p>
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

        <main class="expo1">
            <section class="piezas">
                <a href="../exposiciones/expo1.php"> <img src = "../imagenes/expo1/vulcano.jpeg" alt = "Foto 6"/> </a>
                <p><i>Vulcano y el Fuego</i></p>
                <p><i>Siglo XVII. Óleo sobre lienzo, 140 x 126 cm</i></p>
                <p><i>RUBENS, PEDRO PABLO</i></p>
                <p>Sentado con la tea en la mano izquierda. Delante hay piezas de armería. A la derecha, un cañón con dos servidores, y una fragua en la que trabajan varios obreros.
                    En 1772 estaba en el Buen Retiro, procedente de La Zarzuela, donde se cita en 1700. Allí formaba parte de una Serie de los Cuatro Elementos a la que también pertenecía la obra P1716. Estuvo en la Sala Reservada del Museo hasta 1838.
                    Se encuentra depositado en el Museo de Bellas Artes de Asturias (Oviedo).</p>
            </section>
        </main>
        
        <footer class="pie"> 
            <p>
                <a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a>
            </p>
        </footer>
    </body>
</html>