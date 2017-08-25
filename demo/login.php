<?php
	session_start();
?>
<?php
$_SESSION['misesion']= $_POST['usuario'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

echo " Usuario:  " .  $usuario . "    y clave es: ".  $clave;
echo "<br><a href='index.php'>Volver</a>";
echo "<br><a href='salir.php'>salir</a>";
?>

