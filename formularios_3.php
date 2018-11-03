<?php
// formularios_3.php
// viene de formularios_3.html
// recibe las variables nombre, apellidos, alias, nacionalidad, nacimiento y deceso

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$alias = $_POST["alias"];
$nacionalidad = $_POST["nacionalidad"];
$nacimiento = $_POST["nacimiento"];
$deceso = $_POST["deceso"];

//echo "El autor es " . $nombre . " ";
//echo $apellidos . " , alias " .$alias. ", ";
//echo "nacido en " .$nacionalidad. " el " .$nacimiento. " ";
//echo "y fallecido el " .$deceso. " ";


$db = new SQLite3('biblioteca.sqlite');


?>
<!DOCTYPE htm
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/favicon.ico">
  <title>Formularios Tres</title>
  
  <!-- Bootstrap core CSS -->
  <!--<link href="//netdna.bootstrapcdn.com/bootstrap/2.1.0/css/bootstrap.min.css" rel="stylesheet">-->
  <!--<link href="//netdna.bootstrapcdn.com/bootstrap/2.1.0/css/bootstrap-thenme.min.css" rel="stylesheet">-->
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/literatura.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Carga la librería jquery antes de invocar a la función ready-->
  <script src="js/jquery-1.11.2.min.js"></script>

  <!-- Custom styles and javascript for this template -->
  <script src="js/literatura.js"></script>
 
  <style type="text/css"></style>

  <!-- La función ready que se ejecuta en esta página-->
  <script languaje="Javascript" type="text/Javascript"></script>

</head>

<body>
  <div class="con container">

   <div class="page-header">

      <div class="btn-group">
        <button type="button" class="btn btn-lg btn-default" onclick="abre('index.html')">Inicio</button>
        <button type="button" class="btn btn-lg btn-default" onclick="abre('rejilla.html')">Rejilla</button>

        <div class="btn-group">
          <button type="button" class="btn btn-lg btn-default dropdown-toggle" data-toggle="dropdown">Tipografía
           <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="tipografia.html">Tipografía</a></li>
            <li><a href="tipografia_2.html">Tipografía Dos</a></li>
            <li><a href="tipografia_3.html">Tipografía Tres</a></li>
            <li><a href="tipografia_4.html">Tipografía Cuatro</a></li>
            <li><a href="tipografia_5.html">Tipografía Cinco</a></li>
            <li><a href="tipografia_6.html">Tipografía Seis</a></li>
          </ul>
        </div>

        <button type="button" class="btn btn-lg btn-default" onclick="abre('imagenes.html')">Imágenes</button>
        <button type="button" class="btn btn-lg btn-default" onclick="abre('utilidades.html')">Utilidades</button>
        <button type="button" class="btn btn-lg btn-default" onclick="abre('botones.html')">Botones</button>

        <div class="btn-group">
          <button type="button" class="btn btn-lg btn-default dropdown-toggle active" data-toggle="dropdown">Formularios
           <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="formularios.html">Formularios Uno</a></li>
            <li><a href="formularios_2.html">Formularios Dos</a></li>
            <li class="active"><a href="formularios_3.html">Formularios Tres</a></li>
            <li><a href="formularios_4.html">Formularios Cuatro</a></li>
          </ul>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-lg btn-default dropdown-toggle" data-toggle="dropdown">Componentes
           <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="componentes.html">Componentes Uno</a></li>
            <li><a href="componentes_2.html">Componentes Dos</a></li>
            <li><a href="componentes_3.html">Componentes Tres</a></li>
            <li><a href="componentes_4.html">Componentes Cuatro</a></li>
            <li><a href="componentes_5.html">Componentes Cinco</a></li>
            <li><a href="componentes_6.html">Componentes Seis</a></li>
            <li><a href="componentes_7.html">Componentes Siete</a></li>
            <li><a href="componentes_8.html">Componentes Ocho</a></li>
          </ul>
        </div>

      </div>
      <h1>Vamos a ver que escribimos hoy</h1>
      <p class="lead">Voy a jugar un poco con la rejilla</p>
    </div>

    <h1>Formularios Tres</h1>
    
    <br><br>
    <h2>Tabla Autores</h2>
    <h3>Insertar Registro</h3>

    <form role="form" class="form-horizontal" action="formularios_31.php" method="post">
      <div class="form-group">
        <label for="nombre" class="col-xs-4 col-lg-2">Nombre</label>
        <input type="text" class="col-xs-offset-1 col-xs-6 col-lg-3" id="nombre" name="nombre" value="<?php echo $nombre ?>" readonly="readonly" >
      </div>

      <?php 

      if (empty($nombre)) {
        echo "<div class='red'>";
        echo "<h5>El campo nombre no puede estar vacío</h5>";
        echo "<h5>Vuelva atrás y rellene este campo. Gracias</h5>";
        echo "</div>";
      }

      ?>

      <div class="form-group">
        <label for="apellidos" class="col-xs-4 col-lg-2">Apellidos</label>
        <input type="text" class="col-xs-offset-1 col-xs-6 col-lg-3" id="apellidos" name="apellidos" value="<?php echo $apellidos ?>" readonly="readonly" >
      </div>

      <?php 

      if (empty($apellidos)) {
        echo "<div class='red'>";
        echo "<h5>El campo apellidos no puede estar vacío</h5>";
        echo "<h5>Vuelva atrás y rellene este campo. Gracias</h5>";
        echo "</div>";
      }

      ?>

      <div class="form-group">
        <label for="alias" class="col-xs-4 col-lg-2">Alias</label>
        <input type="text" class="col-xs-offset-1 col-xs-6 col-lg-3" id="alias" name="alias"
        value="<?php echo $alias ?>" readonly="readonly">
      </div>

      <div class="form-group">
        <label for="nacionalidad" class="col-xs-4 col-lg-2">Nacionalidad</label>
        <input type="text" class="col-xs-offset-1 col-xs-6 col-lg-3" id="nacionalidad" name="nacionalidad" value="<?php echo $nacionalidad ?>" readonly="readonly">
      </div>

      <div class="form-group">
        <label for="nacimiento" class="col-xs-4 col-lg-2">Fecha de Nacimiento</label>
        <input type="date" class="col-xs-offset-1 col-xs-6 col-lg-3" id="nacimiento" name="nacimiento" value="<?php echo $nacimiento ?>" readonly="readonly">
      </div>

      <div class="form-group">
        <label for="deceso" class="col-xs-4 col-lg-2">Fecha de fallecimieno</label>
        <input type="date" class="col-xs-offset-1 col-xs-6 col-lg-3" id="deceso" name="deceso" value="<?php echo $deceso ?>" readonly="readonly">
      </div>

      <button type="submit" class="btn btn-default">Enviar</button>
      <button type="button" class="btn btn-default" onClick="history.go(-1); return false;">Atrás</button>
    </form>

 
<?php 

// Se cierra la conexión a la base de datos

$db->close();
?>

    


 <br><br><br><br> <br><br><br><br> <br><br><br><br>

      


  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  
  <script src="js/bootstrap.js"></script>
  <script src="js/docs.min.js"></script>
    
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>