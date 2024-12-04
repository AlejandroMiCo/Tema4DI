<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Php</title>
    <?php
    include 'funciones.php';
    ?>
</head>

<body>  
    <?php

    mostrar();

    mostrar2("hola mundo");

    $valor = edad(25);

    if ($valor) {
        echo "Eres mayor de edad";
    } else {
        echo "Eres menor de edad";
    }
    echo "<br>";
    dias_semana(2);

    ?>
    <table style="border: 1px dotted green">
        <?php
        $i = 1;
        $numero_table = 7;
        while ($i <= 10) {
            echo "<tr>";
            echo "<thead>";
            echo "<td style=\"border: 1px dotted green\">$numero_table X $i = " . $numero_table * $i . "</td>";
            echo "</tr>";
            $i++;
        }

        ?>
    </table>
    <?php
    $j = 1;
    do {
        echo $j . "<br>";
        $j++;
    } while ($j <= 10);
    $cadena3 = "Alejandro Mi Co";

    $nombre = preg_split("/ / ", $cadena3);

    print_r($nombre);


    $cadena4 = array("Alex", 24, true, 5.77, new DateTime("now"));
    $cadena5 = [23, "miranda", 4.33];
    echo "<br>";
    echo "<br>";

    print_r($cadena4);
    echo "<br>";
    echo "<br>";
    print_r($cadena5);
    //Desde aqui
    
    $cadena6 = array("nombre" => "Alex", "apellidos" => "Mi Co", "edad" => 24);
    echo "<br>";
    echo "<br>";
    var_dump($cadena6);

    echo "<br>";
    echo "<br>";

    echo $cadena6['edad'];
    echo "<br>";
    echo "<br>";

    $cadena7 = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
    $cadena8 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

    echo $cadena7[2][1];

    //array multidimensional asociativo
    
    $cadena9 = array(
        "usuario1" => array("nombre" => "Alex", "apelidos" => "Miranda", "edad" => 3),
        "usuario2" => array("nombre" => "david", "apellidos" => "bao garcia", "edad" => 36),
        "usuario3" => array("nombre" => "david", "apellidos" => "bao garcia", "edad" => 36)
    );

    echo "<br>";

    foreach ($cadena9 as $clave => $value) {
        echo "<strong>".$clave."</strong><br>";
        foreach ($value as $clave2 => $value2) {
            echo $value2 ."<br>";
        }
        echo "<br>";
    }

    $ceros = array_fill(0,10,0); //array de todo ceros
    $ceros2 = array_fill(0,10,array_fill(0,10,0)); //array bidimensional con todo ceros

    array_push($cadena5,"garcia",36);
    array_pop($cadena5);
    array_shift($cadena5);
    print_r($cadena5);

    ?>

</body>

</html>