<?php
 require_once 'proyecto.php';

 if(($_GET['forid']) != ""){
   $proyecto = new Proyecto("Alex", "autor", "autor", "autor", "asesor", "2016-03-02", 4.0, "investigacion");

  $proyecto->actualizarEstado($_GET['forid'], 0);
  if ($proyecto == true) {
    echo "<script>alert('Proyecto eliminado con exito');</script>";
    echo "<script>location.href='../index.html';</script>";// RUTA
  }else{
    echo "<script>alert('Error al eliminar Proyecto');</script>";
    echo "<script>location.href='../mostrarbusqueda.php';</script>";// RUTA
  }

 }else{
   echo "<script>alert('Error en el ID ingresado');</script>";
   echo "<script>location.href='../buscareliminar.html';</script>";// RUTA
 }
?>
