<?php

//Esto es un comentario 

/*
    Esto es un comentario multi-
    linea
    :D
*/

class Prueba
{
    const TEXTO2 = "esto es una constante de clase";
}
$valor_2 = 25;
$valor3 = 85;

function mostrar()
{
    $valor = 11;
    $valor_1 = 35;
    global $valor_2;
    $valor4 = 23.765;


    define("TEXTO1", "bienvenido a php");  //Esto es una constante o algo asi
    echo "esto es una variable numerica {$valor}<br>";
    print "<strong>esto es una constante con el valor " . TEXTO1 . "</strong><br>";
    echo "Es valor de la constante de clase es: " . Prueba::TEXTO2 . "<br>";
    echo "esto es una variable numerica {$valor_2}<br>";
    echo "esto es una variable numerica " . $GLOBALS['valor3'] . "<br>";
    printf("El valor del número decimal es: %.1f <br>", $valor4);
}

function mostrar2($cadena)
{
    for ($i = 0; $i < strlen($cadena); $i++) {
        echo $cadena[$i] . "<br>";
    }

}

function edad($edad)
{
    $mayor = false;
    if ($edad >= 18) {
        $mayor = true;
    }
    return $mayor;
}

function dias_semana($dia)
{

    switch ($dia) {
        case 1:
            echo "Es lunes";
            break;
        case 2:
            echo "Es martes";
            break;
        case 3:
            echo "Es miercoles";
            break;
        case 4:
            echo "Es jueves";
            break;
        case 5:
            echo "Es viernes";
            break;
        case 6:
            echo "Es sabado";
            break;
        case 7:
            echo "Es domingo";
            break;
        default:
            echo "Valor no valido";
            break;
    }
}
