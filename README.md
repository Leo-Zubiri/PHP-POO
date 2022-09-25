# **PHP**

## Creación de clases
```php
class Persona{

}
```

## Instanciar clase
```php
$persona = new Persona;
```

## Saber el tipo de dato de una variable
```php
var_dump($persona)  //object(Persona)#1 (0) { } 
```

## Atributos y funciones de clase
```php
class Persona{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

//Sintaxis flecha. Acceder a los atributos o funciones
$empleado -> nombre = "Leo";
$apellido -> apellido = "Zubiri";
```

## Constructores
```php
class Persona{
    public $nombre;
    public $apellido;

    public function __construct($nombre,$apellido)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
    }
}

$persona = new Persona("Hedson");
```