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

## Constructor property promotion
```php
class Persona {
    public function __construct(
        public $nombre,
        public $apellido
    ){}
}
```

## Tipado en PHP
Las variables pueden tomar distintos tipos de datos a menos que se especifique. PHP intenta realizar conversiones en caso de pasar un tipo de dato que no coincida.

```php
    public function __construct(string $nombre, string $apellido)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
    }
```

## Métodos en clases
```php
class Persona{
    public function nombrePersona(){
        echo "Imprimir el nombre"
    }

    public function EjecucionEnClase(){
        //Ejecutar dentro de la clase
        $this->nombrePersona();
    }
}

//Ejecutar desde una instancia
$persona = new Persona;
$persona -> nombrePersona();

```