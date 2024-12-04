<?php

function Formato($dato)
{
    $dato = trim($dato);
    $dato = htmlspecialchars($dato);
    $dato = stripslashes($dato);

    return $dato;
}

$dbc = mysqli_connect('localhost', 'root');
mysqli_select_db($dbc, 'pokemondb');

$error = false;

if (!empty($_POST['nombre']) && !empty($_POST['nivel']) && !empty($_POST['tipos']) && !empty($_POST['sexo']) && !empty($_POST['shiny']) && !empty($_POST['generacion'])) {
    $nombre = Formato($_POST['nombre']);
    $nivel = Formato($_POST['nivel']);
    $tipos = Formato($_POST['tipos']);
    $sexo = Formato($_POST['sexo']);
    $shiny = Formato($_POST['shiny']);
    $generacion = Formato($_POST['generacion']);
} else {
    $text = "<p style=\"color: red;\">Todos los campos deberian estar cubiertos</p>";
    echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
    $error = true;
}

if (!$error) {
    $query = "INSERT INTO pokes (id, nombre, nivel, tipos, sexo, shiny, generacion) VALUES (0, '$nombre', '$nivel', '$tipos', '$sexo', '$shiny', '$generacion')";
    if (mysqli_query($dbc, $query)) {
        $text = "<p style=\"color: white;\">Pokemon insertado correctamente :D</p>";
        echo "<body style=\"background-image: url(Guarderia.jpg);\"><body>";
    } else {
        $text = "<p style=\"color: red;\">No se ha podido añadir el pokemon por que" . mysqli_error($dbcs) . "</p>";
        echo "<body style=\"background-image: url(pikachuCrying.jpg);\"><body>";
    }
}

echo "<div class=\"form\"><span> $text </span>";
echo "<a href=\"mostrar.php\"><p class=\"text\">Ver pokes<p></a></div>";
mysqli_close($dbc);
?>

<style>
    body {
        
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form {
        display: flex;
        flex-direction: column;
        background-color: black;
        opacity: .7;
        color: white;
        padding: 25px;
        align-items: center;
        justify-content: center;
    }
    a{
        text-decoration: none;
    }
    .text{
        color: lightblue;
        transition: scale .5s;
    }
    .text:hover{
        scale: 1.6;
        color: mediumvioletred;
    }

</style>