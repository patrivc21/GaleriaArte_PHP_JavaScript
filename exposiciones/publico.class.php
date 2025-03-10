<?php
    require_once('datosObject.class.inc');
    require_once('procesarformulario.php');
    require_once('configuracion.inc');

    class Publico extends DataObject {
        protected $datos = array(
            "nombre" => "",
            "apellidos" => "",
            "id_publico" => "",
            "email" => "",
            "pass" => ""
        );

        public static function obtenerPublicos( $orden ) {
            $conexion = parent::conectar();

            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . "publico" . "
            ORDER BY " . $orden;
            
            try {
                $st = $conexion->prepare( $sql );
                $st->execute();
                $publicos = array();

                foreach ( $st->fetchAll() as $fila ) {
                    $publicos[] = new Publico( $fila );
                }
                
                $st = $conexion->query( "SELECT found_rows() AS filasTotales" );
                $fila = $st->fetch();
                
                parent::desconectar( $conexion );
                
                return $publicos;
            } catch ( PDOException $e ) {
                parent::desconectar( $conexion );
                die( "Consulta fallida: " . $e->getMessage() );
            }
        }
        
        public static function obtenerPublico( $email ) {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM " . "publico" . " WHERE email = :email";
            try {
                $st = $conexion->prepare( $sql );
                $st->bindValue( ":email", $email, PDO::PARAM_STR );
                $st->execute();
                $fila = $st->fetch();
                parent::desconectar( $conexion );
                if ( $fila ) return new Publico( $fila );
            } catch ( PDOException $e ) {
            parent::desconectar( $conexion );
            die( "Consulta fallada: " . $e->getMessage() );
            }
        }
        
        public static function obtenerPublicoMal( $email ) {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM publico WHERE email = $email";
            try {
                echo $sql;
                $st = $conexion->prepare( $sql );
                $st->execute();
                $fila = $st->fetch();
                parent::desconectar( $conexion );
                if ( $fila ) return new Publico( $fila );
            } catch ( PDOException $e ) {
            parent::desconectar( $conexion );
            die( "Consulta fallada: " . $e->getMessage() );
            }
        }

        public static function insertarPublico( $nombre, $apellidos, $id_publico, $email, $pass )
        {
            $conexion = parent::conectar();
            $sql = "INSERT INTO publico VALUES (:nombre, :apellidos, :id_publico,:email, :pass)";
            try {
                $st = $conexion->prepare( $sql );
                $st->bindValue( ":nombre", $nombre, PDO::PARAM_STR );
                $st->bindValue( ":apellidos", $apellidos, PDO::PARAM_STR );
                $st->bindValue( ":id_publico", $id_publico, PDO::PARAM_STR );
                $st->bindValue( ":email", $email, PDO::PARAM_STR );
                $st->bindValue( ":pass", $pass, PDO::PARAM_STR );
                $st = $st->execute();
                parent::desconectar( $conexion );
                if ($st) return true;
            } catch ( PDOException $e ) {
            parent::desconectar( $conexion );
            echo"
                <script language='javascript'>
                    alert('Error: datos mal introducidos')
                    window.location = '../exposiciones/altapublico.php'
                </script>";
            }
        }


    public static function validarLoginPublico($email, $pass) {
      $conexion=parent::conectar();
      $sql="SELECT * FROM publico WHERE email='$email' AND pass='$pass'";

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

    public static function modificarUsuario($usuario, $valores){
        $conexion=parent::conectar();
        $campo=new Process_form();
        $user=$usuario;
        $datos=$valores;
  
        try{
          foreach($datos as $fila){
            $campo->campoCorrecto($fila);
          }
        }catch(Exception $e){
          echo "</br> Error, ".$e->getMessage()."</br>";
        }
  
        $consultaSQL="UPDATE publico SET nombre='$datos[0]', apellidos='$datos[1]', id_publico='$datos[2]', 
        email='$datos[3]', pass='$datos[4]' WHERE email='$usuario'";
  
        try{
          $conexion->query($consultaSQL);
          parent::desconectar($conexion);
          echo"
          <script language='javascript'>
                alert('Publico modificado')
                window.location = '../exposiciones/index.php'
            </script>";
        }catch(PDOException $e){
          parent::desconectar($conexion);
          echo"
          <script language='javascript'>
                alert('No se pudo modificar el usuario')
                window.location = '../exposiciones/index.php'
            </script>";
        }
      }


    }
?> 