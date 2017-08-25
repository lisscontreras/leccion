<?php
$tipo=$_POST["tipo"];
$fechaNacimiento=$_POST["fechaNacimiento"];
$nombre=$_POST["nombre"];
$iddemo=$_POST["iddemo"];


echo "eliminando registro";


include_once("DemoCollector.php");
	$DemoCollectorObj= new DemoCollector ();
	$DemoCollectorObj ->deleteDemo($iddemo,$nombre,$tipo,$fechaNacimiento);
	echo "registro eliminado";

?>
