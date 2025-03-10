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
                <a href="../exposiciones/expo1.php"> <img src = "../imagenes/expo1/apolo-dafne.jpeg" alt = "Foto 1"/> </a>
                <p><i>Apolo persiguiendo a Dafne</i></p>
                <p><i>1636 - 1638. Óleo sobre lienzo, 193 x 207 cm</i></p>
                <p><i>THULDEN, THEODOOR VAN</i></p>
                <p>Ovidio cuenta la transformación de Dafne en árbol en el libro I de las Metamorfosis (452-552:) "(...) El primer amor 
                    de Febo fue Dafne, la hija de Peneo, un amor que no produjo el ignorante azar, sino la cruel ira de Cupido.
                     (...) Apolo se disponía a seguir hablando cuando huye en temerosa carrera la hija de Peneo y lo dejó con la palabra en la 
                     boca(...). Agotadas sus fuerzas, palideció ella y vencida por el esfuerzo de la rápida huída dijo mirando a las aguas del Peneo:
                      "¡Ayúdame, padre, si los ríos sois divinidades, echa a perder, cambiándola, esta figura con la que he gustado demasiado"! Apenas acabó su plegaria, 
                      un pesado sopor invade sus miembros: una delgada corteza ciñe su tierno pecho, sus cabellos crecen como hojas, sus brazos como ramas, sus pies
                       ha poco tan veloces se adhieren en raíces perezosas, en lugar del rostro está la copa: sólo la belleza queda en ella". Este episodio, tal y como
                        indica Ovidio, es consecuencia de la burla que Apolo le dedicó a Cupido después de que el primero hubiera vencido a la serpiente Pitón (P1861).</p>
            </section>
        </main>
        
        <footer class="pie"> 
            <p>
                <a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a>
            </p>
        </footer>
    </body>
</html>