<?php
 require_once 'proyecto.php';
 $fecha = getdate();
 $actual = $fecha['year'].'-'.$fecha['mon'].'-'.$fecha['mday'];
 if(($_POST['fornombre'] != "") && ($_POST['forautor1'] != "") && ($_POST['forasesor'] != "") && ($_POST['fornota'] != "") && ($_POST['forlinea'] != "") && ($_POST['forid'] != "")){
   $proyecto = new Proyecto($_POST['fornombre'], $_POST['forautor1'], $_POST['forautor2'], $_POST['forautor3'], $_POST['forasesor'], $actual, $_POST['fornota'], $_POST['forlinea']);
  $proyecto->actualizar($_POST['forid'], $_POST['fornombre'], $_POST['forautor1'], $_POST['forautor2'], $_POST['forautor3'], $_POST['forasesor'], $_POST['fornota'], $_POST['forlinea']);

  echo "<script>alert('Datos Modificados con exito');</script>";
  echo "<script>location.href='../buscarmodificar.html';</script>";// RUTA

 }else{
   echo "<script>alert('Error en los datos enviados');</script>";
   echo "<script>location.href='../formodificar.php';</script>";// RUTA
 }
?>
