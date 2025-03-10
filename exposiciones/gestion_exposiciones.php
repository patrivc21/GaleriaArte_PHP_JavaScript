<?php
  session_start();
  $Comisario="Comisario";
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

            <?php
                if(!empty($_SESSION['Publico'])){
                echo '<h1 id="u"> '.$_SESSION['Publico'].' (identificado como publico) </h1>
                <a class="enlace" href="../exposiciones/procesar_registro.php" id="u2"> Cerrar Sesión  </a>';

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
            <h1 class="rh1">Gestion de las exposiciones</h1>

            <form action="../exposiciones/altaexposicion.php" method="post">
                <fieldset>
                    <h3>Añadir exposicion</h3>
                    <input type="submit" id="b1" value="Añadir exposicion"/>
                </fieldset>
            </form>

            <br>

            <?php
            echo'
            <form class="exp" action="../exposiciones/eliminar_exposicion.php" method="post">
                <fieldset>
                <label for="nombre"><b> Eliminar exposicion: </b></label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre de la exposicion a eliminar:" /> <br>
                </fieldset>

                <input class="center" type="submit" value="Eliminar"/> 
            </form>
            ';
            ?>

            <br>

            <?php
            echo'
            <form class="exp" action="../exposiciones/modificar_exposicion.php" method="post">
            <h3>Modificar exposicion</h3>

                <fieldset>
                <label for="nombre"><b> Nombre de la exposicion que se quiere modificar: </b></label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre de la exposicion a modificar: " /> <br>
                </fieldset>

                <fieldset>
                <label for="autor"><b> Autor de la exposicion que se quiere modificar: </b></label>
                <input type="text" name="autor" id="autor" placeholder="Autor de la exposicion: " /> <br>
                </fieldset>

                <fieldset>
                <label for="tipo"><b> Tipo de exposicion que se quiere modificar: </b></label>
                <input type="text" name="tipo" id="tipo" placeholder="Tipo de la exposicion: " /> <br>
                </fieldset>

                <input class="center" type="submit" value="Enviar"/> 
            </form>
            ';
            ?>

        </section>

        <footer class="pie"> 
            <p><a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a></p>
        </footer>

    </body>
</html>