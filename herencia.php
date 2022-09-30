<?php
include 'includes/header.php';

class Persona{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre,$apellido,$email,$telefono){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> email = $email;
        $this -> telefono = $telefono;
    }
}

class Empleado extends Persona{
    protected $codigo;
    protected $departamento;

    public function __construct($nombre,$apellido,$email,$telefono,$codigo,$departamento){
        parent::__construct($nombre,$apellido,$email,$telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}