<?php
  require_once('datosObject.class.inc');
  require_once('procesarformulario.php');

  class Exposicion extends DataObject{
    protected $datos=array(
      "nombre" => "",
      "autor" => "",
      "tipo" => ""
    );

    /*
    * Función para obtener las secciones de la web
    */
    public static function obtenerExposiciones($exposiciones){
      $consulta="SELECT * FROM exposiciones";
      $conexion=parent::conectar();
      $resultados=$conexion->query($consulta);

      foreach($resultados as $fila){
        echo "nombre: ".$fila["nombre"]." "." autor: ".$fila["autor"]." tipo: ".$fila["tipo"]."</br>";
      }

      parent::desconectar($conexion);
    }

    /*
    * Función para obtener una fila de la tabla 'Secciones'
    */
    public function obtenerExposicion($nombre){
      $conexion=parent::conectar();
      $sql="SELECT * FROM exposiciones WHERE nombre='$nombre'";

      try{
        $st=$conexion->prepare($sql);
        $st->bindValue( ":nombre", $nombre, PDO::PARAM_STR );
        $st->execute();
        $fila=$st->fetch();
        parent::desconectar($conexion);

        if($fila){
          return new Seccion($fila);
        }
      }catch(PDOException $e){
        parent::desconectar($conexion);
        die("Error de consulta: ".$e->getMessage()."</br>");
      }
    }

    /*
    * Función para insertar una sección en la tabla 'exposiciones'
    */
    public static function insertarExposicion($nombre, $autor, $tipo){
      $conexion = parent::conectar();
            $sql = "INSERT INTO exposiciones VALUES (:nombre, :autor, :tipo)";
            try {
                $st = $conexion->prepare( $sql );
                $st->bindValue( ":nombre", $nombre, PDO::PARAM_STR );
                $st->bindValue( ":autor", $autor, PDO::PARAM_STR );
                $st->bindValue( ":tipo", $tipo, PDO::PARAM_STR );
                $st = $st->execute();
                parent::desconectar( $conexion );
                if ($st) return true;
            } catch ( PDOException $e ) {
            parent::desconectar( $conexion );
            echo"
                <script language='javascript'>
                    alert('Error: datos mal introducidos, no se pudo insertar la nueva exposicion')
                    window.location = '../index.php'
                </script>";
            
            }
    }

    /*
    * Función para modificar una sección de la tabla 'exposiciones'
    */
    public static function modificarExposicion($nom, $aut, $tip){
      $campo=new Process_form();
      $nombre=$nom;
      $autor=$aut;
      $tipo=$tip;
      $conexion=parent::conectar();

      try{
        $campo->campoCorrecto($nombre);
      }catch(Exception $e){
        echo "</br> Error, ".$e->getMessage()."</br>";
      }

      $consultaSQL="UPDATE exposiciones SET nombre='$nombre', autor='$autor', tipo='$tipo' WHERE nombre='$nombre'";

      try{
        $conexion->query($consultaSQL);
        parent::desconectar($conexion);
      }catch(PDOException $e){
        parent::desconectar($conexion);
        echo "Error de consulta: ".$e->getMessage()."</br>";
      }
    }

    /*
    * Función para eliminar una sección de la tabla 'exposiciones'
    */
    public static function eliminarExposicion($nom){
      $campo=new Process_form();
      $nombreS=$nom;
      $conexion=parent::conectar();

      try{
        $campo->campoCorrecto($nombreS);
      }catch(Exception $e){
        echo "</br> Error, ".$e->getMessage()."</br>";
      }

      $consultaSQL="DELETE FROM exposiciones WHERE nombre='$nombreS'";

      try{
        $conexion->query($consultaSQL);
        parent::desconectar($conexion);
      }catch(PDOException $e){
        parent::desconectar($conexion);
        echo "Error de consulta: ".$e->getMessage()."</br>";
      }
    }


    public static function getAllSections() {
      $conexion=parent::conectar();

      $sql = "SELECT * FROM exposiciones ";
      $st = $conexion->prepare($sql);
  
      try {
          $st->execute();
          $results = array();
          $results = $st->fetchAll() ;
          parent::desconectar($conexion);

          if ($results) 
          return $results;   

      } catch (PDOException $e) {
        parent::desconectar($conexion);
        echo "Error de consulta: ".$e->getMessage()."</br>";
      }
  }


  };
?>