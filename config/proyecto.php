<?php
 require_once 'Conexion.php';
 class Proyecto {
   private $nombrep;
   private $autor1;
   private $autor2;
   private $autor3;
   private $nombrea;
   private $fecha;
   private $nota;
   private $linea;
   const TABLA = 'trabajog';
   public function getNombrep() {
      return $this->nombrep;
   }
   public function getAutor1() {
      return $this->autor1;
   }
   public function getAutor2() {
      return $this->autor2;
   }
   public function getAutor3() {
      return $this->autor3;
   }
   public function getNombrea() {
      return $this->nombrea;
   }
   public function getFecha() {
      return $this->fecha;
   }
   public function getNota() {
      return $this->nota;
   }
   public function getLinea() {
      return $this->linea;
   }

   public function setNombrep($nombrep) {
      $this->nombrep = $nombrep;
   }
   public function setAutor1($autor1) {
      $this->autor1 = $autor1;
   }
   public function setAutor2($autor2) {
      $this->autor2 = $autor2;
   }
   public function setAutor3($autor3) {
      $this->autor3 = $autor3;
   }
   public function setNombrea($nombrea) {
      $this->nombrea = $nombrea;
   }
   public function setFecha($fecha) {
      $this->fecha = $fecha;
   }
   public function setNota($nota) {
      $this->nota = $nota;
   }
   public function setLinea($linea) {
      $this->linea = $linea;
   }
   public function __construct($nombrep, $autor1, $autor2, $autor3, $nombrea, $fecha, $nota, $linea) {
     $this->nombrep = $nombrep;
     $this->autor1 = $autor1;
     $this->autor2 = $autor2;
     $this->autor3 = $autor3;
     $this->nombrea = $nombrea;
     $this->fecha = $fecha;
     $this->nota = $nota;
     $this->linea = $linea;
   }
   public function guardar(){
      $conexion = new Conexion();
        //$fecha = getdate();
        //$actual = echo (getdate['year'].'-'.getdate['mon'].'-'.getdate['mday']);
         $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombrep, autor1, autor2, autor3, nombrea, fecha, nota, linea) VALUES(:nombrep, :autor1, :autor2, :autor3, :nombrea, NOW(), :nota, :linea)');
         $consulta->bindParam(':nombrep', $this->nombrep);
         $consulta->bindParam(':autor1', $this->autor1);
         $consulta->bindParam(':autor2', $this->autor2);
         $consulta->bindParam(':autor3', $this->autor3);
         $consulta->bindParam(':nombrea', $this->nombrea);
         //$consulta->bindParam(':fecha', $this->fecha);
         $consulta->bindParam(':nota', $this->nota);
         $consulta->bindParam(':linea', $this->linea);
         $consulta->execute();
      $conexion = null;
      return true;
   }

   public static function recuperarTodos(){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE estado=1');
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }

    public static function recuperarporId($id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');
       $consulta->bindParam(':id', $id);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['nombrep'], $registro['autor1'], $registro['autor2'], $registro['autor3'], $registro['nombrea'], $registro['fecha'], $registro['nota'], $registro['linea']);
       }else{
          return false;
       }
    }
    public static function actualizar($id, $nombrep, $autor1, $autor2, $autor3, $nombrea, $nota, $linea){
      $conexion = new Conexion();
      $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombrep = :nombrep, autor1 = :autor1, autor2 = :autor2, autor3 = :autor3, nombrea = :nombrea, nota = :nota, linea = :linea WHERE id = :id');
      $consulta->bindParam(':id', $id);
      $consulta->bindParam(':nombrep', $nombrep);
      $consulta->bindParam(':autor1', $autor1);
      $consulta->bindParam(':autor2', $autor2);
      $consulta->bindParam(':autor3', $autor3);
      $consulta->bindParam(':nombrea', $nombrea);
      //$consulta->bindParam(':fecha', $this->fecha);
      $consulta->bindParam(':nota', $nota);
      $consulta->bindParam(':linea', $linea);

        $consulta->execute();
     }
     public static function actualizarEstado($id, $estado){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET estado = :estado WHERE id = :id');
       $consulta->bindParam(':id', $id);
       $consulta->bindParam(':estado', $estado);

         $consulta->execute();
         if ($consulta) {
           return true;
         }else{
           return false;
         }
    }
 }
?>
