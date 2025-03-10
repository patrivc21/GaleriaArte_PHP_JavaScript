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

         <main>
            <aside class="izq">
                <section class="titular">
                    <p><b>Últimas noticias</b></p>
                </section>
                
                <section class="titular1">
                    <p><b>Exposiciones actuales</b></p>
                    <p> Actualmente se encuentran disponibles las siguientes exposiciones:
                        <ul>
                            <li><a class="link-t" href="../exposiciones/expo1.php">Arte y mito</a> </li>
                            <li><a class="link-t" href="../exposiciones/expo2.php">Goya y su pintura</a> </li> 
                            <li><a class="link-t" href="../exposiciones/expo3.php">Madrid al descubierto</a> </li> 
                            <li><a class="link-t" href="../exposiciones/expo4.php">Entre dioses y hombres</a> </li>  
                        </ul>
                    </p>
                </section>

                <section class="titular3">
                    <p><b>Visitas guiadas</b></p>
                    <p>Disfruta de nuestras visitas guiadas los lunes, viernes, sábados y domingos a partir de las 11:30 </p> 
                </section>
    
                <section class="titular2">
                    <p><b>Próximas exposiciones</b></p>
                    <p>
                        <ul>
                            <p>El marqués de Santillana</p>
                            <p>Picasso - El Greco</p>
                            <p>Paret</p>
                        </ul>
                    </p>
                </section>
    
                <section class="titular4">
                    <p><b>Información COVID-19</b></p>
                    <p>Para visitar el museo, se recomienda reservar las entradas previamente por internet, inclusive si se tiene acceso gratuito. Asimismo, se recomienda el uso de la mascarilla durante la visita.</p>
                </section>
            </aside>

            <section class="expos">

                <section class="ti">
                    <h1>Exposiciones de fotografia</h1>
                </section>

                <section class="articulo">
                    <a href="../exposiciones/expo3.php"> <img src = "../imagenes/expo3/expo3-portada.jpeg" alt = "Expo3"/> </a>
                    <p><b>Madrid al descubierto.</b></p>
                    <p><i>Autor:</i> Jose Javier Martin Espartosa</p>
                </section >

                </section >
            </section>
        </main>

        <footer class="pie"> 
            <p><a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a></p>
        </footer>

    </body>
</html>