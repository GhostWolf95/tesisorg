<?php
 require_once 'proyecto.php';
 $fecha = getdate();
 $actual = $fecha['year'].'-'.$fecha['mon'].'-'.$fecha['mday'];
 if(($_POST['fornombre'] != "") && ($_POST['forautor1'] != "") && ($_POST['forasesor'] != "") && ($_POST['fornota'] != "") && ($_POST['forlinea'] != "")){
   $proyecto = new Proyecto($_POST['fornombre'], $_POST['forautor1'], $_POST['forautor2'], $_POST['forautor3'], $_POST['forasesor'], $actual, $_POST['fornota'], $_POST['forlinea']);
   $resul = $proyecto->guardar();
  if ($resul == NULL) {
    echo "<script>alert('Error en al guardar en la Base de Datos');</script>";
    echo "<script>location.href='../registrarproyecto.html';</script>";// RUTA

  }else{
    echo "<script>alert('Proyecto registrado con exito');</script>";
		echo "<script>location.href='../index.html';</script>";// RUTA
  }

 }else{
   echo "<script>alert('Error en los datos registrados');</script>";
   echo "<script>location.href='../registrarproyecto.html';</script>";// RUTA
 }
?>
