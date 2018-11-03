<?php
// TABLA autores  C R E A R



$db = new SQLite3('biblioteca.sqlite');



// crear la tabla autores
$db->query( "DROP TABLE autores" );
$v  = " CREATE TABLE autores (          ";
$v .= "	ID_AUTORES INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL ,	";
$v .= " NOMBRE     		VARCHAR NOT NULL ,  	"; 
$v .= " APELLIDOS   	VARCHAR NOT NULL ,      "; 
$v .= " ALIAS  			VARCHAR ,           	"; 
$v .= " NACIONALIDAD  	VARCHAR ,            		";
$v .= " NACIMIENTO  	FECHA DATETIME ,          ";
$v .= " MUERTE  		FECHA DATETIME          ";  

$v .= " ) ";

$db->query( $v );

// inserción de registros 

$db->query( " INSERT INTO autores VALUES(NULL, 'Ernest', 'Cline', NULL, 'Estados Unidos', '1972-03-22',NULL)       	");
$db->query( " INSERT INTO autores VALUES(NULL, 'Philip K.', 'Dick', NULL, 'Estados Unidos', '1928-12-16', '1982-03-02')  ");
$db->query( " INSERT INTO autores VALUES(NULL, 'Lindsey', 'Davis', NULL, 'Reino Unido', '1949-08-21', NULL)       		");
$db->query( " INSERT INTO autores VALUES(NULL, 'Honoré', 'de Balzac', NULL, 'Francia', '1799-05-20', '1850-08-18')       ");
$db->query( " INSERT INTO autores VALUES(NULL, 'Jim', 'Grant', 'Lee Child', 'Reino Unido', '1954-10-24', NULL)       ");
                                                                                               
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/favicon.ico">
  <title>Formularios Uno</title>
  
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
            <li class="active"><a href="formularios.html">Formularios Uno</a></li>
            <li><a href="formularios_2.html">Formularios Dos</a></li>
            <li><a href="formularios_3.html">Formularios Tres</a></li>
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

    <h1>Formularios Uno</h1>
    <h2>Tabla Autores Creada</h2>

 <?php                                                                                                     
// ejecución de consulta de autores                                                                 
$result = $db->query( "SELECT * FROM autores" );                                              
                                                                                                     
// muestra de los resultados con un bucle
echo "<h4 class='text-center'>Tabla de Autores</h4>";
echo "<br>";
echo "<div class='table-responsive'>";
echo "<table class='table table-striped table-condensed'>";
echo "<tr><th>Nombre</th><th>Apellidos</th><th>Alias</th><th>Nacionalidad</th>";
echo "<th>Nacimiento</th><th>Fallecimiento</th></tr>";

while ($row = $result->fetchArray()) { 
echo "<tr><td>";
 echo $row["NOMBRE"]."</td><td>";
 echo $row["APELLIDOS"]."</td><td>";
 echo $row["ALIAS"]."</td><td>";
 echo $row["NACIONALIDAD"]."</td><td>";
 echo $row["NACIMIENTO"]."</td><td>";
 echo $row["MUERTE"];
 
echo "</td></tr>";
}
echo "</table>";
echo "</div>";

// se cierra la conexión a la base de datos 
$db->close();
?>

<button type="button" class="btn btn-default" OnClick="abre('formularios.html')">Volver</button>

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