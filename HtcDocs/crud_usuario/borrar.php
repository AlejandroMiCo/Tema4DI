<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar usuario</title>
</head>

<body>
    <h1>Eliminar usuario</h1>

    <?php
    $dbc = mysqli_connect('localhost', 'root');
    mysqli_select_db($dbc, 'usuariosbd');

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $query = "SELECT Nombre, Apellidos, correo FROM usuarios where Id = {$_GET['id']}";

        if ($r = mysqli_query($dbc, $query)) {
            $fila = mysqli_fetch_array($r);

            echo "<form action=\"borrar.php\" method=\"post\">";
            echo "¿Quiere borrar este usuario?";
            echo "<strong>Nombre: </strong>{$fila['Nombre']}<br>";
            echo "<strong>Apellidos: </strong>{$fila['Apellidos']}<br>";
            echo "<strong>Correo: </strong>{$fila['correo']}<br>";
            echo "<input type=\"hidden\" value=\"{$_GET['id']}\" name=\"id\"><br>";
            echo "<input type=\"submit\" value=\"Borrar\">";
            echo "</form>";

        } else {
            echo "<p style=\"color: red;\">No se ha podido realizar la consulta por que" . mysqli_error($dbcs) . "</p>";
        }
    } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $query = "DELETE FROM usuarios WHERE id={$_POST['id']} LIMIT 1";
        $r = mysqli_query($dbc, $query);

        if (mysqli_affected_rows($dbc) == 1) {
            echo "<p style=\"color: blue;\">Usuario borrado correctamente :D</p>";
        } else {
            echo "<p style=\"color: red;\">No se ha podido borrar el usuario correctamente :(</p>";
        }
    }
    mysqli_close($dbc)
        ?>
</body>

</html>