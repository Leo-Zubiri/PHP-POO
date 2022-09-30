<?php
include 'includes/header.php';

class Empleado{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre,$apellido,$departamento,$email,$codigo)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> departamento = $departamento;
        $this -> email = $email;
        $this -> codigo = $codigo;
    }

    public function ImprimirDatos(){
        echo $this->nombre." ".$this->apellido;
    }

    // Get - Obtener un valor
    public function getNombre(){
        return $this->nombre;
    }

    // Set - Modificar un valor
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
}

$empleado = new Empleado("Hedson","Zubiri","Desarrollo","correo","117");

//Sintaxis flecha. Acceder a los atributos o funciones
//$empleado -> nombre = "Leo";
//$empleado -> apellido = "Zubiri";

echo "<pre>";
var_dump($empleado);
echo "</pre> ";

$empleado->ImprimirDatos();

$empleado->setNombre(" Nuevo nombre");

echo $empleado->getNombre();

