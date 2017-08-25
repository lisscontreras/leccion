<?php
$nombre=$_POST["nombre"];
$tipo=$_POST["tipo"];
$fechaNacimiento=$_POST["fechaNacimiento"];

echo "edicion n proceso";
echo "<br><a href='salir.php'>salir</a>";

include_once("DemoCollector.php");
	$DemoCollectorObj= new DemoCollector ();
	$DemoCollectorObj ->insertDemo($nombre,$tipo,$fechaNacimiento);
	
?>
