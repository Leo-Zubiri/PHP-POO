<?php

use Persona as GlobalPersona;

include 'includes/header.php';

abstract class Persona{
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


    // Método estático
    public static function metodEstatico(){
        echo "Hola mundo";
    }
}

Persona::metodEstatico();
