<?php

function numAleatorio()
{
    echo rand(1, 100);
}

function sumaDeNumeros($num1, $num2)
{
    return $num1 + $num2;
}

function calcAreaCirculo($radio)
{
    return pi() * $radio * $radio;
}

function randomAText()
{
    switch (rand(1, 5)) {
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
        case 4:
            echo "cuatro";
            break;
        default:
            echo "cinco";
            break;
    }
}

function esMultiploDe($num, $multiplo)
{
    if ($num % $multiplo == 0) {
        echo "Es multiplo";
    } else {
        echo "No es multiplo";
    }
}

function precioEntrada($edad)
{
    switch ($edad) {
        case $edad < 9:
            echo "Es gratis";
            break;
        case $edad > 9 && $edad <= 16:
            echo "Cuesta 5€";
            break;
        case $edad > 17 && $edad <= 25:
            echo "Cuesta 8€";
            break;
        case $edad > 26 && $edad <= 55:
            echo "Cuesta 10€";
            break;
        case $edad > 56 && $edad <= 65:
            echo "Cuesta 5€";
            break;
        case $edad > 65:
            echo "Es gratis";
            break;
    }
}


function precioEntradaMascota($animal)
{
    switch ($animal) {
        case "huron" || "gato":
            echo "Pagara 1€";
            break;
        case "loro":
            echo "Pagara 2€";
            break;
        case "perro":
            echo "Pagara 1.5€";
            break;
        default:
            echo "Mascota no permitida";
            break;
    }
}


function calculoBingo($edad)
{
    if ($edad < 75 || $edad > 80) {
        echo "Usted no puede jugar";
    } else {
        return $edad * 0.05;
    }
}

function esPar($num)
{
    if ($num % 2 == 0) {
        echo "Es par";
    } else {
        echo "Es impar";
    }
}


function fibonacci()
{
    $fin = 10000;
    $nuevoElemento = 1;
    $elementoAnterior = 0;
    $aux = 0;

    while ($nuevoElemento < $fin) {
        $aux = $nuevoElemento;
        $nuevoElemento += $elementoAnterior;
        if ($nuevoElemento<10000) {
            echo $nuevoElemento . "<br>";
        }
        $elementoAnterior = $aux;
    }
}

function tablaDeMultiplicar()
{
    echo "<table style=\"border: 1px solid black\">";
    echo "<td style=\"border: 1px solid black\"></td>";
    for ($k = 1; $k < 11; $k++) {
        echo "<td style=\"border: 1px solid black\"><b> " . $k . "</td>";
    }
    for ($i = 1; $i < 11; $i++) {
        echo "<tr>";
        echo "<td style=\"border: 1px solid black\"><b>" . $i . "</td>";
        for ($j = 1; $j < 11; $j++) {

            echo "<td style=\"border: 1px solid black\">" . $j * $i . "</td>";
        }
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";
}

function factorial($num)
{
    $factorial =1;
    do {
        $factorial *= $num;
        $num--;
    } while ($num >1);

    echo $factorial;
}


//Tema 2

function cambioCadena(){
    $cad = "bord";
    $cad2 = "lmir";

    $res = str_replace($cad, $cad2, "abordaje");
    echo $res;
}

function contarLetra($cad, $letra)
{
    $cont = 0;

    for ($i=0; $i < strlen($cad); $i++) { 
        if ($cad[$i] == $letra) {
            $cont++;
        }
        echo $cont;
    }
}

function validarCadena($cad)
{
    if (strlen($cad) < 7 || strlen($cad) > 12 ) {
        return false;
    }

    return !is_numeric($cad);
}

function numerosPar()
{
    for ($i=0; $i < 20; $i++) { 
        if ($i %2 == 0) {
            $array[] = $i;
            echo $array[$i/2]."<br>";
        }
    }
}

function soloMesesPorM(){
    $meses=array('enero','febrero','marzo','abril', 'mayo','junio', 'julio','agosto',
'septiembre', 'octubre', 'noviemnbre', 'diciembre');
$cont =0;

for ($i=0; $i < count($meses); $i++) { 
    if ($meses[$i][0]== 'm') {
        $nuevoArray[] = $meses[$i];

        echo $nuevoArray[$cont++].'<br>';
    }
}
}

function borrarAzul()
{
    $colores = array('rojo', 'verde', 'amarillo', 'azul','rosa');
    
    for ($i=0; $i < count($colores); $i++) { 
        if ($colores[$i]=='azul') {
            unset($colores[$i]);
        }else{
            echo $i;
            echo $colores[$i].'<br>';   
        }
    }
}

function Zoo(){
    $matriz =   array(array('Perro', 'Leon', 'Cocodrilo'),array('Gato', 'Pantera', 'Caimán'));
    echo '<br>'.$matriz[1][1].'<br>';
}

function Notas()
{
    $nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
    $materias = array("Lengua", "Historia", "Inglés", "Matemáticas",);

    echo"<br>";

    echo "<table style=\"border: 1px solid black\">";
    echo "<td style=\"border: 1px solid black\"></td>";
    for ($k = 0; $k < count($materias); $k++) {
        echo "<td style=\"border: 1px solid black\"><b> " . $materias[$k] . "</td>";
    }
    for ($i = 0; $i < count($nombres); $i++) {
        echo "<tr>";
        echo "<td style=\"border: 1px solid black\"><b>" . $nombres[$i] . "</td>";
        for ($j = 0; $j < count($materias); $j++) {

            echo "<td style=\"border: 1px solid black\">" . rand(1,10) . "</td>";
        }
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";
}

?>