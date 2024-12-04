<?php

//ejemplo de uso de una interfaz php

interface Area{
    public function mostrarColor();
    public function area();
}

class Circulo implements Area{
    private $color;
    private $radio;

    public function __construct($color, $radio){
        $this->color = $color;
        $this->radio = $radio;
    }

    public function mostrarColor(){
        echo "El color del circulo es : {$this->color}";
    }

    
    public function area(){
        return pi()*pow($this->radio, 2);
    }
}

class Cuadrado implements Area{
    private $color;
    private $lado;

    public function __construct($color, $lado){
        $this->color = $color;
        $this->radio = $lado;
    }

    public function mostrarColor(){
        echo "El color del cuadrado es : {$this->color}";
    }

    
    public function area(){
        return pow($this->lado, 2);
    }
}


$circulo = new Circulo("rojo", 5);
$circulo->mostrarColor();
echo "El area del circulo es: ".$circulo->area();


echo "<br>";

$cuadrado = new Cuadrado("azul", 10);
$cuadrado->mostrarColor();

echo "El area del cuadrado es: ".$cuadrado->area();

