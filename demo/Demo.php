<?php

class Demo
{
    private $idDemo;
    private $nombre;
	private $tipo;
	private $fechaNacimiento;
	//private $foto;
	
    
     function __construct($idDemo, $nombre,$tipo,$fechaNacimiento) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
	$this->tipo = $tipo;
	$this->fechaNacimiento = $fechaNacimiento;
	
     }
    
     function setIdDemo($idDemo){
       $this->idDemo = $idDemo;
     } 
     function getIdDemo(){
       return $this->idDemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

	 function setTipo($tipo){
       $this->tipo = $tipo;
     } 

	function getTipo(){
       return $this->tipo;
     } 

	 function setFechaNacimiento($fechaNacimiento){
       $this->fechaNacimiento = $fechaNacimiento;
     } 

	function getFechaNacimiento(){
       return $this->fechaNacimiento;
     } 


	
}

?> 
