<?php
	$id=$_GET["id"];
	echo "valor de id es: ",$id;
	include_once("DemoCollector.php");
	include_once("Demo.php");
	$DemoCollectorObj= new DemoCollector ();
	$ObjDemo = $DemoCollectorObj->showDemo($id);
	print_r($ObjDemo);
?>

<h2> edita obejro demo</h2>
<form action = "actualizar.php" method="post" >
<p>
id:  <input type="text" name="idDemo" value="<?php echo $ObjDemo->getIdDemo(); ?>"
readonly />
</p>

<p>
Nombre:  <input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>"
autofocus required />
</p>

<a href='index.php'>Cancelar</a>
<input type="submit" value="Guardar" />

</form>
