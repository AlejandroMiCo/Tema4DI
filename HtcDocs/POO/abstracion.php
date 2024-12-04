<?php
//Vamos a trabajar con herencia. abstraccion de clases y polimorfismo

abstract class Figura
{
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function area();

    public function mostrarColor()
    {
        echo "El color de la figura es $this->color <br>";
    }
}


class Circulo extends Figura
{
    private $radio;

    public function __construct($color, $radio)
    {
        parent::__construct($color);

        $this->radio = $radio;
    }

    public function area()
    {
        return pi() * pow($this->radio, 2);
    }
}

class Cuadrado extends Figura
{
    private $lado;

    public function __construct($color, $lado)
    {
        parent::__construct($color);

        $this->lado = $lado;
    }

    public function area()
    {
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








?>