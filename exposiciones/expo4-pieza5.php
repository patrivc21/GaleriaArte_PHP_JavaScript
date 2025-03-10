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
                <a href="../exposiciones/expo4.php"> <img src = "../imagenes/expo4/dionisio.jpg" alt = "Foto 4"/> </a>
                <p><i>Dionisio</i></p>
                <p><i>Hacia 150. Mármol blanco, 168 x 68 cm</i></p>
                <p>Dioniso, de cuya naturaleza multiforme y vida aventurera en la tierra dan testimonio innumerables mitos y las más diversas representaciones, fue a menudo caracterizado desde el siglo IV a.C. como un dios eternamente joven y a la edad de un efebo. La estatua lo presenta con un cuerpo vigoroso pero al mismo tiempo suave y sin marcar el vello púbico, así como con la cabellera larga que cae en dos haces de rizos sobre el pecho y con una ancha trenza de rizos enroscados sobre la nuca. Levanta enfáticamente la cabeza y se apoya totalmente desnudo en un herma que lleva sobre la cabeza el manto abultado del joven. Mientras que su antebrazo izquierdo con la copa llena fue completado en época moderna, el antebrazo derecho y la mano con las uvas parecen ser antiguos. Está representado con su don, el vino, que según las palabras de Eurípides calma el pesar de los apurados mortales y los ofrece el sueño y el olvido de los males cotidianos. Por lo demás, lleva sus atributos habituales, una cinta en la frente y una corona de yedra. El dios no aparece como protagonista de una determinada situación mitológica, sino como imagen divina de un hermoso y ensimismado joven, benefactor de la humanidad por sus regalos, las uvas y el vino. La composición de la estatua se caracteriza por la línea en forma de S, típica de las esculturas de Praxíteles, que va desde la pierna derecha, de apoyo, hasta el hombro del brazo apoyado. La pierna izquierda pende cómodamente y está colocada ligeramente hacia atrás.</p>
            </section>
        </main>
        
        <footer class="pie"> 
            <p>
                <a class="link-sub" href="../exposiciones/contacto.php">Contacto</a> - <a class="link-sub" href="../como_se_hizo.pdf">Cómo se hizo</a>
            </p>
        </footer>
    </body>
</html>