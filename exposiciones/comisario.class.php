<?php
    require_once ('datosObject.class.inc');
    require_once ('procesarformulario.php');
    require_once ('configuracion.inc');

    class Comisario extends DataObject {
        protected $datos = array(
        "nombre" => "",
        "apellidos" => "",
        "id_comisario" => "",
        "email" => "",
        "pass" => ""
        );

        public static function obtenerComisarios( $orden ) {
            $conexion = parent::conectar();

            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . "comisario" . "
            ORDER BY " . $orden;
            
            try {
                $st = $conexion->prepare( $sql );
                $st->execute();
                $comisarios = array();

                foreach ( $st->fetchAll() as $fila ) {
                    $comisarios[] = new Comisario( $fila );
                }
                
                $st = $conexion->query( "SELECT found_rows() AS filasTotales" );
                $fila = $st->fetch();
                
                parent::desconectar( $conexion );
                
                return $comisarios;
            } catch ( PDOException $e ) {
                parent::desconectar( $conexion );
                die( "Consulta fallida: " . $e->getMessage() );
            }
        }

        public static function obtenerComisario( $email ) {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM " . "comisario" . " WHERE email = :email";
            try {
                $st = $conexion->prepare( $sql );
                $st->bindValue( ":email", $email, PDO::PARAM_STR );
                $st->execute();
                $fila = $st->fetch();
                parent::desconectar( $conexion );
                if ( $fila ) return new Comisario( $fila );
            } catch ( PDOException $e ) {
            parent::desconectar( $conexion );
            die( "Consulta fallada: " . $e->getMessage() );
            }
        }

        public static function obtenerComisarioMal( $email ) {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM comisario WHERE email = $email";
            try {
                echo $sql;
                $st = $conexion->prepare( $sql );
                $st->execute();
                $fila = $st->fetch();
                parent::desconectar( $conexion );
                if ( $fila ) return new Comisario( $fila );
            } catch ( PDOException $e ) {
            parent::desconectar( $conexion );
            die( "Consulta fallada: " . $e->getMessage() );
            }
        }

        public static function insertarComisario( $nombre, $apellidos, $id_comisario, $email, $pass)
        {
            $conexion = parent::conectar();
            $sql = "INSERT INTO comisario VALUES " . " (:nombre, :apellidos, :id_comisario, :email, :pass)";
            try {
                $st = $conexion->prepare( $sql );
                $st->bindValue( ":nombre", $nombre, PDO::PARAM_STR );
                $st->bindValue( ":apellidos", $apellidos, PDO::PARAM_STR );
                $st->bindValue( ":id_comisario", $id_comisario, PDO::PARAM_STR );
                $st->bindValue( ":email", $email, PDO::PARAM_STR );
                $st->bindValue( ":pass", $pass, PDO::PARAM_STR );
                $st = $st->execute();
                parent::desconectar( $conexion );
                if ($st) return true;
            } catch ( PDOException $e ) {
            parent::desconectar( $conexion );
            echo"
                <script language='javascript'>
                    alert('Datos mal introducidos.')
                    window.location = '../exposiciones/altacomisario.php'
                </script>";
            }
        }

        public static function eliminarComisario( $email)
        {
            $conexion = parent::conectar();
            $sql = "DELETE FROM comisario WHERE email = $email";
            try {
                $st = $conexion->prepare( $sql );
                $st->bindValue( ":email", $email, PDO::PARAM_STR );
                $st = $st->execute();
                parent::desconectar( $conexion );
                if ($st) return true;
            } catch ( PDOException $e ) {
            parent::desconectar( $conexion );
            die( "Consulta fallada: " . $e->getMessage() );
            }
        }

        public static function validarLoginComisario($email, $pass) {
        $conexion=parent::conectar();
        $sql="SELECT * FROM comisario WHERE email='$email' AND pass='$pass'";

        try{
            $sentencia=$conexion->prepare($sql);

            $sentencia->bindValue(":email", $email, PDO::PARAM_STR);
            $sentencia->bindValue(":pass", hash('sha512', $pass), PDO::PARAM_STR);
            $sentencia->execute();

            $filas=$sentencia->rowCount();

            if($filas==1){ // Solo un usuario
            parent::desconectar($conexion);
            return true;
            }else{
            parent::desconectar($conexion);
            return false;
            }
        }catch(PDOException $e){
            parent::desconectar($conexion);
            die("Petición fallida: ".$e->getMessage());
        }
        }


        public static function modificarComisario($comisario, $valores){
            $conexion=parent::conectar();
            $campo=new Process_form();
            $email=$comisario;
            $datos=$valores;
    
            try{
                foreach($datos as $fila){
                $campo->campoCorrecto($fila);
            }
            }catch(Exception $e){
                echo "</br> Error, ".$e->getMessage()."</br>";
            }

            $consultaSQL="UPDATE comisario SET nombre='$datos[0]', apellidos='$datos[1]', id_comisario='$datos[2]', 
            email='$datos[3]', pass='$datos[4]' WHERE email='$comisario'";
    
            try{
                $conexion->query($consultaSQL);
                parent::desconectar($conexion);
                echo"
                <script language='javascript'>
                    alert('Comisario modificado')
                    window.location = '../exposiciones/index.php'
                </script>";
            }catch(PDOException $e){
                parent::desconectar($conexion);
                echo"
                <script language='javascript'>
                    alert('No se pudo modificar el comisario')
                    window.location = '../exposiciones/index.php'
                </script>";
            }
        }
    }
?> 