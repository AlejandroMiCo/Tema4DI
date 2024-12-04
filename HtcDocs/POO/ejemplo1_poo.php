<?php

class Persona
{

    //Definimos la visualizacion de los atributos
    private $nombre;
    private $apellidos;
    private $edad;
    public static $saludo = "Hola que tal";
    const SALU2 = "Hola mundo";


    //definir el constructor de mi clase Persona
    public function __construct($nombre, $apellidos, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;

    }

    //definir los getters y setters de mi clase

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function mayorEdad()
    {
        return $this->edad >= 18;
    }

    public function mostrarDatos()
    {
        echo "El nombre de la persona es {$this->nombre} con apellidos {$this->apellidos} y de edad {$this->edad} y no envia el siguiente saludo ".self::$saludo;
    }
}


$persona1 = new Persona("Alejandro", "Miranda Comesaña", 24);

$persona1->mostrarDatos();

if ($persona1->mayorEdad()) {
    echo "La persona con nombre {$persona1->getNombre()} es mayor de edad";
}else{
    echo "La persona con nombre {$persona1->getNombre()} es menor de edad";

}
