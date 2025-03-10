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
                <a href="../exposiciones/expo2.php"> <img src = "../imagenes/expo2/el-afilador.jpeg" alt = "Foto 1"/> </a>
                <p><i>El afilador</i></p>
                <p><i> Óleo sobre lienzo, 	68 cm x 50,5 cm</i></p>
                <p><i>FRANCISCO DE GOYA</i></p>
                <p>Goya tuvo durante la Guerra de la Independencia una especial atención en la pintura de personajes populares para uso
                     o agrado propio. Las obras La aguadera y El afilador mostraban además de lo popular un cierto carácter bélico.
                    En la primera, la mujer aguadera puede tener el significado de la heroína femenina portadora de agua y
                    vino para los combatientes, hecho bastante normal en las contiendas de la época. El afilador se toma
                    como símbolo de resistencia, encargado de tener los cuchillos preparados, esta arma blanca fue muy 
                    utilizada por el pueblo llano contra la lucha de las tropas napoleónicas. La toma de un punto de 
                    vista bajo por parte de Goya para la realización de estas pinturas —como solía hacerlo en la 
                    representación de figuras religiosas—, simboliza la idealización de los personajes con un aspecto 
                    monumental que acrecienta la luz intensa con que están resaltados.
                    En esta obra Goya, es precursor de un cierto realismo que, un poco más tarde, fue realizado en Francia con 
                    la elaboración de una pintura que ensalzaba el trabajo de las clases populares. El personaje está 
                    representado en pleno trabajo, con el cuchillo, sobre la rueda, sujetado por ambas manos, la postura 
                    del cuerpo es un poco inclinada hacia adelante y la pierna derecha apoyada sobre la carretilla. El 
                    fondo es de un colorido neutro y totalmente liso, resalta el color blanco de la camisa abierta y 
                    remangada que deja al descubierto parte del pecho y los brazos hasta los codos, el resto de colorido 
                    son ocres y ligeras pinceladas de rojo en la rueda de afilar para dar la sensación de rotación. 
                    El afilador parece mirar al espectador como si hubiera sido sorprendido en pleno trabajo.</p>
            </section>
        </main>
        
        <footer class="pie"> 
            <p>
                <a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a>
            </p>
        </footer>
    </body>
</html>