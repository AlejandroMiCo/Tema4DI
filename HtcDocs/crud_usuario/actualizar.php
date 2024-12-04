<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion del usuario</title>
</head>

<body>
    <h1>Usuario para actualizar</h1>

    <?php
    $dbc = mysqli_connect('localhost', 'root');
    mysqli_select_db($dbc, 'usuariosbd');

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $query = "SELECT Nombre, Apellidos, correo FROM usuarios where Id = {$_GET['id']}";

        if ($r = mysqli_query($dbc, $query)) {
            $fila = mysqli_fetch_array($r);

            echo "<form action=\"actualizar.php\" method=\"post\">";
            echo "<input type=\"text\" value=\"{$fila['Nombre']}\" name=\"nombre\"><br>";
            echo "<input type=\"text\" value=\"{$fila['Apellidos']}\" name=\"apellidos\"><br>";
            echo "<input type=\"email\" value=\"{$fila['correo']}\" name=\"correo\"><br>";
            echo "<input type=\"hidden\" value=\"{$_GET['id']}\" name=\"id\"><br>";
            echo "<input type=\"submit\" value=\"Actualiar\">";

            echo "</form>";
        } else {
            echo "<p style=\"color: red;\">No se ha podido realizar la consulta por que" . mysqli_error($dbcs) . "</p>";
        }
    } else if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $error = false;

        if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo'])) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
        } else {
            echo "<p style=\"color: red;\">Todos los campos deberian estar cubiertos</p>";
            $error = true;
        }
        if (!$error) {
            $query = "UPDATE usuarios SET NOMBRE='$nombre',APELLIDOS='$apellidos',CORREO='$correo' WHERE ID={$_POST['id']}";
            $r = mysqli_query($dbc, $query);

            if (mysqli_affected_rows($dbc) == 1) {
                echo "<p style=\"color: blue;\">Usuario actualizado correctamente :D</p>";
                
            } else {
                
                echo "<p style=\"color: red;\">No se ha podido actualizar el usuario correctamente :(</p>";
            }
        }else{
            echo "<p style=\"color: red;\">No se ha podido acceder a la pagina :(</p>";
        }
    }
    mysqli_close($dbc);
    ?>
</body>

</html>