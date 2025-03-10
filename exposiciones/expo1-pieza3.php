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
                <a href="../exposiciones/expo1.php"> <img src = "../imagenes/expo1/rapto-europa.jpeg" alt = "Foto 5"/> </a>
                <p><i>El rapto de Europa</i></p>
                <p><i>1628 - 1629. Óleo sobre lienzo, 182,5 x 201,5 cm</i></p>
                <p><i>RUBENS, PEDRO PABLO</i></p>
                <p>Durante el segundo viaje de Rubens a España Pacheco cuenta como "(...) copió todas las obras de Tiziano que tiene el Rey: que son los dos baños:
                     la Europa (...)". Es probable que, debido al gran número de obras de Tiziano en la colección real española, no copiara todos los Tizianos pero 
                     si algunos. En la actualidad se han conservado Diana y Calisto (Lancashire, Knowsley), Venus y Cupido (Museo Thyssen, No INV. 350 (1957.5) y 
                     las del Museo del Prado, Adán y Eva (P1692) y ésta. La colección real española era una de las mejores en cuanto a obras de Tiziano no solamente
                      por el número sino también por la variedad temática. Sus obras colgaban por diferentes sitios reales y Rubens pudo contemplarlas durante su 
                      viaje a España, momento en el que haría las copias. De todas las obras realizadas por el maestro entre 1628-1629, tanto las traídas de Flandes
                       para Felipe IV, como las hechas en España para diferentes nobles y para la familia real, este conjunto es el más personal del artista durante
                        su estancia. El ejercicio artístico del flamenco al copiar a Tiziano le permitió acercarse más a la técnica del veneciano, al uso del color
                         y de las composiciones marcando un punto de inflexión en su producción que derivará en una técnica mucho más suelta.</p>
            </section>
        </main>
        
        <footer class="pie"> 
            <p>
                <a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a>
            </p>
        </footer>
    </body>
</html>