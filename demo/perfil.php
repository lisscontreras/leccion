<?php
	session_start();
		
?>
<!DOCTYPE html>
<html>
<head>
<title>perfil</title>
</head>
<body>
<header>
<nav>
<a href="inicio.html">Inicio</a>
<a href="contacto.html">Contacto</a> 
<a href="nosotros.html">Nosotros</a>
<a href="servicios.html">Servicios</a>  
</nav>
</header>


<?php

if (isset($_SESSION['misesion'])){
echo "<h1>Perfil</h1>";
echo "<p> hola user:(". $_SESSION['misesion'].")
		[<a href='salir.php'>Salir</a>]";

include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

?>
<br />
<a href = 'insertar.php'>insertar </a>"
<?php

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "  && " .$c->getNombre();
  echo "<a href = 'editar.php?id=".$c->getIdDemo()."' >Editar </a>";       
  echo "<a href = 'eliminar.php'>Eliminar </a>";                              
  echo "</div>"; 

}

}
else{
?>
