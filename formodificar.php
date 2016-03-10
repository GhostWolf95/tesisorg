<?php
  require_once 'config/proyecto.php';
  $proyectos = Proyecto::recuperarporId($_POST['forid']);
  if($proyectos){
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
      <script type="text/javascript">
      function validar1(){
        var nom, aut1, aut2, aut3, ase, not, lin;
        nom = document.forms["miformulario"]["fornombre"].value;
        aut1 = document.forms["miformulario"]["forautor1"].value;
        aut2 = document.forms["miformulario"]["forautor2"].value;
        aut3 = document.forms["miformulario"]["forautor3"].value;
        ase = document.forms["miformulario"]["forasesor"].value;
        not = document.forms["miformulario"]["fornota"].value;
        lin = document.forms["miformulario"]["forlinea"].value;
        mensaje = document.getElementById("mensaje");

        if (nom == null || nom.length == 0 || !isNaN(nom)) {
          mensaje.innerHTML = "Nombre no Valido ";
          return false;
        }else if (aut1 == null || aut1.length == 0 || !isNaN(aut1)) {
          mensaje.innerHTML = "Autor1 no Valido ";
          return false;
        }else if (aut1 == null || aut1.length == 0 || !isNaN(ase)) {
          mensaje.innerHTML = "Asesor no Valido ";
          return false;
        }else if (isNaN(not) || not<=0 || not > 5 ) {
            mensaje.innerHTML = "Valor de Nota no Valido ";
            return false;
        }else if (lin == null || lin.length == 0 || !isNaN(lin)) {
          mensaje.innerHTML = "Linea de Investigacion no Valida ";
          return false;
        }
      }
      </script>
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
          <div class="row"  id="cont">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <form role="form" action="config/actualizar.php" method="post" onsubmit="return validar1()">
              <div class="form-group">
                <label for="fornombre">Nombre del Proyecto</label>
                <input type="hidden" class="form-control" id="forid" name="forid"
                       placeholder="Introduzca el nombre del proyecto" value="<?php echo $_POST['forid'];?>">
                <input type="text" class="form-control" id="fornombre" name="fornombre"
                       placeholder="Introduzca el nombre del proyecto" value="<?php echo $proyectos->getNombrep();?>">
              </div>
              <div class="form-group">
                <label for="forautor1">Autor1</label>
                <input type="text" class="form-control" id="forautor1" name="forautor1"
                       placeholder="Introduzca el nombre del primer autor" value="<?php echo $proyectos->getAutor1();?>">
              </div>
              <div class="form-group">
                <label for="forautor2">Autor2</label>
                <input type="text" class="form-control" id="forautor2" name="forautor2"
                       placeholder="Introduzca el nombre del segundo autor" value="<?php echo $proyectos->getAutor2();?>">
              </div>
              <div class="form-group">
                <label for="forautor3">Autor3</label>
                <input type="text" class="form-control" id="forautor3" name="forautor3"
                       placeholder="Introduzca el nombre del tercer autor" value="<?php echo $proyectos->getAutor3();?>">
              </div>
              <div class="form-group">
                <label for="forasesor">Nombre del Asesor</label>
                <input type="text" class="form-control" id="forasesor" name="forasesor"
                       placeholder="Introduzca el nombre del Asesor" value="<?php echo $proyectos->getNombrea();?>">
              </div>
              <div class="form-group">
                <label for="fornota">Nota Recibida</label>
                <input type="text" class="form-control" id="fornota" name="fornota"
                       placeholder="Introduzca la nota recibida" value="<?php echo $proyectos->getNota();?>">
              </div>
              <div class="form-group">
                <label for="forlinea">Linea de Investigacion</label>
                <input type="text" class="form-control" id="forlinea" name="forlinea"
                       placeholder="Introduzca la linea de investigación" value="<?php echo $proyectos->getLinea();?>">
              </div>
              <button type="submit" id="btn" class="btn btn-success">Enviar</button>
            </form>
            <div id="mensaje"></div>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>


        <footer> Derechos reservados 2016. Alex Dario Salgado Montealegre -  Kelly Johanna Villareal Mestra </footer>
    </body>
    </html>
  <?php
  }else{
    echo "<script>alert('No existe un registro con la ID ingresada');</script>";
		echo "<script>location.href='buscarmodificar.html';</script>";// RUTA
  }
?>
