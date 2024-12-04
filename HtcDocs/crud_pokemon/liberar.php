<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boton.css">
    <title>Liberar pokemon</title>
</head>

<body>
    <?php
    $dbc = mysqli_connect('localhost', 'root');
    mysqli_select_db($dbc, 'pokemondb');
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $query = "SELECT * FROM pokes WHERE id={$_GET['id']};";
        if ($registro = mysqli_query($dbc, $query)) {
            $fila = mysqli_fetch_array($registro);

            echo "<form action='liberar.php' method=\"post\" class=\"form\">";
            echo "<h1>¿Realmente quiere liberar este pokemon?</h1><br><br>";
            echo "<strong>El nombre del pokemon es: </strong>" . $fila['nombre'] . "<br>";
            echo "<strong>El nivel del pokemon es: </strong>" . $fila['nivel'] . "<br>";
            echo "<strong>Los tipos del pokemon son: </strong>" . $fila['tipos'] . "<br>";
            echo "<strong>El sexo del pokemon es: </strong>" . $fila['sexo'] . "<br>";
            echo "<strong>El pokemon </strong><br>" . $fila['shiny'] . "<br>";
            echo "<strong>El pokemon pertenece a la generacion: </strong>" . $fila['generacion'] . "<br>";

            echo "<input type=\"hidden\" value=\"{$_GET['id']}\" name='id'><br>";
            echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a>";
            echo "<div <button class=\"ov-btn-grow-ellipse\">";
            echo "<input type=\"submit\" value=\"Liberar\" class=\"input\"><br>";
            echo "</div>";
            echo "</form>";
        } else {
            echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
            echo "<div class=\"form\">";
            echo "<p style=\"color:red;\">No se ha podido liberar el pokemon</p><p> porque " . mysqli_error($dbc) . "</p>";
            echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a></div>";
            echo "</div>";
        }
    } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $query = "DELETE FROM pokes WHERE id={$_POST['id']} LIMIT 1";
        $registro = mysqli_query($dbc, $query);
        if (mysqli_affected_rows($dbc) == 1) {
            echo "<div class=\"form\">";
            echo "<span >Pokemon liberado sin contratiempos</span>";
            echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a>";
            echo "</div>";
        } else {
            echo "<div class=\"form\">";
            echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
            echo "<p style=\"color:red;\">El pokemon no ha podido ser liberado</p>";
            echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a>";
            echo "</div>";
        }
    } else {
        echo "<div class=\"form\">";
        echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
        echo "<p style=\"color:red;\">No se ha podido acceder a la pagina</p>";
        echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a>";
        echo "</div>";
    }

    ?>
</body>

</html>

<style>
    body {
        background-image: url(Guarderia.jpg);
        background-repeat: none;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: black;
        opacity: .7;
        color: white;
        padding: 25px;
    }

    a {
        text-decoration: none;
    }

    .text {
        color: lightblue;
        transition: scale .5s;
        align-items: center;
    }

    .text:hover {
        scale: 1.6;
        color: mediumvioletred;
    }

    .input {
        background-color: transparent;
        border: none;
    }
</style>