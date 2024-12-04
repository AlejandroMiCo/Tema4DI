<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boton.css">
    <title>Datos de los pokes registrados</title>
</head>

<body>
    <h1>Datos de los pokemons registrados</h1>
    <hr>
    <?php

    $dbc = mysqli_connect('localhost', 'root');
    mysqli_select_db($dbc, 'pokemondb');

    $query = "SELECT * FROM pokes";

    if ($r = mysqli_query($dbc, $query)) {

        echo "<div class=\"form\">";
        while ($fila = mysqli_fetch_array($r)) {
            echo "<div>";

            echo "<strong>El nombre del pokemon es: </strong>" . $fila['nombre'] . "<br>";
            echo "<strong>El nivel del pokemon es: </strong>" . $fila['nivel'] . "<br>";
            echo "<strong>Los tipos del pokemon son: </strong>" . $fila['tipos'] . "<br>";
            echo "<strong>El sexo del pokemon es: </strong>" . $fila['sexo'] . "<br>";
            echo "<strong>El pokemon </strong>" . $fila['shiny'] . "<br>";
            echo "<strong>El pokemon pertenece a la generacion: </strong>" . $fila['generacion'] . "<br>";
            echo "<div class=\"enlaces\">";
            echo "<a href=\"actualizar.php?id={$fila['id']}\"><p class=\"text\">Actualizar pokemon</p></a>";
            echo "<a href=\"liberar.php?id={$fila['id']}\"><p class=\"text\">Liberar pokemon</p> </a>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
        echo "<p style=\"color: red;\">No se ha podido realizar la consulta por que" . mysqli_error($dbcs) . "</p>";
    }
    mysqli_close($dbc);
    ?>
    <hr>

    <a href="index.html"><button class="ov-btn-grow-ellipse">Volver a añadir</button></a>
</body>

</html>

<style>
    html {
        background-image: url(Guarderia.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        color: white;
    }

    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        columns: 3  ;
    }

    .form {
        width: 60dvw;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        background-color: transparent;
        opacity: .7;
        overflow-y: auto;
        height: 70dvh;
    }
    
    ::-webkit-scrollbar {
        display: none;
    }
    div {
        margin: 15px;
        padding: 15px;
        background-color: black;
        flex-wrap: wrap;
    }

    a {
        text-decoration: none;
    }

    .text {
        color: lightblue;
        transition: scale .5s;
    }

    .text:hover {
        scale: 1.6;
        color: mediumvioletred;
    }

    .enlaces {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 0;
        margin: 0;

    }
</style>