<?php
 require_once 'config/proyecto.php';
 $proyectos = Proyecto::busqueda($_POST['forid'], $_POST['fornombre'], $_POST['forautor'], $_POST['forasesor'], $_POST['fornota'], $_POST['forlinea']);

  echo $_POST['fornombre']." ".$_POST['forautor']." ".$_POST['forasesor']." ".$_POST['fornota']." ".$_POST['forlinea'];
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
          <th>autores</th>
          <th>asesor</th>
          <th>Fecha de ingreso</th>
          <th>Nota</th>
          <th>Linea de Investigación</th>
        </thead>
        <tbody>
          <?php foreach ($proyectos as $item): ?>
            <tr><td><?php echo $item['id'];?></td><td><?php echo $item['nombrep'];?></td><td><?php echo $item['autor1']." ".$item['autor2']." ".$item['autor3'];?></td>
              <td><?php echo $item['nombrea'];?></td><td><?php echo $item['fecha'];?></td><td><?php echo $item['nota'];?></td>
          <td><?php echo $item['linea'];?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>


    <footer> Derechos reservados 2016. Alex Dario Salgado Montealegre -  Kelly Johanna Villareal Mestra </footer>
</body>
</html>
