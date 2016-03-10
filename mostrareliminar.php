<?php
 require_once 'config/proyecto.php';
 $proyectos = Proyecto::recuperarporId($_POST['forid']);
 if ($proyectos) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <header >
		<div class="row">
  			<div class="col-md-1">
  				<img class="logo" src="images/logo.png">
				<h3>Tesis.org</h3>
  			</div>
  			<div class="col-md-11">
  				<nav class="container">
					<div id="opciones">
              			<ul class="nav navbar-nav">
                      <li><a href="index.html">Inicio</a></li>
                			<li><a href="registrarproyecto.html">Registrar Proyectos</a></li>
                			<li><a href="listarproyectos.php">Listar Proyecto</a></li>
                			<li><a href="buscarmodificar.html">Modificar Proyecto</a></li>
                			<li><a href="buscareliminar.html">Eliminar Proyecto</a></li>
              			</ul>
            		</div>
        		</nav>
  			</div>
		</div>
    </header>
    <div class="container">
      <table class="table table-bordered table-hover" id="tablalist">
        <thead>
          <th>ID</th>
          <th>Nombre</th>
          <th>Fecha de ingreso</th>
          <th>autores</th>
          <th>asesor</th>
          <th>Nota</th>
          <th>Linea de Investigación</th>
        </thead>
        <tbody>
            <tr><td><?php echo $_POST['forid'];?></td><td><?php echo $proyectos->getNombrep();?></td><td><?php echo $proyectos->getFecha();?></td>
              <td><?php echo $proyectos->getAutor1();echo $proyectos->getAutor2();echo $proyectos->getAutor3();?></td><td><?php echo $proyectos->getNombrea();?></td>
              <td><?php echo $proyectos->getNota();?></td>
          <td><?php echo $proyectos->getLinea();?></td></tr>
        </tbody>
      </table>
      <a href='config/eliminar.php? forid= <?php echo $_POST['forid']; ?>'> <button type="button" name="button" id="btn3" class="btn btn-success">Eliminar</button></a>
    </div>
    <?php
  }else{
    echo "<script>alert('No Existe un registro con el ID ingresado');</script>";
		echo "<script>location.href='buscareliminar.html';</script>";// RUTA
  }
    ?>

    <footer id="foot3"> Derechos reservados 2016. Alex Dario Salgado Montealegre -  Kelly Johanna Villareal Mestra </footer>
</body>
</html>
