<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{

function showDemos() {
$rows = self::$db->getRows("SELECT * FROM demo ");
echo "linea 1";
$arrayDemo= array();
foreach ($rows as $c){
//aqui tienen que ir los campos iguales al que tengo en mi base de datos
$aux = new Demo($c{'iddemo'},$c{'nombre'},$c{'tipo'},$c {'fechaNacimiento'},$c {'foto'} );
array_push($arrayDemo, $aux);
}
return $arrayDemo;
}

function showDemo($id) {
$row = self::$db->getRows("SELECT * FROM demo where id_demo= ?", array("{$id}"));
$ObjDemo = new Demo($row[0]{'iddemo'},$row[0]{'nombre'},$row[0]{'tipo'},$row[0] {'fechaNacimiento'},$row[0] {'foto'});
return $ObjDemo;
}

function updateDemo($id, $nombre,$tipo,$fecha) {
$insertRow = self::$db->updateRow
("Update public.demo SET nombre = ? tipo = ? fechaNacimiento = ? WHERE id_demo = ?", array("{$nombre}", $id,"{$tipo}","{$fecha}"));

}

function insertDemo($nombre) {
$insertRow = self::$db->insertRow ("Insert INTO public.demo (nombre) VALUES (?)", array("{$nombre}"));

}

function deleteDemo($id) {
$deleteRow = self::$db->deleteRow
("DELETE * FROM public.demo WHERE iddemo = ?", array($id));

}

}
?>

