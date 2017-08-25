<?php
$tipo=$_POST["tipo"];
$fechaNacimiento=$_POST["fechaNacimiento"];
$nombre=$_POST["nombre"];
$iddemo=$_POST["idDemo"];



echo "edicion en proceso";


include_once("DemoCollector.php");
	$DemoCollectorObj= new DemoCollector ();
	$DemoCollectorObj ->updateDemo($iddemo,$nombre,$tipo,$fechaNacimiento);
	echo "id : ".$iddemo."  actualizado a " .$nombre."</br>";

?>
