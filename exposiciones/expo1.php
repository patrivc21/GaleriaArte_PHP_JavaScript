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
                <h1>Arte y mito.</h1>
            </section>

            <section class="informacion">
                <a href="../index.php"> <img src = "../imagenes/expo1/expo1-portada.jpeg" alt = "Foto 6"/></a>
                <p><i>Autor: Varios. Óleo sobre lienzo. 1636-1638. Sala 56.</i> 
                Se trata de una propuesta diacrónica que ofrece simultáneamente diferentes representaciones de dioses o distintas 
                    interpretaciones de un episodio mitológico para apreciar la riqueza iconográfica, geográfica y cronológica</p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo1-pieza1.php"> <img src = "../imagenes/expo1/vulcano.jpeg" alt = "Foto 6"/> </a>
                <p><i>Vulcano y el Fuego</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo1-pieza2.php"> <img src = "../imagenes/expo1/apolo-dafne.jpeg" alt = "Foto 1"/> </a>
                <p><i>Apolo persiguiendo a Dafne</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo1-pieza3.html"> <img src = "../imagenes/expo1/rapto-europa.jpeg" alt = "Foto 5"/> </a>
                <p><i>El rapto de Europa</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo1-pieza4.php"> <img src = "../imagenes/expo1/narciso.jpeg" alt = "Foto 4"/> </a>
                <p><i>Narciso</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo1-pieza5.php"> <img src = "../imagenes/expo1/caida-faeton.jpeg" alt = "Foto 2"/> </a>
                <p><i>La caída de Faetón</i></p>
            </section>

            <section class="imagenes">
                <a href="../exposiciones/expo1-pieza6.php"> <img src = "../imagenes/expo1/incendio-troya.jpeg" alt = "Foto 3"/> </a>
                <p><i>El incendio de Troya</i></p>
            </section>
        </main>
        
        <footer class="pie"> 
            <p>
                <a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a>
            </p>
        </footer>
    </body>
</html>