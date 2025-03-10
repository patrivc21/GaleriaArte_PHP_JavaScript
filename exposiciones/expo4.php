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
            <section class="ti">
                <p><b>Entre dioses y hombres.</b></p>
            </section>

            <section class="informacion">
                <a href="../index.php"> <img src = "../imagenes/expo4/expo4-portada.jpeg" alt = "Foto 6"/></a> 
                <p> <i>Autor: varios. Sala 62.</i>
                    La exposición refleja el interés por la pintura de historia y el periodo 
                    por el que Pradilla sentía predilección, el de finales del siglo XV y principios del siglo XVI, en dos etapas de su producción: el inicial, consagrado por el éxito de su cuadro Doña Juana la Loca, y el final, entre 1906 y 1910, cuando el género había caído en desuso. </p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo4-pieza1.php"> <img src = "../imagenes/expo4/atenea.jpg" alt = "Foto 1"/> </a>
                <p><i>Atenea</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo4-pieza2.php"> <img src = "../imagenes/expo4/cabeza-afrodita.jpeg" alt = "Foto 5"/> </a>
                <p><i>Cabeza de afrodita</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo4-pieza3.php"> <img src = "../imagenes/expo4/demeter.jpg" alt = "Foto 3"/> </a>
                <p><i>Demeter</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo4-pieza4.php"> <img src = "../imagenes/expo4/diadumeno.jpg" alt = "Foto 6"/> </a>
                <p><i>Diadumeno</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo4-pieza5.php"> <img src = "../imagenes/expo4/dionisio.jpg" alt = "Foto 4"/> </a>
                <p><i>Dionisio</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo4-pieza6.php"> <img src = "../imagenes/expo4/venus de milo.jpg" alt = "Foto 2"/> </a>
                <p><i>Venus de Milo</i></p>
            </section>

        </main>
        
        <footer class="pie"> 
            <p>
                <a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a>
            </p>
        </footer>
    </body>
</html>